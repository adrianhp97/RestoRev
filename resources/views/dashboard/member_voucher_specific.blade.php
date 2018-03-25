@extends('dashboard.layout')

@section('title')
  <h1>Voucher Member of {{ $voucher['code'] }}</h1>
@endsection

@section('content')
<div class="container">
  <input type="hidden" id="code" name="code" value="{{ $voucher['code'] }}">
  <div id="toolbar">
    <button id="delete-button" class="btn btn-default">Delete</button>
  </div>

  <table id="table"></table>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{URL::asset('/js/tableMemberVoucher.js')}}"></script>
@endsection