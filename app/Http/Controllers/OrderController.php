<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CreateOrderRequest;
use App\Http\Requests\NewOrderRequest;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Product;
use App\Shipping;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
//        dd(Order::where('user_id','=',Auth::id())->get());
        return view('orders.show',['orders'=>Order::where('user_id','=',Auth::id())->get()]);
    }

    public function show(Order $order)
    {
//       dd(OrderDetail::where('order_id','=',$order->id)->get());

        $orderDetail = OrderDetail::find($order->id);
        return view('orders.orderDetail',['order'=>$order,'orderDetail' => $orderDetail]);
    }

    public function create()
    {
        $payments = Payment::all();
        $shippings = Shipping::all();
        return view('orders.create',['payments' => $payments, 'shippings'=>$shippings]);
    }

    public function store(CreateOrderRequest $request)
    {
        Order::query()->create($request->only(['user_id','shipping_id','payment_id','total']));
        return redirect('/orders');
    }

    public function createOrder()
    {
        $products = Cart::where('user_id','=',Auth::id())->get();
        $prIds = [];
        foreach ($products as $product) {
            $prIds[] = $product->product;
        }
//        dd($prIds);
        $order_id = Order::orderBy('created_at', 'desc')->first()->id;
        $payments = Payment::all();
        $shippings = Shipping::all();
        return view('orders.create',['products' => $prIds,'payments' => $payments, 'shippings'=>$shippings,'id' => $order_id,'user' => Auth::user()]);
    }
    //NAPRAVI REQUEST ZA ORDER
    public function newOrder(NewOrderRequest $request)
    {
        $products = Cart::where('user_id','=',Auth::id())->get();
        $prIds = [];
        foreach ($products as $product) {
            $prIds[] = $product->product;
        }
            $order = Order::create($request->only(['user_id','shipping_id','payment_id','total']));
            OrderDetail::create($request->only(['order_id','product_id','product_name','price','quantity']));
        if(Auth::user()->shoppingTime % 3 == 0){
            return redirect('/users/sale');
        }else {
            return redirect('/orders');
        }

    }

}
