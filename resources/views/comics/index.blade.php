@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
            </div>
        </div>
        <div>
            @foreach ($comics as $comic)
                <p><a href="{{ route("comics.show", $comic->id)}}">{{$comic->title}}</a></p>
            @endforeach
        </div>
    </div>

</div>
@endsection