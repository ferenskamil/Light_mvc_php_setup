<?php declare(strict_types=1);
/** STEPS
 *  1. request received
 *  2. perform some logic
 *  3. send response (string of content) (or JSON content) */

require_once dirname(__DIR__) . '/vendor/autoload.php';

use MvcPurePhp\Framework\Http\Request;
use MvcPurePhp\Framework\Http\Response;

/** Request received */
 $request = Request::createFromGlobals();


/** Content */
 $content = '<h1>This is temporary page</h1>';

/** Response - simply version*/
 $response = new Response(content: $content, status: 200, headers: []);
 $response->send();