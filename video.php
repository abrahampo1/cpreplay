
<?php
include("./conectar.php");
$video_id = $_GET["v"];
$sql = "SELECT * FROM videos WHERE video = '$video_id'";
if($videos = mysqli_query($link, $sql))
{
	$video = mysqli_fetch_assoc($videos);
	$titulo = $video["titulo"];
	$descripcion = $video["descripcion"];
	$champion = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/".$video["campeon"].".png";
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
<title><?php echo $titulo;?></title>
<link href="css/video.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"> 
  <header class="header">
	  <a href="https://replay.cpsoftware.es">
	  <img src="images/cpreplay logo.png" width="210" height="90">
	  </a>
	
  </header>
  <div class="gallery center">
	  <video class="thumbnail" src="video/<?php echo $video_id ?>.mp4" autoplay controls></video>
	  <br>
  </div>
 <div style="display: flex;
  align-items: center;
	margin-left: 1%;
	margin-right: 1%;">
	<img style="vertical-align; border-radius: 100%" src="<?php echo $champion ?>" width="80px" height="80px">
	  <span style="font-size: 50px;  margin-left: 20px;"><?php echo $titulo ?></span>
	  
 </div>
    <div style="
	background-color:darkgrey;
	border-radius: 5px;
	margin: 20px">
	  <h3 style="margin: 20px;"><?php echo $descripcion ?></h3>
	</div>
	
  <div class="copyright">&copy;2019 - <strong>CPSOFTWARE</strong></div>
</div>
</body>
</html>
