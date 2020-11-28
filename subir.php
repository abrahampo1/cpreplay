<div class="container">
  <form class="form" method="post" enctype="multipart/form-data" action="subir_backend.php">
    <div class="file-upload-wrapper" data-text="Select your file!">
      <input name="fichero_usuario" type="file" class="file-upload-field" value="">
    </div>
    <button type="submit">Enviar</button>
  </form>
</div>

<script>
  $("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});
</script>

<style>
  @import "bourbon";
@import url(https://fonts.googleapis.com/css?family=Lato:400,700,300);

body {
  font-family: 'Lato', sans-serif;
  
}

.container {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  @include align-items(center);
  @include display(flex);
  @include justify-content(center);
  @include linear-gradient(to top right, #bf7a6b 0%, #e6d8a7 100%);
}

.form {
  width: 400px;
}

.file-upload-wrapper {
  $defaultColor: #4daf7c;
  $height: 60px;
  
  position: relative;
  width: 100%;
  height: $height;
  
  &:after {
    content: attr(data-text);
    font-size: 18px;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    padding: 10px 15px;
    display: block;
    width: calc(100% - 40px);
    pointer-events: none;
    z-index: 20;
    height: $height - 20px;
    line-height: $height - 20px;
    color: #999;
    border-radius: 5px 10px 10px 5px;
    font-weight: 300;
  }
  
  &:before {
    content: 'Upload';
    position: absolute;
    top: 0;
    right: 0;
    display: inline-block;
    height: 60px;
    background: $defaultColor;
    color: #fff;
    font-weight: 700;
    z-index: 25;
    font-size: 16px;
    line-height: $height;
    padding: 0 15px;
    text-transform: uppercase;
    pointer-events: none;
    border-radius: 0 5px 5px 0;
  }
  
  &:hover {
    &:before {
      background: darken($defaultColor, 10%);
    }
  }
   input {
    opacity: 0;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 99;
    height: $height - 20px;
    margin: 0;
    padding: 0;
    display: block;
    cursor: pointer;
    width: 100%;
  }
}
</style>