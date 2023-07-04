<footer>
    <div class="container">
        <div class="row">
            @foreach ($misc as $link)
            <div class="col my_p-50">
                <a class="my_m-33 text-light d-flex align-items-center" href="">
                    <img src="{{ Vite::asset($link['imgPath']) }}" alt="">
                    <p> {{ $link['text'] }} </p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container-fluid my_bg ">
        <div class="container">
            <div class="row">
                <div class="col-4 my_p-50">
                    <div class="row">
                        <div class="col ">
                            <h6 class="mb-4 text-light">DC COMICS</h6>

                            <div class="d-flex flex-column">
                                @foreach ($links as $link)
                                <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                                @endforeach
                            </div>
                            
                            <h6 class="text-light">SHOP</h6>

                            <div class="d-flex flex-column">
                                <a href="/">Shop</a>
                                <a href="/">Shop</a>
                            </div>
                            
                        </div>
                        <div class="col">
                            <h6 class="mb-4 text-light">DC</h6>

                            <div class="d-flex flex-column">
                                @foreach ($links as $link)
                                <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="mb-4 text-light">SITES</h6>

                            <div class="d-flex flex-column">
                                @foreach ($links as $link)
                                <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-8 my_bg-dc">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my_bg-black">
        <div class="container py-4 ">
            <div class="row justify-content-between my_h100 align-items-center">
                <div class="col p-0">
                    <button class="my_btn p-2 text-light ">
                    SIGN-UP NOW!
                    </button>
                </div>
                <div class="col d-flex">
                    <div class="col d-flex align-items-center">
                        <a class="my_color-blue fs-6" href="">FOLLOW US</a>
                    </div>
                    @foreach ($social as $icon)
                    <div class="col d-flex justify-content-center align-items-center">
                        <a href="/">
                            <img class="my_img-fluid" src="{{ Vite::asset($icon['iconPath']) }}" alt="">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>