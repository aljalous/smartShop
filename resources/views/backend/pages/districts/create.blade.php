@extends('backend.layouts.master')

@section('content')
 <style>
  div.rtl {
    direction: rtl;
  }
  
 </style>
  <div class="main-panel" >
    <div class="content-wrapper">

      <div class="card rtl">
        <div class="card-header">
         اضافة منطقة
        </div>
        <div class="card-body rtl" >
          <form action="{{ route('admin.district.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('backend.partials.messages')
            <div class="form-group">
              <label for="name">اسم المنطقة</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="ادخل اسم المنطقة">
            </div>

            <div class="form-group">
              <label for="division_id">حدد المدينة لهذه المنطقة</label>
              <select class="form-control" name="division_id">
                <option value="">حدد المدينة لهذه المنطقة</option>
                @foreach ($divisions as $division)
                  <option value="{{ $division->id }}">{{ $division->name }}</option>
                @endforeach
              </select>
            </div>

            <button type="submit" class="btn btn-primary">اضافة منطقة</button>
          </form>
        </div>
      </div>

    </div>
  </div>
  <!-- main-panel ends -->
@endsection
