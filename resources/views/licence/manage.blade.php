@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">طلبات تراخيص البناء  <small><i class="ti-angle-left"></i> <a target="_blank" href="{{ asset('') }}">الرئيسية</a></small></h4>
                </div>
                <div>
                    <div class="btn-group" dir="ltr" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary btn-icon-text">
                            طباعة
                            <i class="ti-printer btn-icon-append"></i>                                                                              
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <h3 class="card-title">المرفقات </h3>
                    <div class="row">
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">شهاة البحث </h3>
                                    <div class="table-responsive">
                                        <a target="_blank" href="{{ asset('storage/'.$licence->certificate)}}" ><img title="شهاة البحث" src="{{ asset('storage/'.$licence->certificate)}}" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">الرسم الكروكي </h3>
                                    <div class="table-responsive">
                                        <a target="_blank" href="{{ asset('storage/'.$licence->prototype)}}"><img title="شهاة البحث" src="{{ asset('storage/'.$licence->prototype)}}" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">المخطط الهندسي </h3>
                                    <div class="table-responsive">
                                        <a target="_blank" href="{{ asset('storage/'.$licence->blueprint)}}"><img title="شهاة البحث" src="{{ asset('storage/'.$licence->blueprint)}}" ></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- التقارير --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">التقارير 
                        <a style="float:left;margin-bottom:5px" href="{{ route('report.create',$licence->id) }}" class="btn btn-outline-success btn-icon-text pull-left">
                            إضافة
                            <i class="ti-plus btn-icon-append"></i>                                                                              
                        </a>
                    </h3>
                    
                </div>
            </div>
        </div>
        {{-- حساب المساحات --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">حساب رسوم المساحات 
                        @if ($licence->status == 0)
                        <a style="float:left;margin-bottom:5px" href="{{ route('area_calculate.create',$licence->id) }}" class="btn btn-outline-success btn-icon-text pull-left">
                            إضافة
                            <i class="ti-plus btn-icon-append"></i>                                                                              
                        </a> 
                        @endif
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
                            <a style="float:left;margin-top:5px" href="{{ route('print.pay',$licence->id) }}" target="_blank" class="btn btn-info btn-icon-text pull-left">
                                طباعة إذن الدفع
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
@endsection
