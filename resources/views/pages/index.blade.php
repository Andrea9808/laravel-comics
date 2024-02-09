@extends('layouts.main-layout')
@section('head')
    <title>COMICS DC</title>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="bg_main">
            <div class="container">
                <label class="text-white" for="CURRENT SERIES">CURRENT SERIES</label>

                @foreach ($comics as $comic )
                    <div class="card">
                        <img src="{{($comic["thumb"])}}" alt="comic">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
