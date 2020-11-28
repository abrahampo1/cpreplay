<?php
require 'vendor/autoload.php';

$sec = 10;
$movie = 'video/test.mp4';
$thumbnail = 'thumbnail.png';

$ffmpeg = FFMpeg\FFMpeg::create();
$video = $ffmpeg->open($movie);
$frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds($sec));
$frame->save($thumbnail);
echo '<img src="'.$thumbnail.'">';
















