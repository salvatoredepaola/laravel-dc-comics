@extends('layouts.app')

@section('content')
<div class="container my-3">
    @if ($errors->any())
    <div class="alert alert-danger mb-0">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{route("comics.update", $comic->id)}}" method="post">
                @csrf

                @method("PUT")

                {{-- title --}}
                <label for="name">Title</label>
                <input class="form-control @error("title") is-invalid @enderror " type="text" name="title" value="{{ old("title") ?? $comic->title}}">
                @error("title")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror
                

                {{-- description --}}
                <label for="name">Description</label>
                <input class="form-control @error("description") is-invalid @enderror " type="text" name="description" value="{{ old("description") ?? $comic->description}}">
                @error("description")
                <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror
                

                {{-- thumb --}}
                <label for="name">Thumb</label>
                <input class="form-control @error("thumb") is-invalid @enderror " type="text" name="thumb" value="{{ old("thumb") ?? $comic->thumb}}">
                

                {{-- price --}}
                <label for="name">Price</label>
                <input class="form-control @error("price") is-invalid @enderror " type="text" name="price" value="{{ old("price") ?? $comic->price}}">
                @error("price")
                <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror
                

                {{-- sale_date --}}
                <label for="name">Sale date</label>
                <input class="form-control @error("sale_date") is-invalid @enderror " type="text" name="sale_date" value="{{ old("sale_date") ?? $comic->sale_date}}">
                @error("sale_date")
                <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror
                

                {{-- serie --}}
                <label for="name">Series</label>
                <input class="form-control @error("series") is-invalid @enderror mb-4" type="text" name="series" value="{{ old("series") ?? $comic->series}}">
                @error("series")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror

                <input class="btn btn-primary form-control " type="submit" value="invia">

            </form>

        </div>

    </div>

</div>
@endsection