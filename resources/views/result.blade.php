@extends('layouts.home')


@section('content')

    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a href="#">متابعة طلب ترخيص بناء</a></h2><br>
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
                            <h3 class="card-title">  
                                @if ($licence->status == 0)
                                    <a style="float:left;margin-top:5px;margin-left:5px" href="{{ route('track.bank',$licence->id) }}" class="btn btn-success btn-icon-text pull-left">
                                        دفع عن طريق البنك
                                        <i class="ti-print btn-icon-append"></i>                                                                              
                                    </a>
                                @else
                                    <div class="alert alert-success m-3">لقد تم سداد قيمة الترخيص</div>
                                @endif
                            </h3>
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
