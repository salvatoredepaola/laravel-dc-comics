@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col">

            <h1>{{$comic->title}}</h1>
            <p>Description: {{$comic->description}}</p>
            <p>Series: {{$comic->series}}</p>
            <p>Price: {{$comic->price}}</p>
            <p>Sale date: {{$comic->sale_date}}</p>

            <a class="btn btn-warning" href="{{route("comics.edit", $comic->id)}}">Modifica</a>

            <form action="{{ route("comics.destroy", $comic)}}" method="post">
                @csrf
                @method("DELETE")
                <input class="btn btn-danger" type="submit" value="Elimina fumetto">
            </form>

        </div>
        <div class="col d-flex justify-content-center ">
            @if ($comic->thumb)
                <img class="preview " src="{{$comic->thumb}}" alt="{{$comic->title}}">
            @else
                <img class="preview " src="https://static.dc.com/2022-06/dc_logo16x9.png" alt="{{$comic->title}}">
            @endif

        </div>
    </div>

</div>
@endsection