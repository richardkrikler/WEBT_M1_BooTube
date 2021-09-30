<?php


abstract class AbstractVideo implements VideoInterface
{
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract function getHTMLOutput();

}