<?php
$usuario = $_GET["u"];
session_start();
include("./conectar.php");
$sql = "SELECT * FROM videos WHERE autor = '$usuario'";
if($videos = mysqli_query($link, $sql))
{
} 
else{
  //hacer cosas de error

}
$sql = "SELECT * FROM usuarios WHERE id = '$usuario'";
if($do = mysqli_query($link, $sql))
{
 $user_data = mysqli_fetch_assoc($do);
} 
else{
  //hacer cosas de error

}

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $user_data["user"]?></title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Header -->
  <header class="header">
    <a href="https://replay.cpsoftware.es">
    <img src="https://i.imgur.com/t2iQvlc.png" width="210" height="90">
    </a>
  </header>
  <!-- Hero Section -->
  <div class="intro" style="width: 100%;">
    <div class="column">
      
      <?php
      if($_SESSION["user_id"]==$usuario){
        echo '<form method="post"><h2>Main</h2><select>';
        $jsonraw = file_get_contents("https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-summary.json");
        $datoslol = json_decode($jsonraw , true);
        foreach($datoslol as $key => $champ)
        {
          echo '<option value="'.$champ["id"].'" >'.$champ["name"].'</option>';
        }
        echo'</select>
        <button type="submit">Guardar</button></form>';
      }
      
      ?>
      
      <h3><?php echo $user_data["user"]; ?></h3>
      <img src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/1.png" width="200" height="200">
    </div>
    <div class="column">
      <p><?php echo $user_data["descripcion"]; ?></p>
    </div>
</div>
  <!-- Stats Gallery Section -->
  <div class="gallery">
    <?php
    
    while($video = mysqli_fetch_assoc($videos))
    {
      $id = $video["autor"];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$do = mysqli_query($link, $sql);
$user = mysqli_fetch_assoc($do);
      echo'<div class="thumbnail"> <a href="https://replay.cpsoftware.es/video.php?v='.$video["video"].'"><video src="https://replay.cpsoftware.es/video/'.$video["video"].'.mp4" alt="" height="400" width="2000" class="cards"></video></a>
      <h4>'.$video["titulo"].'</h4>
      <p class="tag">'.$user["user"].'</p>
    </div>';
    }
    
    ?>
  </div>
</div>
<!-- Main Container Ends -->
</body>
</html>
