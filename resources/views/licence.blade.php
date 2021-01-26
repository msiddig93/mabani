@extends('layouts.home')


@section('content')

    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a href="#">طلب ترخيص بناء</a></h2>
            <div class="stripe-line"></div>
        </div>
        <!-- post-thumbnail /-->
        <div class="cat-box-content">
            <div id="slideshow40" style="height: auto;" class="group_items-box">
                <form action="{{ route('licence.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="form-group">
                      <label for="owner_name"> إسم مالك القطعة</label>
                      <input type="text" class="form-control" id="owner_name" name="owner_name" required >
                    </div>

                    <div class="form-group">
                      <label for="phone"> رقم الهاتق</label>
                      <input type="text" class="form-control" id="phone" name="phone" required >
                    </div>

                    <div class="form-group">
                      <label for="name"> الغرض من الترخيص</label>
                      <select name="purpose_id" required class="form-control">
                            @foreach (\App\Purpose::all() as $purpose)
                                <option value="{{ $purpose->id }}">{{ $purpose->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{--  <div class="form-group">
                      <label for="name"> المنطقة</label>
                        <select required id="area_id"  class="form-control">
                            <option></option>
                            @foreach (\App\Area::all() as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>  --}}

                    <div class="form-group">
                      <label  for="name"> الحي</label>
                        <select required name="district_id" class="form-control">
                            <option></option>
                            @foreach (\App\District::all() as $district)
                                <option value="{{ $district->id }}">{{ $district->name }} - {{ $district->area->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="land_number"> رقم القطعة</label>
                      <input type="text"  class="form-control" id="land_number" name="land_number" required >
                    </div>

                    <div class="form-group">
                      <label for="part"> المربع</label>
                      <input type="text" class="form-control" id="part" name="part" required >
                    </div>

                    <div class="form-group">
                      <label for="certificate"> صورة لشهادة البحث</label>
                      <input type="file" class="form-control" id="certificate" name="certificate" required >
                    </div>

                    <div class="form-group">
                      <label for="prototype"> صورة للرسم الكروكي</label>
                      <input type="file" class="form-control" id="prototype" name="prototype" required >
                    </div>

                    <div class="form-group">
                      <label for="blueprint"> صورة لمخططات الهندسية</label>
                      <input type="file" class="form-control" id="blueprint" name="blueprint" required >
                    </div>

                    <div class="form-group text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary mr-2">إرسال طلب الترخيص</button>
                    </div>
                    
                </form>
                <div class="clear"></div>
            </div>
            <div id="nav40" class="scroll-nav"></div>
        </div>
        <!-- .cat-box-content /-->
    </section>
@stop
