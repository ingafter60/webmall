@extends('layouts.app')

@section('content')

<div class="container text-center">
    
    <h2>Products</h2>
    <!-- <h2>What are you doing?</h2> -->

    <div class="row">
        @foreach ($allProducts as $product)
        <div class="col-3">
            <div class="card ">
                <img class="card-img-top" src="{{ asset('default-product.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <!-- <h4 class="card-title" style="color:pink">Ssssssss .. I am writting to someone that special ...</h4> -->
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <!-- <p class="card-text">Do you?</p> -->
                    <p class="card-text">{{ $product->description }}</p>
                </div>
                <div class="card-body">
                    <!-- <a href="#" class="card-link">Add to <img class="card-img-top" src="{{ asset('heart.png') }}" alt="Card image cap" width="32" height="32" ></a> -->
                    <a href="#" class="card-link">Add to cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection
