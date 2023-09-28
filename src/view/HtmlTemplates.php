<?php

namespace App\View;

class HtmlTemplates
{
    static public function returnHeadSection(string $title)
    {
        return <<<HTML
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>{$title}</title>
            </head>
        HTML;
    }
}