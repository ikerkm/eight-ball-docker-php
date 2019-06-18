<?php 
namespace App;

class api {

    public static function getDispatcher()
    {
 

       return \FastRoute\simpleDispatcher(
           function (\FastRoute\RouteCollector $route){
               $route->addRoute('GET','/asd',['App\controller',"index"]);
           
           }

       );
    }



}