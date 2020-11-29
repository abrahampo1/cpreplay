<?php
// En versiones de PHP anteriores a la 4.1.0, debería utilizarse $HTTP_POST_FILES en lugar
// de $_FILES.
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$nombre_random = generateRandomString();
include("conectar.php");

$dir_subida = '/opt/lampp/htdocs/cproyects/cpreplay/video/';
$fichero_subido = $dir_subida . $nombre_random . ".mp4";

echo '<pre>';
if (move_uploaded_file($_FILES['file1']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
    $sql = "INSERT INTO `videos` (`id`, `video`, `titulo`, `descripcion`, `campeon`, `autor`, `likes`, `visitas`) VALUES (NULL, '$nombre_random', 'titulo', 'descripcion xd', '12', 'Abrahampo1', '0', '0')";
    if($do = mysqli_query($link, $sql))
    {
        echo 'Base de datos correcta';
    }else
    {
        echo mysqli_error($link);
        echo 'Error en la base de datos <br>';
    }
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

echo 'Más información de depuración:';
print_r($_FILES);

print "</pre>";

?>