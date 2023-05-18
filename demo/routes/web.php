<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Forend\HomeController;
use App\Http\Controllers\Forend\ShopController;

//  Route::get('/', function (){
//     return \App\Models\Product::find(1)->ProductImage
//  });
Route::get('/',[HomeController::class,'index']);
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::prefix('shop')->group(function()
{
    Route::get('',[ShopController::class,'index2']);
});
Route::get('/shop/Product/{id}',[ShopController::class,'show']);
Route::get('cart', [ShopController::class,'cart']);