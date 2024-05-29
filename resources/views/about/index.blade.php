@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="bg-dark-2">
    <div class="container">
        <div class="row p-4">
            <h1 class="text-center mb-4"><span>About</span></h1>
            <div class="card d-flex justify-content-center align-items-center mb-3 shadow">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores earum possimus animi provident atque iusto reiciendis impedit quos veritatis minima, cupiditate vero amet aperiam tenetur labore iure quod nostrum! Laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex earum delectus eos libero dignissimos obcaecati tempore consequatur, cumque facilis accusamus veritatis, optio nemo ipsum dolore distinctio. Nihil necessitatibus obcaecati assumenda?</p>
                            <a href="#" class="btn btn-primary">Check My Curriculum Vitae</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center col-md-4">
                        <img src="{{asset('./img/about.jpeg')}}" class="img-square rounded" style="height: 50vh; width: 50vh; object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection