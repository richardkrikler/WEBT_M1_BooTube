<?php
namespace WEBT_M1_BooTube;

use WEBT_M1_BooTube\Video\Youtube;
use WEBT_M1_BooTube\Template\Template;

require_once "Template/Template.php";
require_once 'Video/Youtube.php';

$videos[] = new Youtube("This Fire Inside", "https://www.youtube.com/watch?v=gyciPq_lD9U");
$videos[] = new Youtube("Champion", "https://www.youtube.com/watch?v=4ePUkps416s");
$videos[] = new Youtube("Radioactive", "https://www.youtube.com/watch?v=ktvTqknDobU");
$videos[] = new Youtube("Blaues Licht", "https://www.youtube.com/watch?v=0NL8H1IAHVc");
$videos[] = new Youtube("Wenn du mich siehst", "https://www.youtube.com/watch?v=mbrsAiSJjj8");

$main = '<ul>';
foreach ($videos as $video) {
    $main .= '</li>Title: '.$video->getName().' '.$video->getHTMLOutput().'</li>';
}
$main .= '</ul>';

echo Template::render($main);