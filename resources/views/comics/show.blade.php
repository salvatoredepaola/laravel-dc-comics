@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page: {{$comics->title}}</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <img src="{{$comics->thumb}}" alt="{{$comics->title}}">
                <p>{{$comics->description}}</p>
                <p>{{$comics->price}}</p>
                <p>{{$comics->sale_date}}</p>
                <p>{{$comics->writers}}</p>
            </div>
        </div>
    </div>

</div>
@endsection