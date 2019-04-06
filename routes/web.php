<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/esta-url', function(){
      return 'HOLA MUNDO';
});
Route::get('/usuarios/detalles/{id}', function($id){
        return 'Detalles de usuario: ' .$id;
});
 Route::get('/posts/{posts_id}/coment/{coment_id}', function($postsId,$comentId){
         return "este es el comentario $comentId y su post de $postsId " ;
 });
 Route::get('/user', function(){
      return "food";
 });
 Route::post('/user', function(){
      return "bat";
 });
 Route::get('/userser/{id}',function($id){
    return "el id es : $id";
 })->where(['id'=> '[0-9]+' ]);
 Route::get('/users/{name}',function($name){
    return "el nombre es : $name";
 })->where(['name'=>'[A-Z]+']);
 Route::get('/saludo/{name}/{apodo?}',function($name,$apodo=null){
       if($apodo){
	      return "tengo nombre $name y tengo apodo $apodo";
	   }else{
	       return "tengo nombre $name y no tengo apodo";
	   }
 });
Route::get('/detalle/{id}', function($id){
  return "detalle con id $id";
});

