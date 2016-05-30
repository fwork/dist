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
$dmid=valid_data($_REQUEST['dm']);
 

 
if (isset($_POST['button_save'])) {

$dmid=valid_data(($_POST['dm']));

 
$res1=@MYSQL_QUERY("select *  from nci_data_management.data_mgmt where dm_id='$dmid'") ;
$row=@MYSQL_fetch_array($res1);
$file_identifier=$row['file_identifier'];
$ROOT_PATH = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$datasetxmls_path=$ROOT_PATH."dataset_xmls/";
$datasetpdf_path=$ROOT_PATH."dataset_pdf/";

$file1=$datasetpdf_path.'dmplan_query_id_'.$dmid.'.txt';
$file2=$datasetxmls_path.$file_identifier.".xml";
$file3=$datasetpdf_path."dmplan_id_".$dmid.".pdf";


unlink ($file1);
unlink ($file2);
unlink ($file3);

 $query1="delete from nci_data_management.data_mgmt where dm_id='$dmid'"; 
 $result1=MYSQL_QUERY($query1);
  


echo "<br><br><br><center>DMP successfully deleted............<br><br>Please close this window and reload your main page to see the changes....";



}


else {

?>


 
<form name="ff1" method="post" action="delete_dmid.php">
<br><br>
<center>

<font face='arial' size='4' color="#800000"><u>Delete Data Management Plan</u>
</font>
<br><br><br>

<table border=0 width=90% align=center>

 <td width="70%" colspan=2 align=center>Are You sure want to delete the DMP.....</td>
 
 
<input type="hidden" name="dm" value="<?echo $dmid;?>">
<td width="70%" colspan=2 align=center><input class=form_field name="button_save" type="submit" value="Yes"></td>
 </tr>

</table>

</form>


<?}?>
