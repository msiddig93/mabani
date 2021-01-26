@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                <h4 class="font-weight-bold mb-0">المستخدمين  <small><i class="ti-angle-left"></i> <a target="_blank" href="{{ asset('') }}">الرئيسية</a></small></h4>
                </div>
                <div>
                    <div class="btn-group" dir="ltr" role="group" aria-label="Basic example">
                        <a target="_blank" href="{{ route('user.print') }}" class="btn btn-outline-secondary btn-icon-text">
                            طباعة
                            <i class="ti-printer btn-icon-append"></i>                                                                              
                        </a>
                        <a href="{{ route('user.create') }}" class="btn btn-outline-success btn-icon-text">
                            إضافة
                            <i class="ti-plus btn-icon-append"></i>                                                                              
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <h3 class="card-title">جميع المستخدمين بالموقع</h3>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم الكامل</th>
                        <th>البريد الالكتروني</th>
                        <th>نوع المستخدم</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->type == 1 ? "مدير" : "مهندس" }}</td>
                            <td>
                                <div class="btn-group" dir="ltr" role="group" aria-label="Basic example">
                                    <a href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-icon-text mr-1 comfirm">
                                        <i class="ti-trash btn-icon-prepend"></i>
                                        حذف
                                    </a>
                                    <a href="{{ route('user.edit',$user->id ) }}" class="btn btn-success btn-icon-text">
                                        <i class="ti-pencil-alt btn-icon-prepend"></i>
                                        تعديل
                                    </a>
                                </div>
                            </td>
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
