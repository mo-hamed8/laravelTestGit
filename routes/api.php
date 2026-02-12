<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("profile",function(){
    $profile=["name"=>"MOHAMMED","email"=>"mo@gmail.com","address"=>"Taif"];
    return $profile;
});
