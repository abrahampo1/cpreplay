<?php
include("conectar.php");
$usuario = "";
$usuario_lol="";
$clave="";
if(isset($_POST["usuario_lol"]))
{
    $usuario_lol = $_POST["usuario_lol"];
}

if(isset($_POST["password"]) && isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    $clave = $_POST["password"];
    $clave_secreta = password_hash($clave, PASSWORD_DEFAULT);
    $sql = "SELECT * FROM usuarios WHERE user = '$usuario'";
    $do = mysqli_query($link, $sql);
    $i = false;
    while($result = mysqli_fetch_assoc($do)){
        $i = true;
    }
    if($i == false)
    {
        $sql = "INSERT INTO `usuarios` (`id`, `user`, `pass`, `lol_user`, `main`, `seguidores`, `descripcion`) VALUES (NULL, '$usuario', '$clave_secreta', '$usuario_lol', '1', '0', 'descripcion')";
        $do = mysqli_query($link, $sql);
        header("location: https://replay.cpsoftware.es/login.php");
    }
}

?>
<html>

<head>
  <link rel="stylesheet" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <title>Log In - CPReplay</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Registro</p>
    <form class="form1" method="post">
      <input class="un " required name="usuario" type="text" align="center" placeholder="Usuario">
      <input class="un " name="usuario_lol" type="text" align="center" placeholder="Usuario de League of Legends">
      <input class="pass" required name="password"  type="password" align="center" placeholder="Contraseña">
      <button type="submit" class="submit" align="center">Registrarse</button>    
                
    </div>
     
</body>

</html>