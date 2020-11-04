
<?php
include("../conectar.php");
$video = $_GET["v"];
$sql = "SELECT * FROM videos WHERE id = '$video'";
$do = mysqli_query($link, $sql);
$info = mysqli_fetch_assoc($do);
$titulo = $info["titulo"];
$fecha = $info["fecha"];
$autor = $info["autor"];
$visitas = $info["visitas"];
$visitas++;
$sql = "UPDATE `videos` SET `visitas` = '$visitas' WHERE `videos`.`id` = '$video' ";
if($do = mysqli_query($link, $sql)){}else
{
  mysqli_error($do);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
    />

    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/js/plyr.css" />
  </head>

  <body id="page-top">
    <div id="wrapper">
      <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
          <div class="container-fluid" style="padding: 0px">
            <a href="https://cpsoftware.es/CPvideo"><h1 class="text-dark mb-1">CPReplay</h1></a>
            <h2 class="text-dark mb-1" style="margin-left: 10px"><?php echo $titulo; ?></h2>
            <a href="https://euw.op.gg/summoner/userName=<?php echo $autor; ?>"><h3 class="text-dark mb-1" style="margin-left: 20px"><?php echo $autor; ?></h3></a>
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
                echo'src="../videos/'.$video.'.mp4"';
                ?>
                  
                  type="video/webm"
                />
              </video>
              <br><a class="shadow btn btn-success btn-circle ml-1"<?php
                echo'href="../videos/'.$video.'.mp4"';
                ?> role="button" download><i class="fas fa-download text-white"></i></a>

              <div
                class="row"
                style="
                  margin-left: 20px;
                  margin-right: 20px;
                  margin-top: 20px;
                "
              >
                <div class="col">
                  <div class="card shadow border-left-warning py-2">
                    <div class="card-body">
                      <div class="row align-items-center no-gutters">
                        <div class="col mr-2">
                          <div
                            class="text-uppercase text-warning font-weight-bold text-xs mb-1"
                          >
                            <span>Visitas</span>
                          </div>
                          <div class="text-dark font-weight-bold h5 mb-0">
                            <span><?php echo $visitas ?></span>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-eye fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
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