<style>
    .columna
    {
        border-color:#F6B352; 
        border-style: solid;
        background-color: #383A3F;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
        min-width: 240px;
        border-radius: 5px;
    }
    .icono_lol 
    {
        width: 40px;
        height: 40px;
    }
    .margen
    {
        margin-top: 10px;
        margin-bottom: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }
    .texto
    {
        color: #F6B352;
        font-size: 16px;
        margin-bottom: 10px;
        word-wrap: break-word;
    }
    .titulo
    {
        font-size: 40px;
        color: #F6B352;
        text-shadow: black 2px 2px;
        
    }
    .fondo
    {
        background-color: rgba(20, 41, 46, 0.842);
        background-image: url('https://lol-stats.net/uploads/X0geMjIXBEZOVO5U7CvrqJW3shfN1NaI57cmgyxZ.jpeg');
    }
    .center {
  margin: auto;
  width: 45%;
  padding: 10px;
  text-align: center;
}
</style>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>CPReplay</title>
    
    
  </head>
  <body class="fondo">  
  <div class='center'>
    <h1 class="titulo">CPReplay</h1>
    </div>
    <div class='center'>
        <div>
        <input style='border-radius: 10px; width: 100%; border: 3px solid #F6B352;' type="text">
        </div>
    </div> 
      <main class="container-fluid">
        <div class="row" class=".columna center">
        <?php
        include('./conectar.php');
        $sql = 'SELECT * FROM videos ORDER BY id desc';
        $do = mysqli_query($link, $sql);
        while($get = mysqli_fetch_assoc($do))
        {
            echo'<div class="col-sm-2 columna">
            <div class="row" >
                <label class="col margen texto">'.$get['autor'].'</label>
                <img class="icono_lol margen" src="https://raw.communitydragon.org/latest/plugins/rcp-be-lol-game-data/global/default/v1/champion-icons/'.$get['champ'].'.png">
            </div>
            <div class="texto">'.$get['titulo'].'</div>
        </div>'; 
        }   
        ?>        
        </div>
      </main>
  </body>
</html>

<script>
    fitText(document.querySelector("h1"), 0.38);
</script>