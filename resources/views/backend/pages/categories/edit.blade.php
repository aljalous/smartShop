@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          تعديل التصنيف
        </div>
        <div class="card-body">
          <form action="{{ route('admin.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم التصنيف</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $category->name }}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">حول التصنيف (اختياري)</label>
              <textarea name="description" rows="8" cols="80" class="form-control"> {!! $category->description !!}</textarea>

            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">التصنيف الاب (اختياري)</label>
              <select class="form-control" name="parent_id">
                <option value="">حدد التصنيف الاب</option>
                @foreach ($main_categories as $cat)
                  <option value="{{ $cat->id }}" {{ $cat->id == $category->parent_id ? 'selected' : '' }}>{{ $cat->name }}</option>
                @endforeach
              </select>

            </div>
            <div class="form-group">
              <label for="oldimage">صورة التصنيف القديمة</label> <br>

              <img src="{!! asset('images/categories/'.$category->image) !!}" width="100"> <br>

              <label for="image">صورة التصنيف الجديدة (اختياري)</label>

              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-success">تعديل التصنيف</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
