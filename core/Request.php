<?php
/* 
* @Author: raine_v
* @Date:   2014-05-19 00:09:52
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 00:18:49
*
* Request class
*
* @package default
* @author raine_v
*
*/

class Request
{
	public $url; //URL appellé par l'utilisateur

	function __construct()
	{
		$this->url = $_SERVER['PATH_INFO'];
	}
} // END class 

?>
