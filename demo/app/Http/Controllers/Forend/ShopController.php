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

        $sortBy = $request->sort_by ?? 'latest';

        $search = $request->seach ?? '';

        $products = Product::where('name' , 'like' , '%' .$search .'%');


        switch($sortBy) {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':  
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price');
                break;
            case 'price-descending' : 
                $products = $products->orderByDesc('price');
            default:
                $products = $products->orderBy('id') ;
                           
        }
        $products = Product::paginate(4);
        return view('fordend.shop.index2' , compact('products'))->with('i' ,(request()->input('page' , 1)-1)*4);

    }
}

   
