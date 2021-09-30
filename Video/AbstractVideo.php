<?php


abstract class AbstractVideo implements VideoInterface
{
    private $name;
    private $source;

    public function __construct(string $name, string $source)
    {
        $this->name = $name;
        $this->source = $source;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    abstract function getHTMLOutput(): string;
}