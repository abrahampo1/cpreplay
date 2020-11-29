<!DOCTYPE html>
<html>
<head>
  <title>Responsive Bootstrap-select with images </title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">
<?php
$jsonraw = file_get_contents("https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-summary.json");
$datoslol = json_decode($jsonraw , true);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="js/bootstrap-select.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-6 testing">






<div class="conv-wrap">
	<div class="conv-cont al-left">
		<form action="#" method="post" name="frm" class="cov-frm">
			<!-- <label class="cov-frm-label">Sending Amount</label> -->
			<div class="cov-inp-bx">
				<div class="col-md-8">
					<label class="cov-frm-labeli">Sending Amount</label>
					<input class="cov-frm-input" type="text" value="100.00">
				</div>
				<div class="col-md-4">
					<select class="selectpicker" id="select" onchange="ponerimagen()">
          <?php
foreach($datoslol as $key => $champ)
{
  echo '<option value="'.$champ["id"].'" style="background-image:url(https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/'.$champ["id"].'.png);
  width:45px;
  height:45px;" >'.$champ["name"].'</option>';
}

?>
						
						</select>
				</div>
			</div>

			</form>
<img id="imagen" src="" alt="">
		</div>
	</div>





</div>

<div class="col-md-6 select-box" >

<p> I tried several jquery based custom select with images, but none worked in responsive layouts. Finally i came accross Bootstrap-Select. After some modifications i was able to produce this code.</p>
<p>thanks </p>


</div>
</div>
</div>

<script>
function ponerimagen()
{
  var seleccion = document.getElementById("select");
  var imagen = document.getElementById("imagen");
  imagen.src = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/"+seleccion.value+".png";
}

</script>

</body>
</html>
