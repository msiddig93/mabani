@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">حساب المساحة لطلب الترخيص  <small><i class="ti-angle-left"></i> إضافة مساحة جديدة</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات المساحة الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('area_calculate.store') }}" >
                    @csrf

                    <input type="hidden" name="licence_id" value="{{ $licence->id }}" >

                    <div class="form-group">
                      <label for="name">البند</label>
                      <input type="text" class="form-control" id="name" name="name" required >
                    </div>

                    <div class="form-group">
                      <label for="total_area">المساحة (م2)</label>
                      <textarea type="number" class="form-control" id="total_area" name="total_area" required ></textarea>
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
