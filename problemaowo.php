<?php
require 'vendor/autoload.php';

$ffmpeg = FFMpeg\FFMpeg::create(array(
    'ffmpeg.binaries'  => '/snap/bin/ffmpeg',
    'ffprobe.binaries' => '/snap/bin/ffmpeg.ffprobe',
    'timeout'          => 3600, // The timeout for the underlying process
    'ffmpeg.threads'   => 6,   // The number of threads that FFMpeg should use
), $logger);
$video = $ffmpeg->open('video/test.mp4');
$video
    ->filters()
    ->resize(new FFMpeg\Coordinate\Dimension(320, 240))
    ->synchronize();
$video
    ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
    ->save('frame.jpg');
$video
    ->save(new FFMpeg\Format\Video\X264(), 'export-x264.mp4')
    ->save(new FFMpeg\Format\Video\WMV(), 'export-wmv.wmv')
    ->save(new FFMpeg\Format\Video\WebM(), 'export-webm.webm');




    $frame = $video->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(42));
    $frame->save('miniatura.jpg');


    ?>