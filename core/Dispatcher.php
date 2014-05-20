<?php
/* 
* @Author: raine_v
* @Date:   2014-05-19 23:25:52
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-21 00:13:37
*/

/**
 * Dispatcher class
 *
 * @package dispatcher
 * @author raine_v
 **/
class Dispatcher
{
	var $request;

	function __construct()
	{
		$this->request = new Request();
		Router::parse($this->request->url, $this->request);
		$controller = $this->load_controller();
		if(!in_array($this->request->action, get_class_methods($controller)))
		{
			$this->errors('Le CONTROLLER ne trouve pas de page nommée : '.$this->request->action);
		}
		call_user_func_array(array($controller, $this->request->action), $this->request->params);
		$controller->render($this->request->action);
	}

	function errors($message)
	{
		header("HTTP/1.0 404 Not Found");
		$controller = new Controller($this->request);
		$controller->set('message', $message);
		$controller->render('/errors/404');
		die();
	}

	function load_controller()
	{
		$name = ucfirst($this->request->controller).'Controller';
		$file = ROOT.DS.'controller'.DS.$name.'.php';
		require $file;
		return new $name($this->request);
	}
} // END class 

?>
