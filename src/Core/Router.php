<?php
namespace BJ\Core;

use BJ\Controller\TaskBook;

class Router
{
	static function start()
	{
		// контроллер и действие по умолчанию
		$controller_name = 'TaskBook';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// получаем имя контроллера
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// получаем имя экшена
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// создаем контроллер
		try{
			$controller = new $controller_name;
		}catch(Exception $exp){//wtf not catching
			error_log("Controller missing ".$controller);
			Route::ErrorPage404();//разумнее было бы кинуть исключение
		}
		
		if(method_exists($controller, $action_name))
		{
			// вызываем действие контроллера
			$controller->$action_name();
		}
		else
		{
			error_log("Action missing".$action_name);
			// здесь также разумнее было бы кинуть исключение
			Router::ErrorPage404();
		}
	
	}
	
	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
}