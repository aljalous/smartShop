@extends('backend.layouts.master')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="card">
                <div class="card-header">
                    ادارة الرسائل
                </div>
                <a href="{{ route('message.create') }}" class="btn btn-primary mb-3">إضافة رسالة جديدة</a>
                <div class="card-body">
                    @include('backend.partials.messages')
                    <table class="table table-hover table-striped">
                        <tr>
                            <th>#</th>
                            <th>اسم المرسل</th>
                            <th>عنوان الرسالة</th>
                            <th>موضوع الرسالة</th>
                        </tr>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->id }}</td>
                                <td>{{ $message->admin->name }}</td>
                                <td>{{ $message->message_subject }}</td>
                                <td>{{ substr($message->content, 0, 150) }}....</td>

                                <td>
                                    <a href="{{ route('viewmessage', $message->id) }}" class="btn btn-success">عرض</a>

                                    <a href="#deleteModal{{ $message->id }}" data-toggle="modal"
                                        class="btn btn-danger">حذف</a>

                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal{{ $message->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">هل أنت متأكد من الحذف؟
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{!! route('message.delete', $message->id) !!}" method="post">
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger">حذف نهائي</button>
                                                    </form>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">الغاء</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- main-panel ends -->
@endsection
