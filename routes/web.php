<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\RegisterController;



Route::get('/login',[UserController::class,'create']);
Route::post('/login',[UserController::class,'login']);
Route::get('/logout',[UserController::class,'logout']);

Route::get('/',[ProductController::class,'index']);
Route::get('/products',[ProductController::class,'show']);
Route::get('details/{id}',[ProductController::class,'store']);
Route::post('addcart',[ProductController::class,'addcart']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::get('ordernow',[ProductController::class,'ordernow']);
Route::post('orderaction',[ProductController::class,'orderaction']);
Route::get('myorders',[ProductController::class,'myorders']);

Route::get('/register',[RegisterController::class,'register']);
Route::post('/register',[RegisterController::class,'login']);

