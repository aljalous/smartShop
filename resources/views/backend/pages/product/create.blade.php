@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          اضافة صنف جديد
        </div>
        <div class="card-body">
          <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            
            @include('backend.partials.messages')

            <div class="form-group">
              <label for="exampleInputEmail1">اسم الصنف</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="اسم الصنف">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">تفاصيل الصنف</label>
              <textarea name="description" rows="8" cols="80" class="form-control" placeholder="تفاصيل الصنف"></textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">السعر</label>
              <input type="number" class="form-control" name="price" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">الكمية</label>
              <input type="number" class="form-control" name="quantity" id="exampleInputEmail1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">تحديد التصنيف</label>
              <select class="form-control" name="category_id">
                <option value="">تحديد التصنيف لهذا الصنف</option>
                @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
                  <option value="{{ $parent->id }}">{{ $parent->name }}</option>

                  @foreach (App\Models\Category::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
                    <option value="{{ $child->id }}"> ------> {{ $child->name }}</option>

                  @endforeach

                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">تحديد العلامة التجارية</label>
              <select class="form-control" name="brand_id">
                <option value="">حدد العلامة التجارية لهذا الصنف</option>
                @foreach (App\Models\Brand::orderBy('name', 'asc')->get() as $brand)
                  <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="product_image">صور الصنف</label>

              <div class="row">
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
                <div class="col-md-4">
                  <input type="file" class="form-control" name="product_image[]" id="product_image" >
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary">اضافة الصنف</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
