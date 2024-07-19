@extends('layouts.template')
@section('title','Message')
@section('sub-judul','Message')
@section('content')

<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>Nama</th>
                <th>Email</th>
                <th>Nomer Hp</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($send_message as $index => $row)
            <tr>
                <td class="text-center">{{$row->nama}}</td>
                <td class="text-center">{{$row->email}}</td>
                <td class="text-center">{{$row->no_hp}}</td>
                <td class="text-center">{{$row->pesan}}</td>
                <td>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $row->email }}&su= Arenzha" class="btn btn-primary btn-sm" target="_blank">Reply</a>
                    <form action="{{ route('message.destroy', ['message' => $row->id]) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
