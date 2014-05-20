<?php
/* 
* @Author: raine_v
* @Date:   2014-05-19 23:26:39
* @Last Modified by:   vince_000
* @Last Modified time: 2014-05-20 00:17:57
*/

define('WEBROOT', dirname(__FILE__));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT.DS.'core');
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME'])));

require CORE.DS.'includes.php';
new Dispatcher();
?>

