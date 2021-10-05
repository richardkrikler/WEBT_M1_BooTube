<?php

namespace WEBT_M1_BooTube\Video;

require_once 'AbstractVideo.php';

class Vimeo extends AbstractVideo
{
    /**
     * @param string $name Name of the video
     * @param string $source Source URL of the video
     */
    public function __construct(string $name, string $source)
    {
        parent::__construct($name, $source);
    }

    public function getHTMLOutput(): string
    {
        return <<<VIDEOCODE
        <iframe
            src="{$this->getSource()}?title=0&byline=0&portrait=0"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            allowfullscreen></iframe>
VIDEOCODE;
    }


}