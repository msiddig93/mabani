@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">تقرير طلب الترخيص  <small><i class="ti-angle-left"></i> إضافة تقرير جديد</small></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">بيانات التقرير الاساسية</h4>
                  <form class="forms-sample" method="POST" action="{{ route('report.store') }}" >
                    @csrf

                    <input type="hidden" name="licence_id" value="{{ $licence->id }}" >

                    <div class="form-group">
                      <label for="clause">البند</label>
                      <input type="text" class="form-control" id="clause" name="clause" required >
                    </div>
                    <div class="form-group">
                      <label for="note">الملاحظات</label>
                      <textarea type="text" class="form-control" id="note" name="note" required ></textarea>
                    </div>
                    
                    <div class="form-group">
                      <label for="clause">الحالة</label>
                      <select type="text" class="form-control" name="status" required >
                        <option></option>
                        <option value="مطابق"  >مطابق</option>
                        <option value="غير مطابق"  >غير مطابق</option>
                        <option value="تم المراجعة"  >تم المراجعة</option>
                      </select>
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
