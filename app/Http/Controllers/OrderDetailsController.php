<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderDetailsRequest;
use App\Http\Requests\CreateOrderRequest;
use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    public function index()
    {
        return OrderDetail::all();
    }

    public function show(OrderDetail $orderDetail)
    {
        $order = Order::where('id','=',$orderDetail->order_id)->first();
        return view('orderDetail.show',['detail' => $orderDetail,'order' => $order]);
    }

    public function create(Product $product)
    {
        return view('orderDetails.create',['product' => $product]);
    }

    public function store(CreateOrderDetailsRequest $request)
    {
        OrderDetail::create($request->only(['order_id','product_id','product_name','price','quantity']));
        return view('/orders/create');
    }
}
