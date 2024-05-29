@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="bg-dark-2">
    <div class="container">
        <div class="row d-flex justify-content-center py-4">
            <h1 class="text-center mb-5"><span>Typography - Portfolio</span></h1>
            @foreach ($viewData['typographies'] as $typography)
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card">
                    <img src="{{asset('/storage/'.$typography->getImage())}}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <h5 class="card-text">{{$typography->getName()}}</h5>
                        <a href="{{route('portfolio.typography-detail', ['id'=>$typography->getId()])}}" class="btn btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection