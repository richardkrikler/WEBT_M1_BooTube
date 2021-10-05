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

$videos[] = new Youtube('This Fire Inside', 'https://www.youtube.com/embed/gyciPq_lD9U');
$videos[] = new Youtube('Champion', 'https://www.youtube.com/embed/4ePUkps416s');
$videos[] = new Youtube('Radioactive', 'https://www.youtube.com/embed/ktvTqknDobU');
$videos[] = new Youtube('Blaues Licht', 'https://www.youtube.com/embed/0NL8H1IAHVc');
$videos[] = new Youtube('Wenn du mich siehst', 'https://www.youtube.com/embed/mbrsAiSJjj8');
$videos[] = new Vimeo('Hearing Tarantino', 'https://player.vimeo.com/video/118431867');
$videos[] = new Vimeo('CONVERGENCE STATION', 'https://player.vimeo.com/video/608932905');
$videos[] = new Vimeo('88:88', 'https://player.vimeo.com/video/31963455');
$videos[] = new Vimeo('Neurosymphony', 'https://player.vimeo.com/video/368065919');
$videos[] = new Vimeo('Spooky Scary', 'https://player.vimeo.com/video/7251379');
$videos[] = new LocalVideo('Title1', 'VideoFiles/local_video_1.mp4');
$videos[] = new LocalVideo('Title2', 'VideoFiles/local_video_2.mp4');
$videos[] = new LocalVideo('Title3', 'VideoFiles/local_video_3.mp4');
$videos[] = new LocalVideo('Title4', 'VideoFiles/local_video_4.mp4');
$videos[] = new LocalVideo('Title5', 'VideoFiles/local_video_5.mp4');




$main = '<ul>';
foreach ($videos as $video) {
    $main .= '<li>';
    $main .= '<h3>' . $video->getName() . '</h3>';
    $main .= $video->getHTMLOutput();
    $main .= '<a href="' . $video->getSource() . '" target="_blank">' . $video->getSource() . '</a>';
    $main .= '</li>';
}
$main .= '</ul>';

echo Template::render($main);