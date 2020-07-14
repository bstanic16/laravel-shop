<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $products = Cart::where('user_id', '=',Auth::id())->get();
        return view('cart.detail',['products'=>$products,'user' => Auth::id()]);
    }

    public function show(Cart $cart)
    {
//        vraca sve u karti za usera...ubaci user auth  id
//        dd();
        //vraca prozivod u karti
//        dd($cart->product);
        return view('cart.show',['product' => $cart->product]);
    }
    //Napravi request i za ovo!!!!!
    public function addToCart(Request $request, Product $product)
    {
//        $product = Product::find($product->id);

        Cart::create(['user_id' => Auth::id(),'product_id' => $product->id]);

        return redirect('/cart');
    }

    public function destroy(Cart $cart)
    {
        //umesto broja 1 ide Auth user id!!!!!!! i obrisi
        Cart::where('user_id', '=',Auth::id())->delete();
        return redirect('/cart');
    }

    public function remove($id)
    {
        Cart::where('product_id', '=',$id)->where('user_id', '=',Auth::id())->delete();
        return redirect('/cart');
    }



}
