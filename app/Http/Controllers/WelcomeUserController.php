<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($name,$nickname=null){
        if($nickname){
            return "tengo nombre $name y tengo apodo $nickname";
         }else{
             return "tengo nombre $name y no tengo apodo";
         }
    }
}
