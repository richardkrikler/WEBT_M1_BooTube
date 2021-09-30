<?php


interface VideoInterface
{
    public function getName();
    public function getSource(): string;
    public function getHTMLOutput();
}