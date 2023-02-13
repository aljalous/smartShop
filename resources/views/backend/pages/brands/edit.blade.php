@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          تعديل العلامة التجارية
        </div>
        <div class="card-body">
          <form action="{{ route('admin.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم العلامة التجارية</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $brand->name }}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">حول العلامة التجارية (اختياري)</label>
              <textarea name="description" rows="8" cols="80" class="form-control"> {!! $brand->description !!}</textarea>

            </div>


            <div class="form-group">
              <label for="oldimage">صورة العلامة التجارية القديمة</label> <br>

              <img src="{!! asset('images/brands/'.$brand->image) !!}" width="100"> <br>

              <label for="image">صورة العلامة التجارية الجديدة (اختياري)</label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">تعديل العلامة التجارية</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
