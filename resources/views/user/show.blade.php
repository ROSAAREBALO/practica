@extends('layout')

@section('title',"Usuarios {$id}")

@section('content')
  <h3> USUARIO # {{$id}}</h3>

  Mostrar detalles del usuario : {{$id}}
  
@endsection
