@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Testimoni')
@section('content')

<div class="container">
<a class="btn " href="{{route('testimoni.create')}}"><i class="fas fa-plus"></i></a>
    <div class="col-12 mt-4">
        <table id="tabel_costumers" class="table datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($testimoni as $index=>$testi)
                <tr>
                <td>{{$index + 1}}</td>
                <td><img src="{{url('gambar/'.$testi->image_testi)}}" width="50"></td>
                    <td>
                    <a href="/testimoni/{{$testi->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                    <form action={{route('testimoni.destroy',$testi)}} method="POST" class="d-inline-block">
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