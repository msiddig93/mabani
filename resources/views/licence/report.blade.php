@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">تقارير طلبات تراخيص البناء  <small><i class="ti-angle-left"></i> <a target="_blank" href="{{ asset('') }}">الرئيسية</a></small></h4>
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
    @foreach ( $licences as $licence)
    @if ($licence->reports->count() > 0)
       <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">  تقارير تراخيص البناء رقم  {{ $licence->id }}</h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                                <th>الرقم</th>
                                <th>البند</th>
                                <th>الملاحظة</th>
                                <th>الحالة</th>
                                <th>تاريخ الاضافة</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                    
                         @foreach ($licence->reports as $report)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $report->clause }}</td>
                                <td>{{ $report->note }}</td>
                                <td>{{ $report->status }}</td>
                                <td dir="ltr" >{{ $report->created_at }}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @endif
    
    @endforeach
@endsection
