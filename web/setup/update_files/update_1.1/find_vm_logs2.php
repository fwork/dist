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


 

  
 

 $col1='';
  
$hname=valid_data($_REQUEST['host']);



$result1 = @pg_query("select log_detail from postgres_log where host_name='$hname' ");
while ($row1 = @pg_fetch_array($result1)) {

$col1=$col1.nl2br($row1['log_detail'])."<br>"; 

 }

echo $col1;

 

?>
