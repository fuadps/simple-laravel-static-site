@extends('layouts.app')

@section('title','Contact Us')

@section('content')
    <div class="row">
        <div class="col-sm-6 offset-md-3">
            <h1>Contact Us</h1>
            <form action="#" method="post">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control">

                <label for="email" class="mt-3">Email</label>
                <input type="email" name="email" class="form-control">

                <label for="message" class="mt-3">Message</label>
                <textarea name="message" cols="30" rows="10" class="form-control"></textarea>

                <button type="submit"class="btn btn-success form-control my-3">Send a message</button>
            </form>
        </div>
    </div>
@endsection