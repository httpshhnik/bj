<?php
namespace BJ\Core;

use BJ\Controller\TaskList;
use BJ\Controller\UserController;

class Router
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$base = "BJ\\Controller\\";
		// $file = getcwd()."/src/Controller/";
		$controller_name = $base."TaskList";
		$action = "index";
		
		$routes = explode("/", $_SERVER["REQUEST_URI"]);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action = $routes[2]; 
		}

		// создаем контроллер
		if(class_exists($controller_name))
			$controller = new $controller_name;
		else{
			try{
				
				switch($controller_name){
					case 'login': (new \BJ\Controller\UserController())->login(); return;
					case 'TaskList': (new \BJ\Controller\TaskList())->index($action); return;
					default: die("custom 404 for ".$controller_name); Route::ErrorPage404();
				}
			}catch(Exception $ex){
				error_log($ex->getMessage());
			}
		}
		
		if(method_exists($controller, $action))
		{
			// вызываем действие контроллера
			$controller->$action();
		}
		else
		{
			$controller->index($action);
		}
	
	}
	
	function ErrorPage404()
	{
        $host = "http://".$_SERVER["HTTP_HOST"]."/";
        header("HTTP/1.1 404 Not Found");
		header("Status: 404 Not Found");
    }
}