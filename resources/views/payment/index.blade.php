@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0"> عمليات الدفع  <small><i class="ti-angle-left"></i> <a target="_blank" href="{{ asset('') }}">الرئيسية</a></small></h4>
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
                    <h3 class="card-title">جميع  عمليات الدفع بالموقع</h3>
                    <div class="table-responsive">
                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>الرقم</th>
                            <th>إسم صاحب الحساب</th>
                            <th>من حساب</th>
                            <th>الي حساب</th>
                            <th>المبلغ</th>
                            <th>رقم الترخيص</th>
                            <th>تاريخ الاضافة</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i = 1; ?>
                    
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $payment->client_name }}</td>
                                <td>{{ $payment->from }}</td>
                                <td>{{ $payment->to }}</td>
                                <td>{{ $payment->amount }}</td>
                                <td><a href="{{ route('licence.manage',$payment->licence_id) }}"><strong>{{ $payment->licence_id }}</strong></a></td>
                                <td>{{ $payment->created_at }}</td>
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
