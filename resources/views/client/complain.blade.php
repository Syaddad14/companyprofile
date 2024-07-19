@extends('layouts.template')
@section('title', 'Submit a Complaint')
@section('sub-judul', 'Submit a Complaint')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <h1>Submit a Complaint</h1>
            <form action="{{ route('client.complain.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h2>Complaints List</h2>
            <ul class="list-group">
                @foreach($complaints as $complaint)
                    <li class="list-group-item">
                        <h5>{{ $complaint->name }}</h5>
                        <p>{{ $complaint->message }}</p>
                        <small>{{ $complaint->email }}</small>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

@endsection
