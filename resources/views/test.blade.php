@extends('layouts.head')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Making cool <span id="changingWord"></span><span id="cursor">|</span> before we're all dead</h1>
                <p>A creative studio built by creators</p>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/game-studio.jpg') }}" alt="Game Studio" class="img-fluid">
            </div>
        </div>
@endsection