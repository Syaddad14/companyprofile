@extends('layouts.template')
@section('title', $clientComplaints->first() ? $clientComplaints->first()->name_clients : 'Client Tracking')
@section('sub-judul', 'Client Tracking')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 mt-2">
            @if($clientComplaints->isNotEmpty())
                <!-- <h1>Tracking for Clients:</h1> -->
                <ul>
                    @foreach($clientComplaints as $complaint)
                        <li>
                            <h1 style="font-size: 2em;">{{$complaint->name_clients}}</span><br>
                            <h1 style="font-size: 2em;"></h1> <span style="font-size: 1.5em;">{{$complaint->complaint}}</span>
                        </br>
                        </li>
                    @endforeach
                </ul>
                <ul class="timeline">
                    <li class="timeline-item">
                        <h3>Complain</h3>
                        <p>Komplain telah diteruskan kepada tim IT</p>
                    </li>
                    <li class="timeline-item" style="margin-top: 80px;">
                        <h3>Process</h3>
                        <p>Sedang dalam perbaikan</p>
                    </li>
                    <li class="timeline-item" style="margin-top: 80px;">
                        <h3>Finish</h3>
                        <p>Perbaikan telah di selesaikan oleh tim IT</p>
                    </li>
                </ul>
                <ul>
                    @foreach($clientComplaints as $complaint)
                        <form action="{{ route('complaint.destroy', $complaint->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary btn-sm">Komplain Selesai</button>
                        
                    @endforeach
                </ul>
            @else
                <h1 style="font-size: 2em;">Tidak ada komplain</h1>
                <h1 style="font-size: 2em;"></h1> <span style="font-size: 1.5em;"></span>
            @endif
        </div>
    </div>
</div>

<style>
    .timeline {
        list-style: none;
        padding: 0;
        position: relative;
    }
    .timeline:before {
        content: '';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }
    .timeline-item {
        margin: 20px 0;
        padding-left: 50px;
        position: relative;
    }
    .timeline-item:before {
        content: '';
        background: white;
        border: 3px solid #22c0e8;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }
    .timeline-item h3 {
        margin: 0;
        font-size: 1.2em;
    }
    .timeline-item p {
        margin: 5px 0 0;
    }
    .timeline-item span {
        font-size: 0.9em;
        color: #999;
    }
</style>

@endsection
