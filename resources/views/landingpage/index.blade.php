@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Home')
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
  <form action={{route('landingpage.update',$landing_page->id)}} method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
      <div class="col-12">
        <label>Hero </label>
        <input class="form-control-file" name="hero" type="file" onchange="loadFile(event)">
        <div class="image-box">
          <img id="output" src={{url('gambar/'.$landing_page->hero)}} width="100%">
          </div>
      </div> 
      <div class="col-12 mt-2">
        <div class="form-group">
          <label>Meta Title </label>
          <input class="form-control" name="title" placeholder="Title" value="{{$landing_page->title}}">
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