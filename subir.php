<!DOCTYPE html>
<html>
<head>
  <title>Responsive Bootstrap-select with images </title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">

<?php
$jsonraw = file_get_contents("https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-summary.json");
$datoslol = json_decode($jsonraw, true);
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="row">
<div class="col-md-6 testing">






<div class="conv-wrap">
	<div class="conv-cont al-left">
		<form action="#" method="post">
			<!-- <label class="cov-frm-label">Sending Amount</label> -->
			<div class="cov-inp-bx">
				<div class="col-md-8">
					<label class="cov-frm-labeli">Sending Amount</label>
					<input class="cov-frm-input" type="text" value="100.00">
				</div>
				<div class="col-md-4">
					<select>
          <?php

foreach ($datoslol as $key => $champ) {
  echo '<option value="'.$champ["id"].'")" >'.$champ["name"].'</option>';
}

?>
						
						</select>
				</div>
			</div>

			</form>

		</div>
	</div>





</div>
</div>
</div>

<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>

</body>
</html>
