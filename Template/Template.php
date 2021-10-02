<?php

namespace WEBT_M1_BooTube\Template;

class Template
{
    static function render(string $main): string
    {
        $template_head = <<<TEMPLATE_HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BooTube</title>
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<main>
<div id="page-title">
    <h1>BooTube</h1>
    <h2>The scary video portal.</h2>
</div>
TEMPLATE_HEAD;

        $template_footer = <<<TEMPLATE_FOOTER
</main>
</body>
</html>
TEMPLATE_FOOTER;

        return $template_head . $main . $template_footer;
    }

}