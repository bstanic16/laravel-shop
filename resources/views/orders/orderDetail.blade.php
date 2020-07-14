@extends('layouts.app')
    @section('orders')
<body class="bg-dark">
<div class="border border-primary">
    <h1 class="text-light text-center">Placanje: {{$order->payment->method}}</h1>
    <h1 class="text-light text-center">USER: {{$order->user->name}}</h1>
    <h1 class="text-light text-center">Proizvod: {{$orderDetail->product_name}}</h1>
    <h1 class="text-light text-center">Cena: {{$orderDetail->price}}</h1>
    <h1 class="text-light text-center">Kolicina: {{$orderDetail->quantity}}</h1>
    <h1 class="text-light text-center">Dostava: {{$order->shipping->name}}</h1>
</div>
</body>
@endsection
