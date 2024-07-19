@extends('layouts.template')
@section('title','Client')
@section('sub-judul','Client')
@section('content')

<!-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    @endif -->
<div class="container">
<a class="btn " href="{{route('client.create')}}"><i class="fas fa-plus"></i></a>
    <div class="col-12 mt-4">
        <table id="tabel_costumers" class="table datatable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action<th>
                </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                <td><img src="{{url('gambar/'.$client->image_clients)}}" width="50"></td>
                    <td>{{$client->name_clients}}</td>
                    <td>{{$client->desc_clients}}</td>
                    <td>
                    <a href="/client/{{$client->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <form action={{route('client.destroy',$client)}} method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                    <a href="{{ route('tracking.show', $client->name_clients) }}" class="btn btn-info btn-sm">Tracking</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>

    </div>
    
</div>



@endsection
@section('addon')
<script>
    $(document).ready( function () {
    $('#tabel_costumers').DataTable();
} );
</script>



@endsection