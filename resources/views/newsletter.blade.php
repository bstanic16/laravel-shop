@extends('layouts.app')
@section('newsletter')
<body class=" bg-dark">
<div class="container">
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    @if (\Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('failure') }}</p>
        </div><br />
    @endif
    <h2 class="text-center text-warning">Subscribe for more info</h2><br/>
        <form method="post" action="{{url('newsletter')}}">
    @csrf
</div>
<div class="justify-content-center">
    <div class="form-group">
        <label class="text-light" for="Email">Email:</label>
        <input type="text" class="form-control" name="email">
    </div>
</div>
<div class="container">
    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</body>
@endsection
