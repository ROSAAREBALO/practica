@extends('layout')
@section('content')
<h1>{{$title}}</h1>

<hr>
 @if(!empty($user))
<ul>
  @foreach($user as $usuario)
      <li> {{$usuario}}</li>
 @endforeach
</ul>
 @else
     <p>no hay registrado ningunn usuario</p>

 @endif    
 
 @endsection

 @section('sidebar') 
 @parent

 <h2>barra lateral personalidado</h2>
 @endsection
