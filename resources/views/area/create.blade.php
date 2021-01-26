@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">المناطق  <small><i class="ti-angle-left"></i> إضافة منطقة جديد</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات المنطقة الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('area.store') }}" >
                    @csrf

                    <div class="form-group">
                      <label for="name"> إسم المنطقة</label>
                      <input type="text" class="form-control" id="name" name="area_name" required >
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
