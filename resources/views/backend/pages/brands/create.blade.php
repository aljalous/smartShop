@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          اضافة علامة تجارية
        </div>
        <div class="card-body">
          <form action="{{ route('admin.brand.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم العلامة التجارية</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="ادخل اسم العلامة التجارية">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">حول العلامة التجارية</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="ادخل حول العلامة التجارية"></textarea>
            </div>


            <div class="form-group">
              <label for="image">صورة العلامة التجارية (اختياري)</label>
              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">اضافة علامة تجارية</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
