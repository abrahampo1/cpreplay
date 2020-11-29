<!DOCTYPE html>
<html>
<head>
  <title>Responsive Bootstrap-select with images </title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<?php
$jsonraw = file_get_contents("https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-summary.json");
$datoslol = json_decode($jsonraw , true);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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
				<div class="col-md-4">
					<select class="js-example-basic-single" id="id_label_single" onchange="ponerimagen()">
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
</div>
</div>

<script>
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
function ponerimagen()
{
  var seleccion = document.getElementById("id_label_single");
  var imagen = document.getElementById("imagen");
  imagen.src = "https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/"+seleccion.value+".png";
}

</script>

</body>
</html>
