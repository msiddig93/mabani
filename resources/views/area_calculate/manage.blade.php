@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">طلبات تراخيص البناء  <small><i class="ti-angle-left"></i> الرئيسية</small></h4>
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
                                    <th>الغرض من الترخيص</th>
                                    <td>{{ $licence->purpose->name }}</td>
                                </tr>
                                <tr>
                                    <th>رقم القطعة </th>
                                    <td>{{ $licence->land_number }}</td>
                                </tr>
                                <tr>
                                    <th>المربع</th>
                                    <td>{{ $licence->part }}</td>
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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">التقارير 
                        <a style="float:left;margin-bottom:5px"ref="{{ route('report.create',$licence->id) }}" class="btn btn-outline-success btn-icon-text pull-left">
                            إضافة
                            <i class="ti-plus btn-icon-append"></i>                                                                              
                        </a>
                    </h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>البند</th>
                            <th>الملاحظة</th>
                            <th>الحالة</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                            
                            @foreach ($licence->reports as $report)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $report->clause }}</td>
                                    <td>{{ $report->note }}</td>
                                    <td>{{ $report->status }}</td>
                                    <td dir="ltr" >{{ $report->created_at }}</td>
                                </tr>
                            @endforeach
                            
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
                        <a style="float:left;margin-bottom:5px"ref="{{ route('report.create',$licence->id) }}" class="btn btn-outline-success btn-icon-text pull-left">
                            إضافة
                            <i class="ti-plus btn-icon-append"></i>                                                                              
                        </a>
                    </h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>البند</th>
                            <th>المساحة (م2)</th>
                            <th>الحالة</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                            
                            @foreach ($licence->reports as $report)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $report->clause }}</td>
                                    <td>{{ $report->note }}</td>
                                    <td>{{ $report->status }}</td>
                                    <td dir="ltr" >{{ $report->created_at }}</td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
