@extends('layouts.home')


@section('content')

    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a href="#">سداد رسوم الترخيص عن طريق البنك</a></h2><br>
            <div class="stripe-line"></div>
        </div>
        <!-- post-thumbnail /-->
        <div class="cat-box-content">
            <div id="slideshow40" style="height: auto;" class="group_items-box">
                {{-- حساب المساحات --}}
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">بيانات مقدم الطلب</h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>إسم المالك</th>
                                            <td>{{ $licence->owner_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>الهاتف</th>
                                            <td>{{ $licence->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th>العنوان</th>
                                            <td>{{ $licence->district->name }} - {{ $licence->district->area->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>تاريخ الطلب</th>
                                            <td dir="ltr" >{{ $licence->created_at }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">بيانات القطعة </h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tbody>
                                        <tr>
                                            <th>رقم القطعة </th>
                                            <td>{{ $licence->land_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>المربع</th>
                                            <td>{{ $licence->part }}</td>
                                        </tr>
                                        <tr>
                                            <th>الغرض من الترخيص</th>
                                            <td>{{ $licence->purpose->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>سعر المتر للغرض</th>
                                            <td>{{ $licence->purpose->price }}</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">سداد الرسوم عن طريق البنك 
                            </h3>

                            
                            @if(Session::has('message'))
                                <div class="alert alert-danger text-center" >
                                    {{ Session::get('message') }}
                                </div>
                            @endif
                            
                            
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center" >
                                    {{ Session::get('success') }}
                                </div>
                            @else
                                <form class="forms-sample" method="POST" action="{{ route('track.bankPaymet') }}" >
                                    @csrf

                                    <input type="hidden" name="licence_id" value="{{ $licence->id }}" >

                                    <div class="form-group">
                                        <label for="clause">المبلغ</label>
                                        <input type="text" class="form-control text-center"  value="{{ $licence->area_caluclates->sum('total_area') * $licence->purpose->price + $licence->area_caluclates->sum('total_area') * 10 }}" readonly id="amount" name="amount" required >
                                    </div>
                                    <div class="form-group">
                                        <label for="clause">البنك</label>
                                        <select type="text" class="form-control" name="status" required >
                                            <option value="الخرطوم"  >الخرطوم</option>
                                            <option value="البركة"  >البركة</option>
                                            <option value="فيصل الاسلامي"  >فيصل الاسلامي</option>
                                            <option value="المزارع التجاري"  >المزارع التجاري</option>
                                            <option value="الثروة الحيوانية"  >الثروة الحيوانية</option>
                                            <option value="أمدرمان الوطني"  >أمدرمان الوطني</option>
                                            {{--  <option value="مطابق"  >مطابق</option>  --}}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="note">رقم الحساب</label>
                                        <input type="text" class="form-control" value="{{ old('account_no')}}"  id="account_no" name="account_no" required >
                                    </div>
                                    
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-success mr-2">ســــــداد</button>
                                    </div>
                                </form>
                            @endif
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">حساب رسوم المساحات 
                            </h3>
                            <div class="table-responsive">
                                <table class="table table-hover">

                                    <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>البند</th>
                                        <th>المساحة (م2)</th>
                                        <th>سعر المتر لغرض</th>
                                        <th>إجمالي السعر</th>
                                        <th>تاريخ الاضافة</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i = 1; ?>
                                        
                                        @foreach ($licence->area_caluclates as $area)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $area->name }}</td>
                                                <td>{{ $area->total_area }}</td>
                                                <td>{{ $licence->purpose->price }}</td>
                                                <td>{{ $area->total_area * $licence->purpose->price }}</td>
                                                <td dir="ltr" >{{ $area->created_at }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" style="text-align:left" >الاجمالي</td>
                                            <td>
                                                {{ $licence->area_caluclates->sum('total_area')}}
                                            </td>
                                            <td>_</td>
                                            <td>
                                                {{ $licence->area_caluclates->sum('total_area') * $licence->purpose->price }}
                                            </td>
                                            <td>_</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" >دعم الطلاب</td>
                                            <td>5</td>
                                            <td>{{ $licence->area_caluclates->sum('total_area') * 5}}</td>
                                            <td>_</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" >بدل موافق</td>
                                            <td>3</td>
                                            <td>{{ $licence->area_caluclates->sum('total_area') * 3}}</td>
                                            <td>_</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" >رسوم مهنية</td>
                                            <td>2</td>
                                            <td>{{ $licence->area_caluclates->sum('total_area') * 2}}</td>
                                            <td>_</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">إجمالي الرسوم النهائية</td>
                                            <td>_</td>
                                            <td>
                                                {{ $licence->area_caluclates->sum('total_area') * $licence->purpose->price + $licence->area_caluclates->sum('total_area') * 10 }}
                                            </td>
                                            <td>_</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="clear"></div>
            </div>
            <div id="nav40" class="scroll-nav"></div>
        </div>
        <!-- .cat-box-content /-->
    </section>
@stop
