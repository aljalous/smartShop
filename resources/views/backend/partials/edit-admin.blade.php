@extends('backend.layouts.master')
@section('content')
    <div class="row justify-content-center ">
        <div class="col-md-10">
            <form method="POST" action="{{ route('admin.update') }}" enctype="multipart/form-data" class="border p-3 rounded">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control rounded-0" id="name" name="name"
                        value="{{ $admin->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control rounded-0" id="email" name="email"
                        value="{{ $admin->email }}" required>
                </div>
                <div class="form-group">
                    <label for="password">New Password :</label>
                    <input type="password" class="form-control rounded-0" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password :</label>
                    <input type="password" class="form-control rounded-0" id="password_confirmation"
                        name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label for="image">Photo:</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*">
                            <label class="custom-file-label rounded-0" for="photo">Choose photo</label>
                        </div>
                    </div>
                    <?php
                    $photo = $admin->photo;
                    global $photo;
                    ?>
                    <div class="image-preview mt-2">
                        <img src="{{ asset('admins/' . $admin->photo) }}" alt="Admin photo"
                            style="width: 150px; height: 150px; border-radius: 50%;">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary rounded-0">Update</button>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger mt-3">
                        {{ session('error') }}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection
