@extends('layouts.home')


@section('content')

    <section class="cat-box scroll-box">
        <div class="cat-box-title">
            <h2><a href="#">متابعة طلب ترخيص بناء</a></h2><br>
            <h2><a href="#">قم بإدخال رقم القطعة لعرض حالة الطلب</a></h2>
            <div class="stripe-line"></div>
        </div>
        <!-- post-thumbnail /-->
        <div class="cat-box-content">
            
            @if (Session::has('message'))
              <div class="alert alert-danger text-center">
                  {{ Session::get('message') }}
              </div>
            @endif
            
            
            <div id="slideshow40" style="height: auto;" class="group_items-box">
                <form action="{{ route('track.search') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group">
                      <label for="land_number"> رقم القطعة</label>
                      <input type="text"  class="form-control" value="{{ old('land_number') }}" id="land_number" name="land_number" required >
                    </div>

                    <div class="form-group text-center">
                        <hr>
                        <button type="submit" class="btn btn-primary mr-2"> بحـــــــث </button>
                    </div>
                    
                </form>
                <div class="clear"></div>
            </div>
            <div id="nav40" class="scroll-nav"></div>
        </div>
        <!-- .cat-box-content /-->
    </section>
@stop
