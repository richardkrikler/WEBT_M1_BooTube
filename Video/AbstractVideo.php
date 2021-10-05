<?php

namespace WEBT_M1_BooTube\Video;

use VideoInterface;

require_once 'VideoInterface.php';

abstract class AbstractVideo implements VideoInterface
{
    private $name;
    private $source;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSource(): string
    {
        return $this->source;
    }

    public function __construct(string $name, string $source)
    {
        $this->name = $name;
        $this->source = $source;
    }
}