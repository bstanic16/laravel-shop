@extends('layouts.app')
@section('categoryShow')
<body class="bg-dark">
<h1 class="text-center text-light">{{$name}}</h1>
    <ul style="display: flex;list-style-type:none">
        <div class="container">
            <div class="d-flex row p-3 col-lg-11 m-auto">
                @foreach($products as $product)
                    <div class="card mb-3" style="width: 18rem; margin-left:10px; margin-right:10px">
                        <img src="{{$product->image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Category: {{$product->category->name}}</li>
                        </ul>
                        <div class="card-body">
                            <button class="btn btn-primary mx-auto"><a href="/products/{{$product->id}}">Details...</a></button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


    </ul>
</body>
    @endsection
