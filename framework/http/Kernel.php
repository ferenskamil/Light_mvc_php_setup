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

            $routes = include BASE_PATH . '/routes/web.php';

            foreach ($routes as $route) {

                $r->addRoute(...$route);
            }
        });

        // Dispatch a URI, to obtain the route info
        $routeInfo = $dispatcher->dispatch(
            httpMethod: $request->getMethod(),
            uri: $request->getPathInfo()
        );

        // [$status, [$controller, $method], $vars] = $routeInfo;  || simpliest notation
        $status = $routeInfo[0];
        $controller = $routeInfo[1][0];
        $method = $routeInfo[1][1];
        $vars = $routeInfo[2];

        // Call the handler, provided by the route info, in order to create a Response
        // $response = (new $controller())->$method($vars);
        $response = call_user_func_array([new $controller(), $method], $vars);
        return $response;
    }
}
