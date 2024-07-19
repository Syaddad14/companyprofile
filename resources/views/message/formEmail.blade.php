@extends('layouts.template')
@section('title','Dashboard')
@section('sub-judul','Send Message')
@section('content')

<div class="container">
    <form action="{{ route('send.reply') }}" method="POST" class="form">
        @csrf
        <div class="form-group">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <p class="form-control" readonly>{{ Auth::user()->name }}</p>
            <p class="form-control" readonly>{{ Auth::user()->email }}</p>
            <p class="form-control" readonly>{{ Auth::user()->emailbody }}</p>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="email_body" placeholder="Reply Here"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@endsection
