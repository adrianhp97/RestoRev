@extends('client.layout')

@section('content')
<div class="content">
  <div class="contentHeader row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <h1>Promotions</h1>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row promos">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="row promoCard">
        <div class="col-md-2">
          <img src="assets/mcd.png" class="img-fluid" />
        </div>
        <div class="col-md-6">
          <h3>McDonalds</h3>
          <p>50% Deal</p>
          <p>Expired in 31st March 2018</p>
        </div>
        <div class="col-md-4">
          <button class="btn btn-primary">Get Voucher</button>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
  <div class="row paginationRow">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <nav aria-label="Pagination">
        <ul class="pagination">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="col-md-3"></div>
</div>  <!-- /end of content -->
@endsection

@section('script')
@endsection