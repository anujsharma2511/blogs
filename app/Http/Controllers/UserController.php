<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class UserController extends Controller
{
    function getUser(){
        return "Anuj Sharma";
    }

    function getUserInfo($name){
        if (View::exists('admin.info')){
            return view('admin.info',['name'=>$name]);
        } else {
            echo "View not found";
        }
        
    }
}