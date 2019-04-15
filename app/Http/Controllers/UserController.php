<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "usuarios";
    }

    public function show($id){
        return "detalle con id $id";
    }

    public function nombre($name){
        return"el nombre es $name";
    }

}
