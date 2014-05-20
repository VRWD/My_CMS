<?php
/* 
* @Author: raine_v
* @Date:   2014-05-19 23:25:52
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 01:27:30
*/

/**
 * undocumented class
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
		call_user_func_array(array($controller, $this->request->action), $this->request->params);
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
