<?php

require_once 'VideoInterface.php';

class Youtube extends AbstractVideo
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
    </iframe>
VIDEOCODE;
    }

}