<?php

namespace App\Http\Controllers\Admin;

use App\Licence;
use App\User;
use App\Bank;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(auth()->user()->type == 1){
            $licences = Licence::all();
        }else{
            $licences = Licence::where('user_id',auth()->user()->id)->get();
        }
        return view('licence.index',compact('licences'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pass()
    {
        $licences = Licence::where('user_id',0)->get();
       
        return view('licence.pass',compact('licences'));
    }

    /**
     * Display a Report form Licence.
     *
     * @return \Illuminate\Http\Response
     */
    public function report()
    {
        $licences = Licence::all();
       
        return view('licence.report',compact('licences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage($id)
    {
        $licence = Licence::find($id);
        return view('licence.manage',compact('licence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bank($id)
    {
        $licence = Licence::find($id);
        return view('licence.bank',compact('licence'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
                return redirect()->back()->with(["success" => "تمت عملية السداد بنجاح"])->withInput();
            }
        }
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function toEng($id)
    {
        $licence = Licence::find($id);
        $engs = User::where('type',2)->get();
        return view('licence.toEng',compact('licence','engs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function toEngStore(Request $request)
    {
        $licence = Licence::find($request->id);

        $licence->user_id = $request->user_id;
        $licence->save();

        return redirect()->route('licence.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licence $licence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licence  $licence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licence $licence)
    {
        //
    }
}
