@extends('layouts.app')
@section('category')
<body class="bg-dark">
<div class="container">
    <h1 class="text-center p-5 text-light">Categories</h1>
</div>
    <div class="container-fluid">
            <ul class="list-group list-group-horizontal justify-content-center">
                @foreach($data as $item)
                    {{--                //u id je 1 i ima ime kategorije--}}
                    <li class="list-group-item nav-item bg-dark">
                        <button class="btn btn-outline-primary"><a class="nav-link text-warning" href="/categories/{{$item->id}}">{{$item->name}}</a></button>
                    </li>
                @endforeach
            </ul>

    </div>
<div class="container p-4 bg-dark">
    <div class="container">
        <h1 class="text-center p-2 text-light">You might also like </h1>
    </div>

    <ul class="list-group list-group-horizontal justify-content-center">
        <div class="container">
            <div class="d-flex row p-3 col-lg-11 m-auto">
                @foreach($products as $product)
                    <div class="card mb-3" style="width: 18rem; margin-left:10px; margin-right:10px ">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Category: {{$product->category->name}}</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-primary mx-auto"><a class="text-warning" href="/products/{{$product->id}}">Details...</a></button>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </ul>
</div>
<div class="text-center">
    <button class="btn btn-warning"><a href="/newsletter" class="text-center">Subscribe for sale info</a></button>
</div>
</body>
@endsection

