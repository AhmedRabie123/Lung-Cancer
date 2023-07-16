@extends('front.layout.app')

@section('main_content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide carouselhome ">
        <div class="carousel-indicators active">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" class="active"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" class="active"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>

            @foreach ($slider as $item)
                <div class="carousel-item active">
                    <img src="{{ asset('uploads/' . $item->photo) }}" class="d-block w-100 img1-carousel" alt="...">
                    <div class="carousel-caption d-none d-md-block">

                        @if ($item->heading != '')
                            <h5>{{ $item->heading }}</h5>
                        @endif


                        @if ($item->text != '')
                            <p>{!! nl2br($item->text) !!}</p>
                        @endif

                        @if ($item->button_url && $item->button_text != '')
                            <div class="button">
                                <a href="{{ $item->button_url }}" target="_blank">{{ $item->button_text }}</a>
                            </div>
                        @endif

                    </div>
                </div>
            @endforeach

            {{-- <div class="carousel-item ">
                <img src="{{ asset('uploads/OIP (2).jfif') }}" class="d-block w-100 img2-carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Join Us My Friend</h5>
                    <p>Staying healthy just got simpler. Create a Patient Online Services account.<a
                            href="test3.html">SignUp</a></p> 

                </div>
            </div>  --}}
            {{-- <div class="carousel-item  ">
                <img src="{{ asset('uploads/OIP.jpg') }}" class="d-block w-100 img3-carousel" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome Our Fighter</h5>
                    <p>Connecting to your care is easy. Log in to Patient Online Services.<a
                            href="login-patient.html">LogIn</a></p>
                </div>
            </div> --}}
        </div>
        <button class="carousel-control-prev btn-prev" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon slid.bs.carousel" aria-hidden="true"></span>
            <span class="visually-hidden myc-visuallyhidden">Previous</span>
        </button>
        <button class="carousel-control-next btn-next" type="button" data-bs-target="#carouselExampleDark"
            data-bs-slide="next">
            <span class="carousel-control-next-icon slid.bs.carousel" aria-hidden="true"></span>
            <span class="visually-hidden myc-visuallyhidden">Next</span>
        </button>
    </div>



    {{-- @section('main_content')
    <div class="slider">
        <div class="slide-carousel owl-carousel">
            @foreach ($slider as $item)
                <div class="item" style="background-image:url({{ asset('uploads/' . $item->photo) }});">
                    <div class="bg"></div>
                    <div class="text">
                        @if ($item->heading != '')
                            <h2>{{ $item->heading }}</h2>
                        @endif

                        @if ($item->text != '')
                            <p>
                                {!! nl2br($item->text) !!}
                            </p>
                        @endif
                        @if ($item->button_url && $item->button_text != '')
                            <div class="button">
                                <a href="{{ $item->button_url }}" target="_blank">{{ $item->button_text }}</a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div> --}}
@endsection
