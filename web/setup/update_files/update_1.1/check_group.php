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
 
<body>
<br>

<font size=3 color=#800000>List of Groups
<br><br>

 

<?
$result1=MYSQL_query("Select distinct(nci_code) as cc from nci_data_management.data_mgmt order by nci_code");
 while ($row1=MYSQL_fetch_array($result1)){


$gp=$row1['cc'];

$result2=MYSQL_query("Select count(*) as cd from nci_metadata_general.group_project where project_id='$gp'");
$row2=MYSQL_fetch_array($result2);
$cnt=$row2['cd'];

if ($cnt==0) {
echo $gp."     ".$cnt."<br>";
}


?>
<?}?>
</BODY>
</HTML>
