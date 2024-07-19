@extends('layouts.template')
@section('title','Products & Services')
@section('sub-judul','Products & Services')
@section('content')

<div class="container">
    <a href="{{ route('produk-layanan.create') }}" class="btn btn-primary">Add Description</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produkLayanans as $produkLayanan)
                <tr>
                    <td>{{ $produkLayanan->name }}</td>
                    <td>{{ $produkLayanan->description }}</td>
                    <td>
                        <a href="{{ route('produk-layanan.edit', $produkLayanan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk-layanan.destroy', $produkLayanan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
