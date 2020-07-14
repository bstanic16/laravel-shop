@extends('layouts.app')
@section('orders')
<body class=" bg-dark">
@foreach($orders as $order)
    <div class="justify-content-center border border-primary p-3">
        <h1 class="text-center text-light">Placanje: {{$order->payment->method}}</h1>
        <h1 class="text-center text-light">USER: {{$order->user->name}}</h1>
        <h1 class="text-center text-light">Dostava: {{$order->shipping->name}}</h1>
        <h1 class="text-center text-light">Total: {{$order->total}}$</h1>
    </div>
    @endforeach
</body>
    @endsection

