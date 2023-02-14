@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    اضافة صنف جديد
                </div>
                <div class="card-body">
                    <form action="{{ route('message.store') }}" method="post" >
                        @csrf

                        @include('backend.partials.messages')
                        <input type="hidden" name="admin_id" value="{{ $admin_id = Auth::guard('admin')->user()->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">عنوان الرسالة</label>
                            <input type="text" class="form-control" name="message_subject" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="عنوان الرسالة ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1"> تفاصيل الرسالة</label>
                            <textarea name="content" rows="8" cols="80" class="form-control" placeholder="تفاصيل الرسالة"></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->
@endsection
