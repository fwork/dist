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



$result1 = @pg_query("select to_char((fetch_time), 'DD/MM/YY &nbsp;  HH24:MI:SS TZ')  as cc,description,time_taken,size from master_backup_log where host_name='$hname' order by fetch_time desc limit 20");
while ($row1 = @pg_fetch_array($result1)) {

$col1=$col1. $row1['cc']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ".$row1['description']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ".$row1['time_taken']." (seconds)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row1['size']."  (bytes)<br>"; 

 }

echo $col1;

 

?>
