<?php
include("./conectar.php");
$sql = "SELECT * FROM videos";
if($videos = mysqli_query($link, $sql))
{
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Light Theme</title>
<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"> 
  <header class="header">
    <img src="images/cpreplay logo.png" width="210" height="90">
	
  </header>
  <div class="" style="background-color: #6e6e6e; height: 55px">
	<?php
	  if(isset($_SESSION["user_id"]))
	  {
		  echo'<form action="login.php">
	<button type="submit" class="btn"><i class="fa fa-user"></i> Log In</button>
	</form>';
	  }
	  
	  ?>
	
	</div>
  <div class="gallery">
    <?php
    
    while($video = mysqli_fetch_assoc($videos))
    {
      echo'<div class="thumbnail"> <a href="https://replay.cpsoftware.es/video.php?v='.$video["video"].'"><video src="https://replay.cpsoftware.es/video/'.$video["video"].'.mp4" alt="" height="400" width="2000" class="cards"></video></a>
      <h4>'.$video["titulo"].'</h4>
      <p class="tag">'.$video["autor"].'</p>
      <p class="text_column">'.$video["descripcion"].'</p>
    </div>';
    }
    
    ?>
  </div>
  <div class="copyright">&copy;2019 - <strong>CPSOFTWARE</strong></div>
</div>
</body>
</html>
