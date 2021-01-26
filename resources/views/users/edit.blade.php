@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">المستخدمين  <small><i class="ti-angle-left"></i> تعديل بيانات المستخدم</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات المستخدم الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('user.update') }}" >
                    @csrf

                    <input name="id" value="{{ $user->id }}" type="hidden" >

                    <div class="form-group">
                      <label for="name">الاسم الكامل</label>
                      <input type="text" value="{{ $user->name }}" class="form-control" id="name" name="name" required >
                    </div>
                    <div class="form-group">
                      <label for="type"> نوع المستخدم</label>
                      <select class="form-control" id="type"  name="type" required>
                        <option {{ $user->type == 1 ? 'selected' : '' }} value="1" >مدير</option>
                        <option {{ $user->type == 2 ? 'selected' : '' }} value="2" >مهندس</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="email">البريد الالكتروني</label>
                      <input type="email" value="{{ $user->email }}" readonly class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">كلمة المرور الجديدة</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="يترك فارغ في حالة عدم التغيير">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success mr-2">تحديث</button>
                        <button class="btn btn-light">إلغاء</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
