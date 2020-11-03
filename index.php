<style>
    .columna
    {
        border-color:#F6B352; 
        border-style: solid;
        background-color: #383A3F;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 5px;
        margin-right: 5px;
        min-width: 210px;
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
    }
    .center {
  margin: auto;
  width: 50%;
  border: 3px solid #F6B352;
  padding: 10px;
}
</style>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <title>CPReplay</title>
    <div class="row">
        <h1 class="titulo" style="margin: 20px;">CPReplay</h1>
        <input class="center" type="text">
    </div>
  </head>
  <body class="fondo">   
      <main class="container-fluid">
        <div class="row" class=".columna">
            <div class="col-sm-2 columna">
                <div class="row" >
                    <label class="col margen texto">nick</label>
                    <img class="icono_lol margen" src="https://support-leagueoflegends.riotgames.com/hc/article_attachments/360095343534/Seraphine_Icon_T1.jpg">
                </div>
                <div class="texto">123456789012345678901234567890123456</div>
            </div>
        </div>
      </main>
  </body>
</html>

<script>
    fitText(document.querySelector("h1"), 0.38);
</script>