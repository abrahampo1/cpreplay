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