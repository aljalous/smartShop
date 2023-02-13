@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          اضافة تصنيف جديد
        </div>
        <div class="card-body">
          <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم التصنيف</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="ادخل اسم التصنيف">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">حول التصنيف</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="ادخل حول التصنيف"></textarea>

            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">التصنيف الاب (اختياري)</label>
              <select class="form-control" name="parent_id">
                <option value="">حدد التصنيف الاب</option>
                @foreach ($main_categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>

            </div>
            <div class="form-group">
              <label for="image">صورة التصنيف (اختياري)</label>
              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">اضافة تصنيف جديد</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
