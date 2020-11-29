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
  <div class="main">
    <p class="sign" align="center">Log in</p>
    <form class="form1">
      <input class="un " type="text" align="center" placeholder="Usuario">
      <input class="pass" type="password" align="center" placeholder="Contraseña">
      <select class="un js-example-basic-single" align="center" id="id_label_single" onchange="ponerimagen()" style="margin: 0 auto">
      <?php
      foreach($datoslol as $key => $champ)
      {
        echo '<option value="'.$champ["id"].'" >'.$champ["name"].'</option>';
      }

      ?>
      </select><br><br>

      <button type="submit" class="submit" align="center">Subelo!</button>  
                
    </div>

<img id="imagen" src="" alt="">

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
