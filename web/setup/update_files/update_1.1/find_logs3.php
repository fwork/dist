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
  

$qry4 = "SELECT user_id,date_time from login_history order by date_time desc limit 10";
$result4 = @mysql_query($qry4);
while ($row4 = @mysql_fetch_array($result4)){
$col1=$col1. $row4['date_time']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   ".$row4['user_id']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "."<br>"; 

}
 

echo $col1;

 

?>
