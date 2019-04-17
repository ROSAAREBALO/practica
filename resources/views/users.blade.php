<html>
<head>
<title>Listado de usuarios</title>
</head>
<body>
 <!--  <h1>Usuarios</h1>
  <ul>
    <?php foreach($user as $usuario): ?>
   <li><?php echo e($usuario) ?></li>
    <?php endforeach; ?>
  </ul> -->

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
</body>
</html>