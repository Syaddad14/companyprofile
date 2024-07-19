@extends('layouts.template')
@section('title','Dashboard')
@section('sub-judul','Send Message')
@section('content')

<div class="container">
    <form action="{{ route('send.reply') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{ Auth::user()->email }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="email_body" placeholder="Arenzha"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
