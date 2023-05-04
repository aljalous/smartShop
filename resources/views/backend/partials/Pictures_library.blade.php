@extends('backend.layouts.master')

@section('content')
<div class="container-fluid">
    <h2 class="text-right">مكتبة الصور</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">صور المتجر</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="{{ asset('image/categories/1682953884.jpg') }}" class="card-img-top" alt="...">
                                <img src="/images/categories/{{  $Category->image}}" alt="image" />

                                <div class="card-body">
                                    <h5 class="card-title">اسم الصورة</h5>
                                    <p class="card-text">تصنيف الصورة</p>
                                    <a href="#" class="btn btn-primary">تعديل</a>
                                    <a href="#" class="btn btn-danger">حذف</a>
                                </div>
                            </div>
                        </div>
                    
                    
                    
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
