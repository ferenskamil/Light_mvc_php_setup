<?php

namespace MvcPurePhp\Framework\Http;

class Kernel
{
    public function handle(Request $request) : Response
    {
        $content = '<h1>Some other content :-) </h1>';

        return new Response(content: $content);
    }
}
