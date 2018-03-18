@extends('client.layout')

@section('content')
<div class="row content">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    <h1>Sign Up as a Member!</h1>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Password</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Phone Number</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <button class="btn btn-primary">Sign Up</button>
    </form>
  </div>
  <div class="col-md-3"></div>
</div>  <!-- /end of content -->
@endsection

@section('script')
@endsection