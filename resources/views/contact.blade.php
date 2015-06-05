@extends('app')

@section('content')

    <h2 class="text-center page-header">Contact Us</h2>

    <p class="lead">Fill out and submit this short contact form, and we'll get back to you quickly!</p>

    <form class="form-horizontal" action="/contact/submit" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Your Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Your Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>

        <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Your Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Send Message!</button>
            </div>
        </div>
    </form>

@endsection