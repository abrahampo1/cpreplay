<?php
include("./conectar.php");
$sql = "SELECT * FROM videos";
if($videos = mysqli_query($link, $sql))
{
echo "gg wp";
}
else{
  //hacer cosas de error
  echo "tu puta madre con las confianzas";
}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Light Theme</title>
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"> 
  <header class="header">
    <img src="images/cpreplay logo.png" width="210" height="90">
	
  </header>
  <div class="gallery">
    <?php
    
    while($video = mysqli_fetch_assoc($videos))
    {
      echo'<div class="thumbnail"> <a href="#"><img src="images/bkg_06.jpg" alt="" width="2000" class="cards"/></a>
      <h4>TITLE</h4>
      <p class="tag">HTML, CSS, JS, WordPress</p>
      <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>';
    }
    
    ?>
  </div>
  <div class="copyright">&copy;2019 - <strong>CPSOFTWARE</strong></div>
</div>
</body>
</html>
