@extends('frontend.layouts.master')

@section('content')

<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <hr>
            <p>Please fill out the form below to contact us. We will get back to you as soon as possible.</p>
            <form>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" id="message"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Our Location</h2>
            <hr>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.406068596195!2d34.44794492550848!3d31.51300534750794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f6b18708d27%3A0x1f26dc8d799cd45b!2sGaza%20Sky%20Geeks!5e0!3m2!1sar!2s!4v1683114259599!5m2!1sar!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"> width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection