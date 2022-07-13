@extends('layouts.blank')

@section('title', 'Cart')

@section('content')
    <div class="cart-container-main">
        <div class="cart-header"><h6>Cart (1 Item)</h6></div>
        <div class="cart-card">
            <div class="cart-item-image">
                <img src="https://picsum.photos/200" class="d-block w-100" alt="...">
            </div>
            <div class="col cart-item-body">
                <span class="cart-item-header">Spoon</span>
                <span class="cart-item-quantity">Quantity:1</span>
                <span class="cart-item-price">0.0023 <i class="fa-solid fa-bitcoin-sign"></i></span>
            </div>
            <button class="btn-delete"><i class="fa-solid fa-trash-can"></i></button>
        </div>
        <div class="cart-button"><a href="/cart" class="btn btn-custom w-100">Go to Cart</a></div>
    </div>
@endsection