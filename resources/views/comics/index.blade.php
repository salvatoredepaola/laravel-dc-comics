@extends('layouts.app')

@section('content')
<div class="container-fluid my_bg-black p-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap justify-content-center">
                @foreach ($comics as $comic)
                <a href="{{ route("comics.show", $comic->id) }}">
                    <div class="card mb-2">
                        @if ($comic->thumb)
                            <img class="preview " src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        @else
                            <img class="preview " src="https://static.dc.com/2022-06/dc_logo16x9.png" alt="{{$comic->title}}">
                        @endif
                        <p class="text-light text-center">
                            {{ $comic->title }}
                        </p>
                    </div>
                </a>
                @endforeach
                <a class="btn btn-primary" href="{{route("comics.create")}}">Crea Comic</a>

            </div>
        </div>
    </div>
    
</div>
@endsection