@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">الاحياء  <small><i class="ti-angle-left"></i> تعديل بيانات الحي</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات الحي الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('district.update') }}" >
                    @csrf

                    <input name="id" value="{{ $district->id }}" type="hidden" >
                    <input name="area_id" value="{{ $district->area_id }}" type="hidden" >

                    <div class="form-group">
                      <label for="name"> إسم الحي</label>
                      <input type="text" class="form-control" value="{{ $district->name }}" id="name" name="name" required >
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success mr-2">تحديث</button>
                        <a href="{{ route('district.index',$district->area_id) }}" class="btn btn-light">إلغاء</a>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
