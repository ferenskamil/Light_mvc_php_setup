<?php

namespace MvcPurePhp\Framework\Controller;;
use MvcPurePhp\Framework\Http\Response;

abstract class AbstractController
{
    private const VIEW_BASE_DIR = BASE_PATH . '/src/view/';

    private string $content;

    protected function renderHtml(string $templatePath) : string
    {
        $templatePath = self::VIEW_BASE_DIR . $templatePath;

        $content = file_get_contents($templatePath);

        return $content;
    }
}