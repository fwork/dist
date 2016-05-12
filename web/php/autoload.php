<?php

$ROOT_PATH = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$inc_path=$ROOT_PATH."includes/";
@include_once("settings.php"); 
  
 
@include_once($inc_path."sec_class.php");
$sec_class = new sec_class();

@include_once($inc_path."site_class.php");
$site_class = new site_class();

?>
