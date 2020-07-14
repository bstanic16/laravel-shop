@extends('layouts.app')
@section('editProd')
<body class="bg-dark">
<h1 class="text-light text-center">Edit product</h1>

<form class="form" method="POST" action="/products/{{$product->id}}">
    @csrf
    @method('PUT')

    <label class="text-light" for="name">Name</label>
    <input class="form-control" type="text" name="name" id="name" value="{{$product->name}}" />
    @error('type')
    <p>{{$message}}</p>
    @enderror

    <label class="text-light" for="description">Description</label>
    <input class="form-control" type="text" name="description" id="description" value="{{$product->description}}" />
    @error('description')
    <p>{{$message}}</p>
    @enderror

    <label class="text-light" for="company_id">Company</label>
    <select class="form-control" name="company_id"  id="company_id">
        @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>

    <label class="text-light" for="category_id">Category</label>
    <select class="form-control" name="category_id"  id="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
    </select>

    <label class="text-light" for="price">Price</label>
    <input class="form-control" type="number" name="price" id="price" value="{{$product->price}}" />
    @error('price')
        <p>{{$message}}</p>
    @enderror

    <div class="text-center p-3">
        <button type="submit" class="btn btn-primary mb-2 ">Submit changes</button>
    </div>
</form>
</body>
    @endsection
