<?php
namespace WEBT_M1_BooTube\Video;

require_once 'VideoInterface.php';
require_once 'AbstractVideo.php';

class Youtube extends AbstractVideo implements VideoInterface
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
        width="560" height="315"
        src="{$this->getSource()}"
        title="{$this->getName()}"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen>
    </iframe>
VIDEOCODE;
    }

}