<?php
SESSION_START();
/***********DIR CONFIG*************************/
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);
//***    Universal prevent xss  ***
//   place this in top of script to prevent xss on your site
$_GET=array_map("strip_tags",$_GET);
$_POST=array_map("strip_tags",$_POST);
/***********************************/
require_once APP_PATH.'config.php';
require_once APP_PATH.'request.php';
require_once APP_PATH.'bootstrap.php';
require_once APP_PATH.'Controller.php';
require_once APP_PATH.'Model.php';
require_once APP_PATH.'View.php';
require_once APP_PATH.'Pdo.php';
/*******************************************/
try{
    Bootstrap::run(new Request);
}
catch(Exception $e){
    echo $e->getMessage();
}

?>



