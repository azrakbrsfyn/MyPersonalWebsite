@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<!-- Content -->
<!-- My Service Section -->
<div class="myService bg-dark-2">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-sm-12 d-flex justify-content-center align-items-center my-4">
                <h1><span>Portfolio</span></h1>
            </div>
            <!-- Card -->
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/instagram-logo.png')}}" class="img-fluid" alt="instagram-logo">
                    <h4 class="card-title">Instagram Feeds</h4>
                    <p class="card-text pt-4">Boost your Instagram insights and branding with the help of beautiful Instagram feed design.</p>
                    <a href="{{route('portfolio.instagram-feeds')}}" class="card-link"><button type="button" class="btn btn-primary">See Portfolio</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/typography-logo.png')}}" class="img-fluid" alt="typography-logo">
                    <h4 class="card-title">Typography</h4>
                    <p class="card-text pt-4">Make your simple images livelier! I can help you to add some typography into your images.</p>
                    <a href="{{route('portfolio.typography')}}" class="card-link"><button type="button" class="btn btn-primary">See Portfolio</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/poster-logo.png')}}" class="img-fluid" alt="poster-logo">
                    <h4 class="card-title">Poster Design</h4>
                    <p class="card-text pt-4">Turn your complex information into simple, interesting, and beauty one with the help of digital poster.</p>
                    <a href="{{route('portfolio.poster-design')}}" class="card-link"><button type="button" class="btn btn-primary">See Portfolio</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/banner-logo.png')}}" class="img-fluid" alt="banner-logo">
                    <h4 class="card-title">Banner & Flyers Design</h4>
                    <p class="card-text pt-4">Support and Organize your events with banner and flyers to engage more people.</p>
                    <a href="{{route('portfolio.banner-flyers-design')}}" class="card-link"><button type="button" class="btn btn-primary">See Portfolio</button></a>
                </div>
            </div>
            <div class="card col-md-4 m-4 shadow py-4 " style="width: 18rem;">
                <div class="card-body text-center">
                    <img src="{{asset('/img/camera-logo.png')}}" class="img-fluid" alt="photography-logo">
                    <h4 class="card-title">Photography</h4>
                    <p class="card-text pt-4">Turn your moments everlasting with good photography.</p>
                    <a href="{{route('portfolio.photography')}}" class="card-link"><button type="button" class="btn btn-primary">See Portfolio</button></a>
                </div>
            </div>
            <!-- Card -->
        </div>
    </div>
    <!-- My Service Section -->
    <!-- Content -->


    @endsection