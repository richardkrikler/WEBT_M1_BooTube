<?php

namespace WEBT_M1_BooTube;

use WEBT_M1_BooTube\Template\Template;
use WEBT_M1_BooTube\Video\Vimeo;
use WEBT_M1_BooTube\Video\Youtube;
use WEBT_M1_BooTube\Video\LocalVideo;

require_once 'Template/Template.php';
require_once 'Video/Youtube.php';
require_once 'Video/Vimeo.php';
require_once 'Video/LocalVideo.php';

$videos[] = new Youtube('Scary Movie 1 | Trailer', 'https://www.youtube.com/embed/iQTSHKKpv_E');
$videos[] = new Youtube('Top 10 Scariest Videos', 'https://www.youtube.com/embed/BvqfCH9bADI');
$videos[] = new Youtube('GUEST - A Horror Short Film', 'https://www.youtube.com/embed/7-5Upq2hcOA');
$videos[] = new Youtube('Top 15 Scariest Clown Sightings Videos', 'https://www.youtube.com/embed/Il_KGsw2miI');
$videos[] = new Youtube('Scary Compilation Volume 31', 'https://www.youtube.com/embed/ZJ8gnfJJJwY');
$videos[] = new Vimeo('Hearing Tarantino', 'https://player.vimeo.com/video/118431867');
$videos[] = new Vimeo('CONVERGENCE STATION', 'https://player.vimeo.com/video/608932905');
$videos[] = new Vimeo('88:88', 'https://player.vimeo.com/video/31963455');
$videos[] = new Vimeo('Neurosymphony', 'https://player.vimeo.com/video/368065919');
$videos[] = new Vimeo('Spooky Scary', 'https://player.vimeo.com/video/7251379');
$videos[] = new LocalVideo('Scary Tunnel Walk', 'VideoFiles/local_video_1.mp4');
$videos[] = new LocalVideo('Murder Walk', 'VideoFiles/local_video_2.mp4');
$videos[] = new LocalVideo('Scary Witch', 'VideoFiles/local_video_3.mp4');
$videos[] = new LocalVideo('Dark Night', 'VideoFiles/local_video_4.mp4');
$videos[] = new LocalVideo('Killer Clown', 'VideoFiles/local_video_5.mp4');


$main = '<div class="container my-5" id="video-list"><div class="row justify-content-center" id="video-list-row">';
foreach ($videos as $video) {
    $main .= '<div class="video-item col-11 col-sm-5">';
    $main .= '<h3 class="text-center fw-bold">' . $video->getName() . '</h3>';
    $main .= '<div class="ratio ratio-16x9">' . $video->getHTMLOutput() . '</div>';
    $main .= '<a href="' . $video->getSource() . '" target="_blank" class="d-block text-decoration-none text-break">' . $video->getSource() . '</a>';
    $main .= '</div>';
}
$main .= '</div></div>';

echo Template::render($main);