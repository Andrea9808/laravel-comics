@extends('layouts.main-layout')
@section('head')
    <title>COMICS DC</title>
@endsection
@section('content')
    <div class="container-fluid gx-0">
        <div class="bg_main">
            <div class="container">
                <label class="text-white" for="CURRENT SERIES">CURRENT SERIES</label>

                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-4 col-md-3 col-lg-2 mb-5">
                            <div class="card img_comic my-5">
                                <img src="{{ $comic['thumb'] }}" alt="comic">
                            </div>
                            <div>
                                <h6>{{ $comic['title']}}</h6>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
