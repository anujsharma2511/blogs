<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $usersArray=['anuj','kapil','naresh'];
    return view('welcome',['users'=>$usersArray]);
});

Route::get('/home', function ($name){
    return view('home');
});

Route::get('about',function(){
    return view('about');
});

Route::view('/contact','contact');
//Route::redirect('/home','/about');

Route::get('get-user',[UserController::class,'getUser']);
Route::get('get-user-info/{name}',[UserController::class,'getUserInfo']);