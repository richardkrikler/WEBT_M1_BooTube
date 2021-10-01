<?php
namespace WEBT_M1_BooTube\Template;

class Template
{
    static function render(string $main): string
    {
        $template_head = <<<TEMPLATE_HEAD
  <html>
  <head>
    <title></title
  </head>
TEMPLATE_HEAD;

        $template_footer = <<<TEMPLATE_FOOTER
  </body>
  </html>
TEMPLATE_FOOTER;

        return $template_head . $main . $template_footer;
    }

}