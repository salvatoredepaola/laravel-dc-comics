@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{route("comics.update", $comic->id)}}" method="post">
                @csrf

                @method("PUT")

                <label for="name">title</label>
                <input class="form-control mb-4" type="text" name="title" value="{{$comic->title}}">

                <label for="name">description</label>
                <input class="form-control mb-4" type="text" name="description" value="{{$comic->description}}">

                <label for="name">thumb</label>
                <input class="form-control mb-4" type="text" name="thumb" value="{{$comic->thumb}}">

                <label for="name">price</label>
                <input class="form-control mb-4" type="text" name="price" value="{{$comic->price}}">

                <label for="name">sale_date</label>
                <input class="form-control mb-4" type="date" name="sale_date" value="{{$comic->sale_date}}">

                <label for="name">series</label>
                <input class="form-control mb-4" type="text" name="series" value="{{$comic->series}}">


                <input class="form-control mb-4" type="submit" value="invia">

            </form>

        </div>

    </div>

</div>
@endsection