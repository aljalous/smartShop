@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          اضافة مدينة
        </div>
        <div class="card-body">
          <form action="{{ route('admin.division.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم المدينة</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="ادخل اسم المدينة">
            </div>

            <div class="form-group">
              <label for="priority">الاولوية</label>
              <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" placeholder="ادخل اولوية المدينة">
            </div>

            <button type="submit" class="btn btn-primary">اضافة مدينة</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
