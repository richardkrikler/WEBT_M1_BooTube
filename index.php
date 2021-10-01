<?php
namespace WEBT_M1_BooTube;
use WEBT_M1_BooTube\Video\Youtube;
use WEBT_M1_BooTube\Template\Template;

require_once 'Template/Template.php';
require_once 'Video/Youtube.php';



$main = '<ul>';
for ($i = 0; $i < 20; $i++) {
    $main .= '<li>';
    $main .= '<h3>Dark Phoenix Song | This Fire Inside</h3>';
    $main .= '<h4>Source: YouTube</h4>';
    $main .= <<<VIDEOCODE
            <iframe
                width="560" height="315"
                src="https://www.youtube.com/embed/gyciPq_lD9U"
                title="Dark Phoenix Song | This Fire Inside"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
VIDEOCODE;
    $main .= '</li>';
}
$main .= '</ul>';

echo Template::render($main);