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
                  <form class="forms-sample" method="POST" action="{{ route('purpose.update') }}" >
                    @csrf

                    <input name="id" value="{{ $purpose->id }}" type="hidden" >

                    <div class="form-group">
                      <label for="name"> إسم الغرض</label>
                      <input type="text" class="form-control" value="{{ $purpose->name }}" id="name" name="name" required >
                    </div>
                    <div class="form-group">
                      <label for="price">سعر المتر المربع</label>
                      <input type="number" class="form-control" value="{{ $purpose->price }}" id="price" name="price" required>
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
