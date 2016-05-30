 <?php
@include_once("autoload.php");
$site_class->init();
$sec_class->check_login();
$sec_class->single_session();
$sec_class->session_secret_handler();

//$sec_class->captcha_init();
//$sec_class->get_nonce();
?>


<?$sec_class->session_expire_div();?>
<?$sec_class->session_expire_handler();?>
 
<?php
header('Content-Type: text/xml');
$p1="../../dataset_xmls/";
$path=valid_data($_REQUEST['fid']);
 header('Content-Disposition: attachment; filename="file.xml"');
readfile($p1.$path);
?>
