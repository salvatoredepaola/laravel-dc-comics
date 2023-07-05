@extends('layouts.app')

@section('content')
<div class="container my-3">
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{route("comics.store")}}" method="post">
                @csrf

                <label for="name">title</label>
                <input class="form-control mb-4" type="text" name="title">

                <label for="name">description</label>
                <input class="form-control mb-4" type="text" name="description">

                <label for="name">thumb</label>
                <input class="form-control mb-4" type="text" name="thumb">

                <label for="name">price</label>
                <input class="form-control mb-4" type="text" name="price">

                <label for="name">sale_date</label>
                <input class="form-control mb-4" type="number" name="sale_date">

                <label for="name">series</label>
                <input class="form-control mb-4" type="text" name="series">


                <input class="form-control mb-4" type="submit" value="invia">

            </form>

        </div>

    </div>

</div>
@endsection