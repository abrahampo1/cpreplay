<?php
$data = $_POST['mytext'];
$file = "snapshots/file".time().".png";
$uri = substr($data,strpos($data, ",") + 1);
file_put_contents($file, base64_decode($uri));
?>