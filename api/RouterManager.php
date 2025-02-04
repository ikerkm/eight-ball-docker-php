<?php
namespace App;

class RouterManager
{
   
    public function dispatch(string $requestMethod, string $requestUri, \FastRoute\Dispatcher $dispatcher )
    {
            $route = $dispatcher->dispatch($requestMethod, $requestUri);

        
            switch($route[0]){
                case \FastRoute\Dispatcher::NOT_FOUND:
                   header("HTTP/1.0 404 Not Found");
                   echo "<h1>NOT FOUND </h1>";
                break;
                case \FastRoute\Dispatcher::FOUND:
                header('Access-Control-Allow-Origin: *');
                header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
                header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
                header("Allow: GET, POST, OPTIONS, PUT, DELETE");
         
                   $controller = $route[1];
                   $method = $route[2];
              
                   if (is_callable($controller)){
                    $this->displayData=$controller($method);
                }
                break;
                case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                   header("HTTP/1.0 405 Method not Allowed");
                   echo "<h1> METHOD NO ALLOWED </h1>";
                break;
            }
    }
}