@extends('layouts.template')
@section('title','Products & Services')
@section('sub-judul','Create Description')
@section('content')

<div class="container">
    <form action="{{ route('produk-layanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
