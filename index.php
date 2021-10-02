<?php

namespace WEBT_M1_BooTube;

use WEBT_M1_BooTube\Template\Template;
use WEBT_M1_BooTube\Video\Youtube;

require_once "Template/Template.php";
require_once 'Video/Youtube.php';

$videos[] = new Youtube("This Fire Inside", "https://www.youtube.com/embed/gyciPq_lD9U");
$videos[] = new Youtube("Champion", "https://www.youtube.com/embed/4ePUkps416s");
$videos[] = new Youtube("Radioactive", "https://www.youtube.com/embed/ktvTqknDobU");
$videos[] = new Youtube("Blaues Licht", "https://www.youtube.com/embed/0NL8H1IAHVc");
$videos[] = new Youtube("Wenn du mich siehst", "https://www.youtube.com/embed/mbrsAiSJjj8");

$main = '<div id="page-title">';
$main .= '<h1>BooTube</h1>';
$main .= '<h2>The scary video portal.</h2>';
$main .= '</div>';


$main .= '<ul>';
foreach ($videos as $video) {
    $main .= '<li>';
    $main .= '<h3>' . $video->getName() . '</h3>';
    $main .= $video->getHTMLOutput();
    $main .= '</li>';
}
$main .= '</ul>';

echo Template::render($main);