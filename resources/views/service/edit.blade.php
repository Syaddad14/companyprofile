@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
@section('content')
<style>
                .image-box{
				width:200px;
				min-height:100px;
				border: 2px solid #dddddd;
				margin-top:15px;
				display:flex;
				align-items:center;
				justify-content:center;
				font-weight:bold;   
				color:#cccccc;
			}
        </style>


<div class="container">
    <div class="row">
        <div class="col-12">
        <form action="{{route('service.update',$services->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
            <div class="form-group">
                <label>Logo</label>    
                <input class="form-control" name="image_services" type="file" accept="image/*" onchange="loadFile(event)">
                    <div class="image-box">
                <img id="output" alt="" width="100%" src="{{url('gambar/'.$services->image_services)}}">
                    </div>
                    </div>
                 <div class="form-group">
            <label>Title</label>
            <input class="form-control" name="title_services" type="text" placeholder="Title" value="{{$services->title_services}}">
        </div>
            <div class="form-group">
                <label>Description</label>
                <input class="form-control" name="desc_services" id="" type="text" placeholder="Description" value="{{$services->desc_services}}">
            </div>
                    <button class="ml-3 btn btn-primary">Submit</button>
               </div>
        </div>







@endsection
@section('addon')
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection