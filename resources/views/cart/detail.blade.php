@extends('layouts.app')
@section('card')
<body class="bg-dark">
<div class="container">
    <h1 class="text-center p-3 text-light">Cart</h1>
</div>
<ul class="list-group list-group-horizontal justify-content-center ">
    @foreach($products as $product)

    {{--                //u id je 1 i ima ime kategorije--}}
            <div class="card" style="width: 18rem; margin-left:10px; margin-right:10px;">
                <img src="{{$product->product->image}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->product->name}}</h5>
                    <p class="card-text">{{$product->product->description}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Company: {{$product->product->company->name}}</li>
                    <li class="list-group-item">Category: {{$product->product->category->name}}</li>
                </ul>
                <div class="card-body text-center">
                    <button class="btn btn-primary mx-auto">
                        <a href="/cart/{{$product->product->id}}/remove" class=" text-light card-link justify-content-center">Remove from cart</a>
                    </button>

                </div>
            </div>
    @endforeach

</ul>

<div class="container p-3 bg-dark text-center ">
    <button class="btn btn-primary mx-auto">
        <a href="/orders/new/products" class="text-light card-link justify-content-center">Shop now</a>
    </button>
    <button class="btn btn-danger mx-auto"><a class="text-light" href="/cart/{{$user}}/delete">Clear cart</a></button>
</div>
    </body>
    @endsection


