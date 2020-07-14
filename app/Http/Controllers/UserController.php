<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

//    //vraca admina fja
//    public function admin()
//    {
//        return User::where('isAdmin', '=', true)->first();
//    }

    public function sale()
    {
        $total = Order::orderBy('created_at', 'desc')->first()->total;

        $sum = $total-($total/100 * 20);
        if (!Auth::user()->shoppingTime % 3 == 0)
        {
            return view('product.sale',['total'=>$total,'sum' => $sum]);
        }
        else {
            echo "niste";
        }
    }
}
