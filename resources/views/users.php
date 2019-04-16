<html>
<head>
<title>Listado de usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
  <ul>
    <?php foreach($user as $usuario): ?>
   <li><?php echo e($usuario) ?></li>
    <?php endforeach; ?>

  
  
  </ul>

</body>
</html>