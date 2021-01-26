<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Licence;
use App\Bank;
use App\Payment;
use Illuminate\Support\Facades\Storage;
use DB;
class ForntController extends Controller
{
    public function licence(){
        return view('licence');
    }

    public function track(){
        return view('track');
    }

    public function about(){
        return view('about');
    }

    public function laws(){
        return view('laws');
    }

    public function bank($id){
        $licence = Licence::find($id);
        // if($licence->status != 0){
        //     return redirect()->back()->with(["message" => "عفواً, لقد تم سداد قيمة الترخيص بالفعل"])->withInput();
        // }
        return view('bank',compact('licence'));
    }

    public function bankPaymet(Request $request)
    {
        //2202031
        // return $request->all();
        $account = Bank::where("account_no",$request->account_no)->first();
        if(empty($account)){
            return redirect()->back()->with(["message" => "عفواً, لم يتم العثور علي أي بيانات حساب متطابقة"])->withInput();
        }else{
            if($account->balance < $request->amount){
                return redirect()->back()->with(["message" => "عفواً, لا يوجد رصيد كافي لإكمال هذه المعاملة "])->withInput();
            }else{
                $account->update([
                    "balance" => $account->balance - $request->amount
                ]);

                $to = Bank::where("account_no","7202031")->first();

                $to->update([
                    "balance" => $account->balance + $request->amount
                ]);

                Payment::create([
                    'client_name'=> $account->client_name,
                    'from'=> $account->account_no,
                    'to'=> $to->account_no,
                    'licence_id'=> $request->licence_id,
                    'amount'=> $request->amount,
                ]);

                Licence::find($request->licence_id)->update([
                    "status" => 1
                ]);

                return redirect()->back()->with(["success" => "تمت عملية السداد بنجاح"])->withInput();
            }
        }
    }

    public function store(Request $request){
        
        try{
            DB::beginTransaction();
             #1 store licence data in database .
            $licence = Licence::create([
                'owner_name' => $request->owner_name,
                'phone' => $request->phone,
                'purpose_id' => $request->purpose_id,
                'district_id' => $request->district_id,
                'land_number' => $request->land_number,
                'part' => $request->part,
            ]);

            #2 upload images 3 types of images
            // 1 upload certificate image .
            if ($request->file('certificate')){

                $avatar = $licence->id.'_certificate'.".". @strtolower(end(explode('.',$_FILES['certificate']['name'] )));
                $path = $request->file('certificate')->storeAs(
                    '/licence',
                    $avatar
                );

                $certificate = $path;
            }
            // 2 upload prototype image .
            if ($request->file('prototype')){

                $avatar = $licence->id.'_prototype'.".". @strtolower(end(explode('.',$_FILES['prototype']['name'] )));
                $path = $request->file('prototype')->storeAs(
                    '/licence',
                    $avatar
                );

                $prototype = $path;
            }
            // 3 upload blueprint image .
            if ($request->file('blueprint')){

                $avatar = $licence->id.'_blueprint'.".". @strtolower(end(explode('.',$_FILES['blueprint']['name'] )));
                $path = $request->file('blueprint')->storeAs(
                    '/licence',
                    $avatar
                );

                $blueprint = $path;
            }
        // update the licnce images 
            $licence->update([
                'certificate' => $certificate,
                'prototype' => $prototype,
                'blueprint' => $blueprint,
             ]);
            DB::commit();
            return redirect()->route('confirm');
        }catch(Exception $ex){
            DB::rollback();
            return redirect()->route('licence');
        }        
        
        
    }

    public function search(Request $request){
        
        try{
             #1 store licence data in database .
            $licence = Licence::where('land_number', $request->land_number)->first();
            if(!empty($licence)){
                return view('result',compact('licence'));
            }else{
                
                return redirect()->back()->with(["message" => "لا توجد نتائج بحث مطابقة"])->withInput();
            }
            
        }catch(Exception $ex){
            return redirect()->back()->with(["message" => "لا توجد نتائج بحث مطابقة"])->withInput();
        }        
        
        
    }

    public function confirm(){
        return view('confirm');
    }
}
