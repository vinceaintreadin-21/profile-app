<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

//Route::get('/welcome', function () {
  //  return view('welcome');
//});

//Route::get('/hello', function(){
  //  return "<h1>whats up my dude<h1>";
//});

Route::get('/greet/{fname}', [GreetingController::class, 'greeting' ]);

//Route::get('/greet-with-view', [GreetingController::class, 'greetingwithView' ]);

//Route::get('/user', [UserController::class, 'getAllUsers']);

//Route::get('/post', [PostController::class, 'getAllPosts']);

Route::get('/profile', [ProfileController::class, 'getAllProfiles']);

Route::get('/profile/{id}', [ProfileController::class, 'getOneProfile']);

Route::get('/users', [UserController::class, 'getAllUSers']);

Route::get('/home', [HomeController::class, 'viewHomePage']);


