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
 
<?
  
$fname= valid_data(($_REQUEST['fname'])); 



$res2=@MYSQL_QUERY("select count(field_name) as cc  from field_names where field_name='$fname' and is_mandatory='y'") ;

                          $row2=@MYSQL_fetch_array($res2);

                          $cchk = $row2["cc"];
                
                            
                 if ($cchk>0) {
                 
                 $msg="Field is mandatory ..";
                 echo $msg;
           }
 
    


?>
