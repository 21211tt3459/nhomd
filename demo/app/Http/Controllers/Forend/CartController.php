<?php

namespace App\Http\Controllers\Forend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function Cart(){
       
        return view('fordend.shop.cart');
    }
}
