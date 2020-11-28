<?php
require('vendor/autoload.php');

$sec = 10;
$movie = 'video/test.mp4';
$thumbnail = 'thumbnail.png';

$screenShotr = new \ScreenShotr\Core($movie);
$screenshot = $screenShotr->generateScreenshot($sec);














