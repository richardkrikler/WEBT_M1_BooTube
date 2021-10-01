<?php
namespace WEBT_M1_BooTube\Video;

use VideoInterface;

require_once 'VideoInterface.php';

abstract class AbstractVideo implements VideoInterface
{
    private $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name, string $source)
    {
        $this->name = $name;
    }
}