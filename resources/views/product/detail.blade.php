@extends('layouts.app')
@section('products')
<body class="bg-dark">
<h1 class="text-center text-light p-3">{{$product->name}}</h1>
<div class="d-flex container">
    <div class="card " style="width: 30rem;">
        <div>
            <img src="{{$product->image}}" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="container bg-light d-block">
        <h3 class="ml-5 mt-5 text-center">Description: {{$product->description}}</h3>
        <h3 class="ml-5 text-center">Company: {{$product->company->name}}</h3>
        <h3 class="ml-5 text-center">Category: {{$product->category->name}}</h3>
        <h2 class="ml-5 text-center">Price: {{$product->price}} $</h2>
        <div class="text-center">
            <button class="btn btn-primary mx-auto">
                <a href="/cart/product/{{$product->id}}" class="card-link justify-content-center">Add to cart</a>
            </button>
            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin)
                    <button class="btn btn-primary mx-auto "><a href="/products/{{$product->id}}/delete">Delete Product</a></button>
            @endif
        </div>
    </div>

</div>

</body>
    @endsection

