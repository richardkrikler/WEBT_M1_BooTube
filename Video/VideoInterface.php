<?php

interface VideoInterface
{
    function getName(): string;

    function getSource(): string;

    function getHTMLOutput(): string;
}