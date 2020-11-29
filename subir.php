<div class="container">
  <form class="form" method="post" enctype="multipart/form-data" action="subir_backend.php">
    <div class="file-upload-wrapper" data-text="Select your file!">
      <input name="fichero_usuario" type="file" class="file-upload-field" value="">
    </div>
    
    <button type="submit">Enviar</button>
  </form>
</div>
<script type="text/javascript" src="js/iconselect.js"></script>
<script type="text/javascript" src="js/iscroll.js"></script>
<div id="my-icon-select"></div>
<script>
  $("form").on("change", ".file-upload-field", function(){ 
    $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});


var iconSelect;

window.onload = function(){

    iconSelect = new IconSelect("my-icon-select");

    var icons = [];
    icons.push({'iconFilePath':'images/icons/1.png', 'iconValue':'1'});
    icons.push({'iconFilePath':'images/icons/2.png', 'iconValue':'2'});
    icons.push({'iconFilePath':'images/icons/3.png', 'iconValue':'3'});
    
    iconSelect.refresh(icons);

};

</script>