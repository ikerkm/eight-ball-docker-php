<?php 
namespace App;

class api {

    public static function getDispatcher()
    {
       return \FastRoute\simpleDispatcher(
           function (\FastRoute\RouteCollector $route){
               $route->addRoute('GET','/',['App\controllers\HomeController',"index"]);
           
           }

       );
    }



}