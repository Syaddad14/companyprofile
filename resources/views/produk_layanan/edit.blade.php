@extends('layouts.template')
@section('title','Products & Services')
@section('sub-judul','Edit Description')
@section('content')

<div class="container">
    <form action="{{ route('produk-layanan.update', $produkLayanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $produkLayanan->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $produkLayanan->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
