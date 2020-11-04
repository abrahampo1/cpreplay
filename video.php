<?php
$video = $_GET['v'];
?>

<style>
        .fondo
    {
        background-color: rgba(20, 41, 46, 0.842);
        background-image: url('https://lol-stats.net/uploads/X0geMjIXBEZOVO5U7CvrqJW3shfN1NaI57cmgyxZ.jpeg');
    }
    .titulo
    {
        font-size: 40px;
        color: #F6B352;
        text-shadow: black 2px 2px;
    }
    .center {
  margin: auto;
  width: 45%;
  padding: 10px;
  text-align: center;
}
</style>
<head>
    <title>CPVideo</title>
</head>
<html>

<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/js/plyr.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <body class="fondo">
    <div class='center'>
    <h1 class="titulo">CPReplay</h1>
    </div>

<div>
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

</div>

    </body>
</html>
<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js"></script>
    <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
    <script>
      const player = new Plyr("#player");
    </script>