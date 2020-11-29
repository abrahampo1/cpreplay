<!DOCTYPE html>
<html>
<head>
  <title>Responsive Bootstrap-select with images </title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link href="css/subir-archivo.css" rel="stylesheet" />
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
    <p>&nbsp;</p>
	  <div class="holder_form form-group">
	   <form method="post" enctype="multipart/form-data" action="subir_backend.php">
		   <label>Vídeo</label>
	 <input type="file" id="file1" required name="file1" class="form-control" style="margin-bottom: 10px" onchange="uploadFile()">
		<label>Titulo</label>
      <input type="text" required class="usuario form-control" placeholder="200 de farm con Soraka top (de 10 años)" align="center">
		   <label>Descripción</label>
      <textarea required class="pass form-control" type="text" align="center" placeholder="Chiquita stompeada que acabo d pegar lmao" style="margin-bottom: 10px" rows="3" ></textarea>
		   <label>Champion</label>
      <select required class="un js-example-basic-single form-control" align="center" id="id_label_single" onchange="ponerimagen()" style="margin-bottom: 10px">
      <?php
      foreach($datoslol as $key => $champ)
      {
        echo '<option value="'.$champ["id"].'" >'.$champ["name"].'</option>';
      }

      ?>
      </select>
		   
<img id="imagen" class="imagen" width="40" height="40" src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/-1.png" style="margin-top: 10px;" alt=""><br><br>

      <button type="submit" class="submit form-control" align="center">Subelo!</button>  
   <progress id="progressBar" class="bar" value="0" max="100" style="width:370px;">
	  </div>
    </div>

</form>
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
function _(el) {
  return document.getElementById(el);
}
$(function() {

    var bar = $('.bar');

    $('form').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
            bar.width(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal);
        },
        complete: function(xhr) {
        }
    });
}); 
</script>

</body>
</html>
