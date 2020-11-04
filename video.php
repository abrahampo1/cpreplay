
<?php
include("./conectar.php");
$video = $_GET["v"];
$sql = "SELECT * FROM videos WHERE id = '$video'";
$do = mysqli_query($link, $sql);
$info = mysqli_fetch_assoc($do);
/*$titulo = $info["titulo"];
$fecha = $info["fecha"];
$autor = $info["autor"];
$visitas = $info["visitas"];*/
$titulo='test';
$fecha=2020-20-20;
$autor='tester';
$visitas=1;
$visitas++;
$sql = "UPDATE `videos` SET `visitas` = '$visitas' WHERE `videos`.`id` = '$video' ";
if($do = mysqli_query($link, $sql)){}else
{
  mysqli_error($do);
}

?>

<!DOCTYPE html>
<style>
    .titul
    {
        font-size: 40px;
        color: #F6B352;
        text-shadow: black 2px 2px;
        
    }
    .centrar {
  margin: auto;
  width: 45%;
  padding: 10px;
  text-align: center;
}
.fondo
    {
        background-color: rgba(20, 41, 46, 0.842);
        background-image: url('https://lol-stats.net/uploads/X0geMjIXBEZOVO5U7CvrqJW3shfN1NaI57cmgyxZ.jpeg');
    }
    a { text-decoration: none; }
</style>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />

    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/js/plyr.css" />
  </head>
  
  <body id="page-top" class="fondo">
    <div class='centrar'>
    <a class="titul" href="https://replay.cpsoftware.es">CPReplay</a>
    </div>
    <div id="wrapper">
      <div class="d-flex flex-column fondo" id="content-wrapper">
        <div id="content">
          <div class="container-fluid" style="padding: 0px">
            <div
              class="text-center center my-auto copyright"
              style="
                height: auto;
                margin-left: 1px;
                margin-top: 1px;
                margin-right: 1px;
                padding-top: 30px;
              "
            >
            <video
                class="shadow"
                id="player"
                width="720"
                height="480"
                controls=""
                autoplay=""
              >
                <source
                <?php
                echo'src="../CPvideo/videos/'.$video.'.mp4"';
                ?>
                  
                  type="video/webm"
                />
              </video>
              <br><a class="shadow btn btn-success btn-circle ml-1"<?php
                echo'href="../CPvideo/videos/'.$video.'.mp4"';
                ?> role="button" download><i class="fas fa-download text-white"></i></a>

              <div
                class="row"
                style="
                  margin-left: 20px;
                  margin-right: 20px;
                  margin-top: 20px;
                "
              >
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
    <script>
      const player = new Plyr("#player");
    </script>
  </body>
</html>
