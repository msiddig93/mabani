@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">لوحة التحكم</h4>
                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">كل الطلبات</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ \App\Licence::count() }}</h3>
                        <i class="ti-shield color-info icon-lg  mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">المستخدمين</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ \App\User::count() }}</h3>
                        <i class="ti-user icon-lg"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">المناطق</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ \App\Area::count() }}</h3>
                        <i class="ti-pie-chart icon-lg  mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">الاغراض</p>
                    <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ \App\Purpose::count() }}</h3>
                        <i class="ti-shield icon-lg  mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">جميع طلبات تراخيص البناء بالموقع</h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>المالك</th>
                            <th>الهاتف</th>
                            <th>الغرض</th>
                            <th>رقم القطعة</th>
                            <th>الحي</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                    
                        @foreach (\App\Licence::all() as $licence)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $licence->owner_name }}</td>
                                <td>{{ $licence->phone }}</td>
                                <td>{{ $licence->purpose->name }}</td>
                                <td>{{ $licence->land_number }}</td>
                                <td>{{ $licence->district->name }}</td>
                                <td>{{ $licence->created_at }}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    
    @foreach ( \App\Area::all() as $area)
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">  تراخيص البناء من منطقة {{ $area->name }}</h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>المالك</th>
                            <th>الهاتف</th>
                            <th>الغرض</th>
                            <th>رقم القطعة</th>
                            <th>الحي</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                    
                        @foreach (\App\Licence::all() as $licence)
                        @if ($licence->district->area->id == $area->id )
                                                    
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $licence->owner_name }}</td>
                                <td>{{ $licence->phone }}</td>
                                <td>{{ $licence->purpose->name }}</td>
                                <td>{{ $licence->land_number }}</td>
                                <td>{{ $licence->district->name }}</td>
                                <td>{{ $licence->created_at }}</td>
                            </tr>
                        @endif
                        @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    
@endsection
