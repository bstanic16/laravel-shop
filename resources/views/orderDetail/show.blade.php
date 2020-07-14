@extends('layouts.app')
@section('orders')
    <body class="bg-dark">
    <div class="justify-content-center border border-primary p-3">
        <h1 class="text-center text-light">Proizvod: {{$detail->product_name}}</h1>
        <h1 class="text-center text-light">Cena: {{$detail->price}}</h1>
        <h1 class="text-center text-light">Kolicina: {{$detail->quantity}}</h1>
        <h1 class="text-center text-light">Total: {{$order->total}}</h1>
        <h1 class="text-center text-light">Shipping: {{$order->shipping->name}}</h1>
        <h1 class="text-center text-light">Payment: {{$order->payment->method}}</h1>
    </div>
    </body>
@endsection

