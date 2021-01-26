@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">تسليم طلبات النرخيص لمهندس   <small><i class="ti-angle-left"></i> <a target="_blank" href="{{ asset('') }}">الرئيسية</a></small></h4>
                </div>
                <div>
                    <div class="btn-group" dir="ltr" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary btn-icon-text">
                            طباعة
                            <i class="ti-printer btn-icon-append"></i>                                                                              
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">جميع طلبات تراخيص البناء الغير مسلمه بالموقع</h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>المالك</th>
                            <th>الهاتف</th>
                            <th>الغرض</th>
                            <th>رقم القطعة</th>
                            <th>الحي</th>
                            <th>تاريخ الاضافة</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                    
                        @foreach ($licences as $licence)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $licence->owner_name }}</td>
                                <td>{{ $licence->phone }}</td>
                                <td>{{ $licence->purpose_id }}</td>
                                <td>{{ $licence->land_number }}</td>
                                <td>{{ $licence->district_id }}</td>
                                <td>{{ $licence->created_at }}</td>
                                <td>
                                    <div class="btn-group" dir="ltr" role="group" aria-label="Basic example">
                                        
                                        @if ( auth()->user()->type == 1)
                                            <a href="{{ route('licence.delete',$licence->id) }}" class="btn btn-danger btn-icon-text mr-1 comfirm">
                                                <i class="ti-trash btn-icon-prepend"></i>
                                                حذف
                                            </a>
                                            <a href="{{ route('licence.toEng',$licence->id ) }}" class="btn btn-defualt btn-icon-text">
                                                <i class="ti-pencil-alt btn-icon-prepend"></i>
                                                تسليم لمهندس
                                            </a>
                                        @endif
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
