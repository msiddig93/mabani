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
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title text-center">تقرير عن المناطق بالموقع</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>إسم المنطقة</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>
                    
                        <?php $i = 1; ?>
                
                    @foreach ($areas as $area)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $area->name }}</td>
                            <td>{{ $area->created_at }}</td>
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
