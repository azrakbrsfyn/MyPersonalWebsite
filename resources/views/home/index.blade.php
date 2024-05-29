@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container-full-bg">
    <div class="mask">
        <div class="d-flex justify-content-center align-items-center my-4">
            <img src="{{asset('/img/home.jpeg')}}" alt="gambar" class="rounded-circle">
        </div>
        <div class="d-flex justify-content-center align-items-center heading-text">
            <h1 class="text-center"><span>Azriel Akbar Sofyan</span></h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <p class="text-center">Graphic Designer, Long Live Learner, and Creative People </p>
        </div>
    </div>
</div>
<div class="bg-dark introduction">
    <div class="container">
        <div class="row d-flex justify-content-between align-items-center p-4">
            <div class="col-md-4 col-sm-12">
                <h1 class="text-center">Change Your Experiences with Eye-Catching <span>Graphic Design </span></h1>
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="">I have experiences in graphic design field with a lot of products that have done. My clients are from different backgrounds from individual to organizations and institutions. I will help your business better with eye-catching graphic design solutions to improve brand quality and maximize profit opportunity. </p>
                <a href="{{route('portfolio.index')}}"><button type="button" class="btn btn-primary">Check my portfolio</button></a>
            </div>
        </div>
    </div>
</div>
<!-- My Service Section -->
<div class="myService bg-dark-2">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center mt-4">
                <h4><span>What Can I Do</span></h4>
            </div>
            <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center mb-4">
                <h1>My Services</h1>
            </div>
            <!-- Card -->
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/instagram-logo.png')}}" class="img-fluid" alt="instagram-logo">
                    <h4 class="card-title">Instagram Feeds</h4>
                    <p class="card-text pt-4">Boost your Instagram insights and branding with the help of beautiful Instagram feed design.</p>
                    <a href="{{route('portfolio.instagram-feeds')}}" class="card-link"><button type="button" class="btn btn-primary">See Examples</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/typography-logo.png')}}" class="img-fluid" alt="typography-logo">
                    <h4 class="card-title">Typography</h4>
                    <p class="card-text pt-4">Make your simple images livelier! I can help you to add some typography into your images.</p>
                    <a href="{{route('portfolio.typography')}}" class="card-link"><button type="button" class="btn btn-primary">See Examples</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/poster-logo.png')}}" class="img-fluid" alt="poster-logo">
                    <h4 class="card-title">Poster Design</h4>
                    <p class="card-text pt-4">Turn your complex information into simple, interesting, and beauty one with the help of digital poster.</p>
                    <a href="{{route('portfolio.poster-design')}}" class="card-link"><button type="button" class="btn btn-primary">See Examples</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/banner-logo.png')}}" class="img-fluid" alt="banner-logo">
                    <h4 class="card-title">Banner & Flyers Design</h4>
                    <p class="card-text pt-4">Support and Organize your events with banner and flyers to engage more people.</p>
                    <a href="{{route('portfolio.banner-flyers-design')}}" class="card-link"><button type="button" class="btn btn-primary">See Examples</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/camera-logo.png')}}" class="img-fluid" alt="photography-logo">
                    <h4 class="card-title">Photography</h4>
                    <p class="card-text pt-4">Turn your moments everlasting with good photography.</p>
                    <a href="{{route('portfolio.photography')}}" class="card-link"><button type="button" class="btn btn-primary">See Examples</button></a>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
    <!-- My Service Section -->

    <!-- My Awards and Certificates Section -->
    <div class="bg-dark myAwards">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center mt-4">
                    <h1>My Awards & Certificates</h1>
                </div>
                <!-- Carousel -->
                <div id="carouselExampleControls" class="carousel slide w-50 my-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('/img/sertifikat-1.png')}}" class="d-block w-100" alt="sertifikat-1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/img/sertifikat-1.png')}}" class="d-block w-100" alt="sertifikat-2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('/img/sertifikat-1.png')}}" class="d-block w-100" alt="sertifikat-3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <!-- Carousel -->
            </div>
        </div>
    </div>
    <!-- My Awards and Certificates Section -->

    <!-- My Tools Section -->
    <div class="myTools bg-dark-3">
        <div class="container p-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center mt-4 mb-5">
                    <h1>My Tools</h1>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/photoshop-logo.png')}}" class="img-fluid" alt="photoshop-logo">
                        <h6 class="pt-2">Adobe Photoshop</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/adobe-illustrator-logo.png')}}" class="img-fluid" alt="illustrator-logo">
                        <h6 class="pt-2">Adobe Illustrator</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/adobe-lightroom-logo.png')}}" class="img-fluid" alt="lightroom-logo">
                        <h6 class="pt-2">Adobe Lightroom</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/figma-logo.png')}}" class="img-fluid" alt="figma-logo">
                        <h6 class="pt-2">Figma</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/canva-logo.png')}}" class="img-fluid" alt="canva-logo">
                        <h6 class="pt-2">Canva</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 mb-5">
                    <div class="tools-list text-center">
                        <img src="{{asset('/img/procreate-logo.png')}}" class="img-fluid" alt="procreate-logo">
                        <h6 class="pt-2">Procreate</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My Tools Section -->

    <!-- My Previous Section -->
    <div class="bg-dark-2">
        <div class="container p-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-sm-12">
                    <h1>Overview <span>My Previous Works</span></h1>
                    <a href="{{route('portfolio.index')}}"><button type="button" class="btn btn-primary mb-4">Check More</button></a>
                </div>
                <div class="col-md-6">
                    <!-- Carousel -->
                    <div id="carouselExampleControls2" class="carousel slide w-60" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                            @foreach ($viewData['previous_works'] as $key => $work)
                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                <img src="{{ asset('/storage/' . $work->getImage()) }}" class="d-block w-100">
                            </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carousel -->
                </div>
            </div>
        </div>
    </div>
    <!-- My Previous Section -->



    @endsection