@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="card card-body">
        <h3 class="titlep1">مرحبًا بك في لوحة مدير الموقع الخاصة بك</h3>
        <br>
        <br>
        <p class="btnmain">
          <a href="{!! route('index') !!}" class="btn btn-primary btn-lg btnmainsite" target="_blank">زيارة الموقع الرئيسي</a>
        </p>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="container-fluid clearfix">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2023 <a href="#" target="_blank">Smart Shop</a>. All rights reserved.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">موقع تجارة الكتروني تجريبي <i class="mdi mdi-heart text-danger"></i></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
@endsection
