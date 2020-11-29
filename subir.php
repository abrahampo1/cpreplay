<!DOCTYPE html>
<html>
<head>
  <title>Responsive Bootstrap-select with images </title>

  <meta charset="utf-8">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">

  <style>
		body {
		  padding-top: 70px;
		  
		}

		
	
	.bootstrap-select > .dropdown-toggle {
			color:#fff;
			border-radius: 0px;
			font-size: 2em;
			background: url(dropdown.png) no-repeat right #243746;
			border: 1px solid #192535;	
			z-index:10;
			padding: 25px 5px;
		}

	button.btn.dropdown-toggle.btn-default {
			background-color: #243746;
		}
		
		
	.bootstrap-select.btn-group .filter-option {
			background: url(dropdown.png) no-repeat right #243746;
			color:#fff;
			
		}
		
	.bootstrap-select > .dropdown-menu {
			background-color: #243746;
			color:#fff !important;
			border-radius: 0px;
		}


	.dropdown-menu>li>a {
			background-color: #243746;
			color:#fff;
		}
	.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
			background-color: #243746;
			color:#fff;
			text-decoration: none;
		}


	.btn .dropdown-toggle .btn-default {
		background-color: #243746;
			color:#fff;
			text-decoration: none;
		}

		




.conv-wrap {
	margin: 0px;
	padding: 0px;
	width:100%;
}
.conv-cont {
	padding: 10px;
	float: left;
	width: 100%;
	border: 1px solid #afafaf;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	-moz-box-shadow: 0 0 6px -1px #919191;
	-webkit-box-shadow: 0 0 6px -1px #919191;
	box-shadow: 0 0 6px -1px #919191;
}

.conv-cont .cov-frm {
	float: left;
	width: 100%;
	}

.conv-cont .cov-frm .selectpicker {
	font-size: 18px !important;
	font-weight: bold !important;
	text-decoration: none !important;
	margin: 0px;
	padding: 23px;
	float: left;
	width: 100%;
	outline: none !important;
}



.conv-cont .cov-frm .cov-frm-label {
	font-size: 14px;
	color: #333333;
	text-decoration: none;
	margin: 0px;
	float: left;
	width: 100%;
	padding: 5px;
}
.conv-cont .cov-frm .cov-frm-labeli {
	font-size: 14px;
	color: #a9a9a9;
	text-decoration: none;
	margin: 0px;
	float: left;
	width: 100%;
	padding: 5px;
	background-color: #FFF;
}

.cov-inp-bx div.col-md-8 , .cov-inp-bx div.col-md-4   {
    padding: 0px;
    margin: 0px;
}

.conv-cont .cov-frm .cov-inp-bx {
	padding: 0px;
	float: left;
	width: 100%;
	border: 1px solid #c2c2c2;
	border-radius: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-left: 0px;
}
.conv-cont .cov-frm .cov-frm-input {
	font-size: 24px;
	font-weight: bold;
	color: #009cff;
	text-decoration: none;
	margin: 0px;
	padding: 9px;
	float: left;
	width: 100%;
	border: none;
	outline: none;
}
.conv-cont .cov-frm .cov-frm-sbtm {
	font-size: 20px;
	font-weight: bold;
	color: #FFF;
	text-decoration: none;
	background-color: #243746;
	text-align: center;
	margin: 0px;
	float: left;
	width: 100%;
	padding-top: 13px;
	padding-bottom: 13px;
	border:none;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	cursor:pointer;
}
.conv-cont .cov-frm .cov-frm-sbtm:hover {
	background: #980000;
}
.cov-spni {
	font-size: 13px;
	font-weight: normal;
	color: #424242;
	text-decoration: none;
	line-height:50px;
}
.cov-spnii {
	color: #333;
}


  </style>
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
					<select class="selectpicker">
          <?php
foreach($datoslol as $key => $champ)
{
  echo '<option value="'.$champ["id"].'" style="background-image:url(https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/'.$champ["id"].'.png);
  width:45px;
  height:45px;" >'.$cahmp["name"].'</option>';
}

?>
						
						</select>
				</div>
			</div>

			</form>

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
