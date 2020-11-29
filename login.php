<?php
if(isset($_POST["user"]))
{
$nombre = $_POST["user"];
$pass = $_POST["pass"];
include("conectar.php");
$sql = "SELECT * FROM usuarios WHERE user = '$nombre'";
$do = mysqli_query($link, $sql);
$result = mysqli_fetch_assoc($do);
if(password_verify($pass, $result["pass"]))
{
  $_SESSION['user_id'] = $result['id'];
  header("location: https://replay.cpsoftware.es");
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
    <p class="sign" align="center">Log in</p>
    <form class="form1" method="POST">
      <input class="un " required name="user" type="text" align="center" placeholder="Usuario">
      <input class="pass" required type="password" name="pass" align="center" placeholder="Contraseña">
      <button class="submit" align="center">Log in</button>
      <p class="forgot" align="center"><a href="#">Contraseña olvidada?</p>
      <p class="create" align="center"><a href="registrar.php">Crear cuenta</p>      
                
    </div>
     
</body>

</html>