@extends('layouts.app')
@section('editCat')
<body class="bg-dark">
<h1 class="text-center text-light">Edit category</h1>

<form class="form" method="POST" action="/categories/{{$category->id}}">
@csrf
@method('PUT')

<label class="text-light" for="name">Name</label>
<input class="form-control" type="text" name="name" id="name" value="{{$category->name}}" />
@error('type')
<p>{{$message}}</p>
@enderror

    <div class="text-center p-3">
        <button type="submit" class="btn btn-primary mb-2 ">Submit changes</button>
    </div>
</form>
</body>
@endsection
