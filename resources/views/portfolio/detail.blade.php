@extends('layouts.app')
@section('titel', $viewData['title'])
@section('content')
<div class="bg-dark-2">
    <div class="container">
        <div class="row p-4">
            <h1 class="text-center mb-4"><span>{{$viewData['subtitle']}} - Detail</span></h1>
            <div class="card mb-3 shadow">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset('./storage/' . $viewData['item']->getImage())}}" class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$viewData['item']->getName()}}</h5>
                            <p class="card-text">{{$viewData['item']->getDescription()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection