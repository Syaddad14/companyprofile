@extends('layouts.template')
@section('title','Dasboard')
@section('sub-judul','Setting')
@section('content')
<style>
    .image-box {
        width: 200px;
        min-height: 100px;
        border: 2px solid #dddddd;
        margin-top: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #cccccc;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                    aria-controls="v-pills-home" aria-selected="true">Website</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                    aria-controls="v-pills-profile" aria-selected="false">Company Profile</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                    aria-labelledby="v-pills-home-tab">
                    <h3>Website</h3>
                    <form action={{route('setting.update',$settings->id)}} method="post" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="col-12">
                            <label>Logo </label>
                            <input class="form-control-file" name="logo" type="file" onchange="loadFile(event)">
                            <div class="image-box">
                                <img id="output" src={{url('gambar/'.$settings->logo)}} width="100%">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name_web" class="form-control " placeholder="Nama"
                                    value="{{$settings->name_web}}">
                            </div>
                        </div>
                        <button class="ml-3 btn btn-primary">EDIT</button>
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h3>Company Profile</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="name_company" class="form-control " placeholder="Nama"
                                        value="{{$settings->name_company}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Telp</label>
                                    <input type="text" name="telp_company" class="form-control purchase-code"
                                        placeholder="Telp" value="{{$settings->telp_company}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email_company" class="form-control purchase-code"
                                        placeholder="Email" value="{{$settings->email_company}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="address_company" class="form-control purchase-code"
                                        placeholder="Alamat" value="{{$settings->address_company}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Opening Hours</label>
                                    <input type="text" name="openinghours_company" class="form-control purchase-code"
                                        placeholder="Alamat" value="{{$settings->openinghours_company}}">
                                </div>
                            </div>
                            <button class="ml-3 btn btn-primary">EDIT</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
    @section('addon')
    <script>
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function () {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>

    <script>
        CKEDITOR.replace('description');

    </script>




    @endsection
