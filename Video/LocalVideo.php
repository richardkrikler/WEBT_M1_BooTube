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
            <video controls width="250">
                <source src="{$this->getSource()}" type="{$this->getMimeContentType()}">
            </video>
VIDEOCODE;
    }

    function getMimeContentType(): string
    {
        return mime_content_type($this->getSource());
    }
}