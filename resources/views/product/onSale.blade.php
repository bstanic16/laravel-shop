@extends('layouts.app')
@section('sale')
    <body class="bg-dark">
    <div class="container">
        <h1 class="text-center p-3 text-light">Sale</h1>
    </div>
    <ul class="list-group list-group-horizontal justify-content-center ">
        <div class="container">
            <div class="d-flex row p-3 col-lg-11 m-auto">
                @foreach($products as $product)

                    {{--                //u id je 1 i ima ime kategorije--}}
                    <div class="card mb-3" style="width: 18rem; margin-left:10px; margin-right:10px;">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Company: {{$product->company->name}}</li>
                            <li class="list-group-item">Category: {{$product->category->name}}</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-primary mx-auto">
                                <a href="/cart/{{$product->id}}/addToCart" class="text-light card-link justify-content-center">Add to cart</a>
                            </button>
                            <button class="btn btn-primary ">
                                <a href="/orders/new/{{$product->id}}" class="text-light card-link justify-content-center">Shop now</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </ul>
    </body>
@endsection



