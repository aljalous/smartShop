@extends('backend.layouts.master')

@section('content')
  <div class="main-panel">
    <div class="content-wrapper">

      <div class="card">
        <div class="card-header">
          ادارة عارض الصور
        </div>
        <div class="card-body">
            @include('backend.partials.messages')

            <a href="#addSliderModal" data-toggle="modal" class="btn btn-info float-right mb-2">
              <i class="fa fa-plus"></i> اضافة عارض صور جديد
            </a>
            <div class="clearfix"></div>
            
            <!-- Add Modal -->
            <div class="modal fade" id="addSliderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافة عارض صور جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="{!! route('admin.slider.store') !!}"  method="post" enctype="multipart/form-data">

                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="title">عنوان عارض الصور <small class="text-danger">(required)</small></label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title" required>
                      </div>

                      <div class="form-group">
                        <label for="image">صورة عارض الصور <small class="text-danger">(مطلوب)</small></label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Slider Image" required>
                      </div>

                      <div class="form-group">
                        <label for="button_text">نص زر عارض الصور <small class="text-info">(اختياري)</small></label>
                        <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Slider Button Text (if need)">
                      </div>

                      <div class="form-group">
                        <label for="button_link">رابط عارض الصور <small class="text-info">(optional)</small></label>
                        <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Slider Button Text (if need)">
                      </div>

                      <div class="form-group">
                        <label for="priority">اولوية عارض الصور <small class="text-info">(required)</small></label>
                        <input type="number" class="form-control" name="priority" id="priority" placeholder="Slider Priority; e.g: 10" value="10" required>
                      </div>

                      <button type="submit" class="btn btn-success">اضافة عارض صور جديد</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                    </form>

                  </div>
                </div>
              </div>
            </div>


          <table class="table table-hover table-striped">
            <tr>
              <th>#</th>
              <th>عنوان عارض الصور</th>
              <th>صورة عارض الصور</th>
              <th>اولوية عارض الصور</th>
              <th>تعديل - حذف</th>
            </tr>

            @foreach ($sliders as $slider)
              <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $slider->title }}</td>
                <td>
                  <img src="{{ asset('images/sliders/'.$slider->image) }}" width="40">
                </td>
                <td>{{ $slider->priority }}</td>

                <td>
                  <a href="#editModal{{ $slider->id }}" data-toggle="modal" class="btn btn-success">Edit</a>

                  <a href="#deleteModal{{ $slider->id }}" data-toggle="modal" class="btn btn-danger">حذف</a>

                  <!-- Delete Modal -->
                  <div class="modal fade" id="deleteModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">هل أنت متأكد من الحذف؟</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.slider.delete', $slider->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">تاكيد الحذف</button>
                          </form>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <!-- Edit Modal -->
                  <div class="modal fade" id="editModal{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">هل أنت متأكد من التعديل؟</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{!! route('admin.slider.update', $slider->id) !!}"  method="post" enctype="multipart/form-data">

                          {{ csrf_field() }}
                          <div class="form-group">
                            <label for="title">عنوان عارض الصور <small class="text-danger">(مطلوب)</small></label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title" required value="{{ $slider->title }}">
                          </div>

                          <div class="form-group">
                            <label for="image">صورة عارض الصور
                              <a href="{{ asset('images/sliders/'.$slider->image) }}" target="_blank">
                                الصورة السابقة
                              </a>

                              <small class="text-danger">(مطلوب)</small></label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Slider Image">
                          </div>

                          <div class="form-group">
                            <label for="button_text">نص عارض الصور <small class="text-info">(اختياري)</small></label>
                            <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Slider Button Text (if need)"  value="{{ $slider->button_text }}">
                          </div>

                          <div class="form-group">
                            <label for="button_link">رابط عارض الصور <small class="text-info">(اختياري)</small></label>
                            <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Slider Button Text (if need)"  value="{{ $slider->button_link }}">
                          </div>

                          <div class="form-group">
                            <label for="priority">اولوية عارض الصور <small class="text-info">(مطلوب)</small></label>
                            <input type="number" class="form-control" name="priority" id="priority" placeholder="Slider Priority; e.g: 10" required  value="{{ $slider->priority }}">
                          </div>

                          <button type="submit" class="btn btn-success">تعديل</button>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>

                        </form>
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
