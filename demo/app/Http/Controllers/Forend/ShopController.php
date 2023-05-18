<?php

namespace App\Http\Controllers\Forend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id){
        $products = Product::findOrFail($id);
        return view('fordend.shop.show', compact('products'));
    }
    public function index2(Request $request){
        $products = Product::paginate(4);
        return view('fordend.shop.index2' , compact('products'))->with('i' ,(request()->input('page' , 1)-1)*4);

    }
}

   
