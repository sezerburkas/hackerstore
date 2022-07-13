@extends('layouts.master')

@section('title', 'Home Page')


@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="https://picsum.photos/1296/600" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/1296/600" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="https://picsum.photos/1296/600" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row justify-content-around section">
        <h1>Featured Items</h1>
    </div>
    <div class="row justify-content-around card-container">
        <div class="card big-card text-white bg-transparent">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://picsum.photos/400" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-end w-100 align-self-end">
                        <span class="price-text">0.0023 <i class="fa-solid fa-bitcoin-sign"></i></span>
                        <button class="btn btn-success"> Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="card big-card text-white bg-transparent">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="https://picsum.photos/400" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-end w-100">
                        <span class="price-text">0.0023 <i class="fa-solid fa-bitcoin-sign"></i></span>
                        <button class="btn btn-success">Add to cart</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-around section">
            <h1>Best Seller</h1>
        </div>
        <div class="row justify-content-center card-container">
        @for ($i = 0; $i < 10; $i++)
            <div class="card regular-card text-white bg-transparent">
                <div class="card-img">
                    <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="d-flex justify-content-end w-100">
                        <span class="price-text">0.0023 <i class="fa-solid fa-bitcoin-sign"></i></span>
                        <button class="btn btn-success">Add to cart</button>
                    </div>
                </div>
            </div>
        @endfor
        </div>
    </div>  
@endsection