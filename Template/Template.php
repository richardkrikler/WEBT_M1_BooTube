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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BooTube</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
</head>
<body>
<main class="container">
<header>
    <h1 class="display-2 text-center fw-bolder">BooTube</h1>
    <h2 class="display-6 text-center fw-bolder">The scary video portal.</h2>
</header>
TEMPLATE_HEAD;

        $template_footer = <<<TEMPLATE_FOOTER
<footer>
    <h4 class="text-center">© Jakob Mucherl, Richard Krikler, Hadi Tlais</h4>
</footer>
</main>
</body>
</html>
TEMPLATE_FOOTER;

        return $template_head . $main . $template_footer;
    }

}