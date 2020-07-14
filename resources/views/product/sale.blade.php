@extends('layouts.app')
@section('saleOn')
<body class="bg-dark">
<div class="container p-5">
    <h1 class="text-light text-center">Regular price was: {{$total}} $</h1>
    <h1 class="text-light text-center">Lower price: {{$sum}} $</h1>
    <h3 class="text-light text-center">Thank you for believe in us!</h3>
    <div class="text-center">
        <button class="btn btn-warning "  ><a href="/categories">Categories</a></button>
        <button class="btn btn-primary"><a href="/cart">Back to your cart</a></button>
    </div>
</div>
</body>
@endsection
