@extends('layouts.app')

@section('content')
<div class="container-fluid my_bg-black p-5">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-wrap justify-content-center">
                @foreach ($comics as $comic)
                <a href="{{ route("comics.show", $comic->id) }}">
                    <div class="card mb-2">
                        <img class="mb-3" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <p class="text-light text-center">
                            {{ $comic->title }}
                        </p>
                    </div>
                </a>
                @endforeach
                {{-- @foreach ($comics as $comic)
                <div class="card mb-2">
                    <img class="mb-3" src="{{ $comic['thumb'] }}" alt="comic.series">
                    <p class="text-light text-center">
                        {{ $comic['title'] }}
                    </p>
                </div>
                @endforeach --}}
            </div>
        </div>
    </div>
    
</div>
@endsection