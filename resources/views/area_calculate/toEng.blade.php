@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">طلبات الترخيص  <small><i class="ti-angle-left"></i> تسليم الطلب لمهندس</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">إختر من قائمة المهندسين أدناه</h4>
                  <form class="forms-sample" method="POST" action="{{ route('licence.toEngStore') }}" >
                    @csrf

                    <input name="id" value="{{ $licence->id }}" type="hidden" >

                    <div class="form-group">
                      <label for="user_id"> المهندسين</label>
                      <select type="text" class="form-control" id="user_id" name="user_id" required >
                            
                            @foreach ($engs as $eng)
                                <option value="{{ $eng->id }}" >{{ $eng->name }}</option>
                            @endforeach
                            
                      </select>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success mr-2">تحديث</button>
                        <a href="{{ route('area.index') }}" class="btn btn-light">إلغاء</a>
                    </div>
                  </form>
                </div>
              </div>
        </div>
    </div>
@endsection
