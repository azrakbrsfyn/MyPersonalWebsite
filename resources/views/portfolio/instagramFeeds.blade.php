@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="bg-dark-2">
    <div class="container">
        <div class="row d-flex justify-content-center py-4">
            <h1 class="text-center mb-5"><span>Instagram Feeds - Portfolio</span></h1>
            @foreach ($viewData['instagramFeeds'] as $feed)
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/storage/'.$feed->getImage())}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h6 class="card-text mb-4">{{$feed->getName()}}</h6>
                        <a href="{{route('portfolio.instagram-feeds-detail', ['id' => $feed->getId()])}}" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/img/Feed-IG-(rev)_01.jpg')}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">Heading</h5>
                        <a href="#" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/img/Feed-IG-(rev)_01.jpg')}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">Heading</h5>
                        <a href="#" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/img/Feed-IG-(rev)_01.jpg')}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">Heading</h5>
                        <a href="#" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/img/Feed-IG-(rev)_01.jpg')}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">Heading</h5>
                        <a href="#" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/img/Feed-IG-(rev)_01.jpg')}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">Heading</h5>
                        <a href="#" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection