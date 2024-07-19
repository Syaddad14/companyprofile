@extends('layouts.template')
@section('title','Dashboard')
@section('sub-judul','Dashboard')
@section('content')

      <div class="row">
     
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
          
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Clients</h4>
                {{$clients->count()}}
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
          
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-cogs"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Service</h4>
                {{$services->count()}}
              </div>
              <div class="card-body">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="card card-statistic-2">
<!--           
            <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Products</h4>
              </div>
              <div class="card-body">
              </div>
            </div> -->
          </div>
        </div>
      </div>          
    </div>
   

@endsection
