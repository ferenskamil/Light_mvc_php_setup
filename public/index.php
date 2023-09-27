<?php declare(strict_types=1);
/** STEPS
 *  1. request received
 *  2. perform some logic
 *  3. send response (string of content) (or JSON content) */

require_once dirname(__DIR__) . '/vendor/autoload.php';

use MvcPurePhp\Framework\Http\Request;

/** Request received */
 $request = Request::createFromGlobals();

 dd($request);



