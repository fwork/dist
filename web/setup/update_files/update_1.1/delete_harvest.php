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
$dmid=valid_data($_REQUEST['gdoi']);

 

 
if (isset($_POST['button_save'])) {

$dmid=valid_data(($_POST['dm']));

 

 $query1="delete from harvest_setting where id='$dmid'"; 
 $result1=pg_QUERY($query1);
  


echo "<br><br><br><center>Harvestign Rotine successfully deleted............<br><br>Please close this window and reload your main page to see the changes....";



}


else {

?>


 
<form name="ff1" method="post" action="delete_harvest.php">
<br><br>
<center>

<font face='arial' size='4' color="#800000"><u>Delete Harvesting Routine</u>
</font>
<br><br><br>

<table border=0 width=90% align=center>

 <td width="70%" colspan=2 align=center>Are You sure want to delete the routine.....</td>
 
 
<input type="hidden" name="dm" value="<?echo $dmid;?>">
<td width="70%" colspan=2 align=center><input class=form_field name="button_save" type="submit" value="Yes"></td>
 </tr>

</table>

</form>


<?}?>
