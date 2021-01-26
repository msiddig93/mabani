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
                    <h3 class="card-title text-center">تقرير عن الاحياء بالموقع</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>إسم الحي</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>
                    
                        <?php $i = 1; ?>
                
                        @foreach ($area->districts as $district)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $district->name }}</td>
                                <td>{{ $district->created_at }}</td>
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
