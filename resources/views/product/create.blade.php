@extends('layouts.app')
@section('createProd')
<body>
<h1 class="text-center">Create new Product!</h1>

    <form class="form" method="POST" action="/products">
        @csrf
        <label for="type">Name</label>
        <input class="form-control" type="text" name="name" id="name" />
        @error('name')
            <p>{{$message}}</p>
        @enderror

        <label for="description">Description</label>
        <input class="form-control" type="text" name="description" id="description" />
        @error('description')
            <p>{{$message}}</p>
        @enderror

        <label for="company_id">Company</label>
        <select class="form-control" name="company_id"  id="company_id">
            @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>

        <label for="category_id">Category</label>
        <select class="form-control" name="category_id"  id="category_id">
            @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>


        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" id="price" />
        @error('price')
            <p>{{$message}}</p>
        @enderror

        <div class="text-center p-3">
            <button type="submit" class="btn btn-primary mb-2 ">Create product</button>
        </div>
    </form>
</body>
@endsection
