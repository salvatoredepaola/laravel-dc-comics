<header>

    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col d-flex"><a href="{{ route("comics.index")}}"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a></div>
            <div class="col d-flex">
                @foreach ($links as $link)
                <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container-fluid ">
    <div class="row align-items-center ">
            <div class="col p-0">
                <div class="my_img"></div>
            </div>
        </div>
    </div>

    {{-- <img class="logo" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Laravel Logo">
    <span>Some links: </span>
    @foreach ($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
    @endforeach --}}
</header>