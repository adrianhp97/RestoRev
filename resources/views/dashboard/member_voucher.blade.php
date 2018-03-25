@extends('dashboard.layout')

@section('title')
  <h1>Member-Voucher</h1>
@endsection

@section('content')
@foreach($listVoucher as $voucher)
  <div>
    <a href="{{URL::route('dashboard-member-voucher-spec', ['code' => $voucher['code']])}}">
      {{ $voucher['name']}}
    </a>
  </div>
@endforeach
@endsection

@section('script')
@endsection