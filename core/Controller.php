<?php
/* 
* @Author: raine_v
* @Date:   2014-05-20 00:48:21
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 02:21:17
*
* Controller class
*
* @package default
* @author raine_v
*
*/

class Controller
{
	public $request;
	public $vars = array();

	function __construct($request) 
	{
		$this->request = $request;
	}

	public function render($view)
	{	
		extract($this->vars);
		$view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
		ob_start();
		require($view);
		$content_for_layout = ob_get_clean();
		require ROOT.DS.'view'.DS.'layout'.DS.'default.php';
	}

	public function set($key, $value = null)
	{
		if (is_array($key))
		{
			$this->vars += $key;
		}
		else 
		{
			$this->vars[$key] = $value;
		}
	}
} 

// END class 


?>

