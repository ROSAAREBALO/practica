<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        if(request()->has('empty')){
          $users=[];

        }else{
            $users=[
                'elias',
                 'luis',
                 'lucas',
                 'pedro',
                 '<script>alert("click")</script>'
                  ];
        }
     
  
       /* return view('users')
              ->with('user',$users); */
              return view('users',[
                  'user'=>$users,
                  'title'=>'Listado de usuarios'
              ]);
    }

    public function show($id){
        return "detalle con id $id";
    }

    public function nombre($name){
        return"el nombre es $name";
    }

}
