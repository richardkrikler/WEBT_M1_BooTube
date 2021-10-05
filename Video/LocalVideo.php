<?php

namespace WEBT_M1_BooTube\Video;

require_once 'AbstractVideo.php';

class LocalVideo extends AbstractVideo
{
    /**
     * @param string $name Name of the video
     * @param string $source Source URL of the video
     */
    public function __construct(string $name, string $source)
    {
        parent::__construct($name, $source);
    }

    function getHTMLOutput(): string
    {
        return <<<VIDEOCODE
    <iframe
        src="{$this->getSource()}?modestbranding=1"
        title="YouTube: {$this->getName()}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
VIDEOCODE;
    }
}