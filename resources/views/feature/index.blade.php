@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Features')
@section('content')
        <style>
        .image-box{
				width:400px;
                height:210px;
				min-height:75px;
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
  <form action={{route('feature.update',$features->id)}} method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
      <div class="col-12">
        <label>Hero </label>
        <input class="form-control-file" name="image" type="file" onchange="loadFile(event)">
        <div class="image-box">
          <img id="output" src={{url('gambar/'.$features->image)}} width="35%">
          </div>
      </div> 
      <button class="ml-3 btn btn-primary">EDIT</button>
    </form>
</div>



@endsection
@section('addon')
<script>
    //show url 
    
    //show image 
    var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
 </script>



@endsection