<?php declare(strict_types=1);
use MvcPurePhp\Framework\Http\Kernel;
use MvcPurePhp\Framework\Http\Request;
use MvcPurePhp\Framework\Http\Response;

/** STEPS
 *  1. request received
 *  2. perform some logic
 *  3. send response (string of content) (or JSON content) */

require_once dirname(__DIR__) . '/vendor/autoload.php';

define('BASE_PATH', dirname(__DIR__));

/** Request received */
 $request = Request::createFromGlobals();


/** Content */
 $content = '<h1>This is temporary page</h1>';

/** Response*/
 $kernel = new Kernel();

 $response = $kernel->handle($request);
 $response->send(); 