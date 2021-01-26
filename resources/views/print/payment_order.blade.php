@extends('layouts.print')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table print">
                            <tbody>
                                <tr>
                                    <th><img class="img logo" src="{{ asset('img/logo.png') }}" ></th>
                                    <th>
                                        <p>وزارة التخطيط العمراني</p>
                                        <p>إدارة المباني</p>
                                    </th>
                                    <th><img class="img logo" src="{{ asset('img/logo.png') }}" ></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center text-center">
                <h2 style="    width: 100%;" class="font-weight-bold mb-0">
                    إذن دفع
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">بيانات مقدم الطلب</h3>
                    <div class="table-responsive">
                        <table class="table ">
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
                        <table class="table ">
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
       
        
        {{-- حساب المساحات --}}
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table ">

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
                                        <strong>{{ $licence->area_caluclates->sum('total_area') * $licence->purpose->price + $licence->area_caluclates->sum('total_area') * 10 }}</strong>
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
@endsection
