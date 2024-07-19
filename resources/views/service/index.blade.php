@extends('layouts.template')
@section('title','Service')
@section('sub-judul','Service')
@section('content')

<!-- @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    @endif -->
<div class="container">
<a class="btn " href="{{route('service.create')}}"><i class="fas fa-plus"></i></a>
    <div class="col-12 mt-4">
        <table id="tabel_costumers" class="table datatable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <!-- <th>Description</th> -->
                    <th>Action<th>
                </tr>
            </thead>
            <tbody>
            @foreach($services as $service)
                <tr>
                <td><img src="{{url('gambar/'.$service->image_services)}}" width="50"></td>
                    <td>{{$service->title_services}}</td>
                    <!-- <td>{{$service->desc_services}}</td> -->
                    <td>
                    <a href="/service/{{$service->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <form action={{route('service.destroy',$service)}} method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
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