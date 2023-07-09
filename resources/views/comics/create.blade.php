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
            <form action="{{route("comics.store")}}" method="post" class="needs-validation">
                @csrf
            
                {{-- title --}}
                <label for="name">Title</label>
                <input class="form-control @error("title") is-invalid @enderror " type="text" name="title" value="@error("description") {{old("title")}} @enderror">
                @error("title")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror


                {{-- description --}}
                <label for="name">Description</label>
                <input class="form-control @error("description") is-invalid @enderror" type="text" name="description" value="@error("description") {{old("description")}} @enderror">
                @error("description")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror


                {{-- thumb --}}
                <label for="name">Thumb</label>
                <input class="form-control " type="text" name="thumb">

                
                {{-- price --}}
                <label for="name">Price</label>
                <input class="form-control @error("price") is-invalid @enderror " type="text" name="price" value="@error("description") {{old("price")}} @enderror">
                @error("price")
                    {{-- <div class="invalid-feedback">{{$message}}</div> --}}
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror


                {{-- sale_date --}}
                <label for="name">Sale date</label>
                <input class="form-control @error("sale_date") is-invalid @enderror " type="text" name="sale_date" value="@error("description") {{old("sale_date")}} @enderror">
                @error("sale_date")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror


                {{-- serie --}}
                <label for="name">Series</label>
                <input class="form-control @error("series") is-invalid @enderror mb-4" type="text" name="series" value="@error("description") {{old("series")}} @enderror">
                @error("series")
                    <div class="invalid-feedback mb-4">{{$message}}</div>
                @enderror

                <input class="btn btn-primary form-control " type="submit" value="invia">

            </form>

        </div>

    </div>

</div>
@endsection