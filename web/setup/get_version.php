<?php

@include_once("../php/settings.php"); 

$ROOT_PATH =dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
 
$remote_file_url ='https://raw.githubusercontent.com/fwork/dist/master/version.txt'; 
$array = explode("\n", file_get_contents($remote_file_url));
$remote_text=($array[0]);


 $fs=($array[2]);

$up_doc_root=UP_DOC_ROOT;
if ($up_doc_root=='/') { $ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR; } else { $ROOT_PATH=$up_doc_root; };
$local_text=file_get_contents($ROOT_PATH.'framework_version.txt');
 
 
 if (ltrim(rtrim($local_text))!=ltrim(rtrim($remote_text))){
 
$ret_value= "<center>A new version of the framework software  is available for download .........<br><b>Version (".$remote_text.")</b>&nbsp;&nbsp;&nbsp;Filesize : ".$fs."<br><br>" ;
$ret_value .="<center>&nbsp;&nbsp;&nbsp;<input type='button' style='width:200px;' class='btn btn-block btn-success btn-sm' value='  Update  Now ' onclick='process_data()'></center>";

} else {

$ret_value ="The version of the framework software ( ".$remote_text." ) is the current version ..." ; }
echo $ret_value;
?>