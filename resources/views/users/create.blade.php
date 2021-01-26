@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">المستخدمين  <small><i class="ti-angle-left"></i> إضافة مستخدم جديد</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات المستخدم الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('user.store') }}" >
                    @csrf

                    <div class="form-group">
                      <label for="name">الاسم الكامل</label>
                      <input type="text" class="form-control" id="name" name="name" required >
                    </div>
                    <div class="form-group">
                      <label for="type"> نوع المستخدم</label>
                      <select class="form-control" id="type"  name="type" required>
                        <option value="1" >مدير</option>
                        <option value="2" >مهندس</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="email">البريد الالكتروني</label>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password">كلمة المرور</label>
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mr-2">حفظ</button>
                        <button class="btn btn-light">إلغاء</button>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
