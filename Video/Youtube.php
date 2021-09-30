<?php


require 'AbstractVideo.php';
require 'VideoInterface.php';

class Youtube extends AbstractVideo implements VideoInterface
{
    private $source;

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @param string $name Name of the video
     * @param string $source Source URL of the video
     */
    public function __construct(string $name, string $source)
    {
        parent::__construct($name);
        $this->source = $source;
    }

    public function getHTMLOutput(): string{
      return <<<VIDEOCODE
    <iframe 
    </iframe>
VIDEOCODE;
}

}