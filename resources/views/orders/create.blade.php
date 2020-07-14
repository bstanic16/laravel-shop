@extends('layouts.app')
@section('createOrder')
<body>
<h1 class="text-center">Create new Order!</h1>

<form class="form" method="POST" action="/orders">
    @csrf
    @foreach($products as $product)
        <label hidden for="order_id">order</label>
        <input class="form-control" hidden type="text" name="order_id" id="order_id" value="{{$id}}" />
        @error('order_id')
        <p>{{$message}}</p>
        @enderror

        <label hidden for="product_id">product_id</label>
        <input hidden type="text" name="product_id" id="product_id" value={{$product->id}} />
        @error('product_id')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="product_name">Product name</label>
            <input class="form-control" type="text" name="product_name" id="product_name" value={{$product->name}} />
            @error('product_name')
            <p>{{$message}}</p>
            @enderror
        </div>

        <label hidden for="shoppingTime">User</label>
        <input hidden type="number" name="shoppingTime" id="shoppingTime" value="{{$user->shoppingTime + 1}}" />
        @error('user_id')
        <p>{{$message}}</p>
        @enderror


        <label hidden for="user_id">User</label>
        <input hidden type="number" name="user_id" id="user_id" value="{{$user->id}}" />
        @error('user_id')
        <p>{{$message}}</p>
        @enderror
        <div class="form-group">
            <label for="payment_id">Payment</label>
            <select class="form-control" name="payment_id"  id="payment_id">
                @foreach($payments as $payment)
                    <option value="{{$payment->id}}">{{$payment->method}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="shipping_id">Shipping</label>
            <select class="form-control" name="shipping_id"  id="shipping_id">
                @foreach($shippings as $shipping)
                    <option value="{{$shipping->id}}">{{$shipping->name}}</option>
                @endforeach
            </select>
        </div>



        <label for="price">Price</label>
        <input class="form-control" type="number" name="price" id="price" value="{{$product->price}}" />
        @error('price')
        <p>{{$message}}</p>
        @enderror

        <label for="quantity">quantity</label>
        <input class="form-control" type="number" name="quantity" id="quantity" />
        @error('quantity')
        <p>{{$message}}</p>
        @enderror

        <label for="total">Total</label>
        <input class="form-control" type="number" name="total" id="total"  />
        @error('total')
        <p>{{$message}}</p>
        @enderror
        @endforeach

    <div class="text-center p-3">
        <button type="submit" class="btn btn-primary mb-2 ">Create order</button>
    </div>
</form>

</body>
@endsection
