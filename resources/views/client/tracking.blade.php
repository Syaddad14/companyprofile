@extends('layouts.template')
@section('title', 'Client Tracking')
@section('sub-judul', 'Client Tracking')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 mt-2">
            <h1>Tracking for Client: {{$client->name_clients}}</h1>
            <ul class="timeline">
                <li class="timeline-item">
                    <h3>Complain</h3>
                    <p>{{ $client->complain_description }}</p>
                    <span>{{ $client->complain_date }}</span>
                </li>
                <li class="timeline-item" style="margin-top: 80px;">
                    <h3>Process</h3>
                    <p>{{ $client->process_description }}</p>
                    <span>{{ $client->process_date }}</span>
                </li>
                <li class="timeline-item" style="margin-top: 80px;">
                    <h3>Finish</h3>
                    <p>{{ $client->finish_description }}</p>
                    <span>{{ $client->finish_date }}</span>
                </li>
            </ul>
            <a href="{{ route('client.complain.form') }}">Click here to submit a complaint</a>
            <a href="{{ route('client.complain.tracking') }}">Track Complaints</a>
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

