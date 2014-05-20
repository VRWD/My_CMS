<?php
/* 
* @Author: raine_v
* @Date:   2014-05-20 00:50:44
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 02:06:05
*
* Pages_Controller class
*
* @package default
* @author raine_v
*
*/

class PagesController extends Controller
{
	
	function view($nom)
	{
		$this->set(array('phrase' => 'Salut', 'nom' => 'Vincent')); 	
		$this->render('index');
	}
}

?>
