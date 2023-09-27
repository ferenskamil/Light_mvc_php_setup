<?php

namespace MvcPurePhp\Framework\Http;

use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;

class Kernel
{
    public function handle(Request $request) : Response
    {
        // Create a dispatcher
        $dispatcher = simpleDispatcher(function (RouteCollector $r){
            $r->addRoute('GET', '/', function(){
                $content = "<h1>Jestem w routerze</h1>";

                return new Response($content);
            });

            $r->addRoute('GET', '/user/{id: \d+}', function($routeParams){

                $content = <<<HTML
                    <h1>Podstrona nr 2</h1>
                    <p>Przekazano parametr {$routeParams['id']}</p>
                HTML;;

                return new Response($content);
            });
        });

        // Dispatch a URI, to obtain the route info
        $routeInfo = $dispatcher->dispatch(
            // httpMethod: $request->server['REQUEST_METHOD'],
            httpMethod: $request->getMethod(),
            // uri: $request->server['REQUEST_URI']
            uri: $request->getPathInfo()
        );


        // [$status, $handlers, $vars] = $routeInfo;  || simpliest notation
        $status = $routeInfo[0];
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        // Call the handler, provided by the route info, in order to create a Response

        return $handler($vars);
    }
}
