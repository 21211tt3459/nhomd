<?php

namespace App\Http\Controllers\Forend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\Request;

class HomeController extends Controller
{
      Public function index()
     { 
      $products = Product::latest()->paginate(5);
     
      //$Sanpham = Product::where('featured',true)->where('product_category_id',1)->get();
      return view('fordend.index',compact('products'));
     }

}   



