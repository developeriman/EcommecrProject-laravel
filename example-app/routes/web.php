<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; 
use App\Http\Controllers\ProductController; 

Route::get('/login', function () {
    return view('login');
});
 
// Route::get('/logout',function(){
//     Session::forget('user');
//     return redirect('/login');
// });
//logout 
Route::view('/register','register');
Route::get('/logout',[ProductController::class,'logout']); 
Route::post('/register',[UserController::class,'register']); 

Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']); 
Route::post('/add_to_cart',[ProductController::class,'AddToCart']);
Route::get('/cartList',[ProductController::class,'cartList']); 
Route::get('/removecart/{id}',[ProductController::class,'removecart']);
Route::get('/orderNow',[ProductController::class,'ordernow']);
Route::post('/orderplace',[ProductController::class,'orderplace']); 
Route::get('/myorders',[ProductController::class,'MyOrders']); 




