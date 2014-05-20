<?php
/* 
* @Author: vince_000
* @Date:   2014-05-20 00:19:46
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 00:43:25
*/

/**
 * Router class
 *
 * @package default
 * @author raine_v 
 * @param $url (URL à parser)
 * @return tab[param]
 *
 * */
class Router
{
	static function parse($url, $request)
	{
		$url = trim($url, '/');
		$params = explode('/', $url);
		$request->controller = $params[0];
		$request->action = isset($params[1]) ? $params[1] : 'index';
		$request->params = array_slice($params, 2);
		return true;
	}

} 

// END class 

?>
