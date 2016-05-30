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

 $val2=date("Y-m-d");
$guid=valid_data($_REQUEST['guid']);
$group_id=valid_data($_REQUEST['group_id']);
 
if (isset($_POST['button_save'])) {

$guid=valid_data($_REQUEST['guid']);
$group_id=valid_data($_REQUEST['group_id']);

 $query1="delete from nci_metadata_general.project_admin where project_id='$group_id' and user_id='$guid'"; 
 $result1=MYSQL_QUERY($query1);
  


echo "<br><br><br><center>Project Admin  successfully deleted............<br><br>Please close this window and reload your main page to see the changes....";



}


else {

?>


 
<form name="ff1" method="post" action="delete_map4.php">
<br><br>
<center>

<font face='arial' size='4' color="#800000"><u>Delete Project Admin</u>
</font>
<br><br><br>

<table border=0 width=90% align=center>

 <td width="70%" colspan=2 align=center>Are You sure want to delete the Project Admin.....</td>
 
<input type="hidden" name="guid" value="<?echo $guid;?>"> 
<input type="hidden" name="group_id" value="<?echo $group_id;?>">
<td width="70%" colspan=2 align=center><input class=form_field name="button_save" type="submit" value="Yes"></td>
 </tr>

</table>

</form>


<?}?>
