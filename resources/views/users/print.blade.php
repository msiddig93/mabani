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
                    <h3 class="card-title text-center">تقرير عن المستخدمين بالموقع</h3>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>الاسم الكامل</th>
                            <th>البريد الالكتروني</th>
                            <th>نوع المستخدم</th>
                        </tr>
                        </thead>
                        <tbody>
                    
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type == 1 ? "مدير" : "مهندس" }}</td>
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
