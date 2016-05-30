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

 $val2=date("Y-m-d");
$vid=valid_data(($_REQUEST['vid']));
 
$res1b=@MYSQL_QUERY("select *  from nci_vocabulary.vocabulary_main where vocab_id='$vid'") ;
$row1b=@MYSQL_fetch_array($res1b);
 

?>

<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
 
<?
if (isset($_POST['button_save'])) {

$user_id=$_SESSION["uid_".session_id()] ;


$vid=(valid_data($_POST['vid']));
$val2=date("Y-m-d");

  $filename=$_FILES['userfile']['name'];
  $file_url="../../vocabulary/".$filename;

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
  move_uploaded_file($_FILES['userfile']['tmp_name'], "../../vocabulary/".$filename); }

$vid=valid_data($_POST['vid']);
$vtitle=valid_data($_POST['vtitle']);
$vpub_name=valid_data($_POST['vpub_name']);
$vpub_email=valid_data($_POST['vpub_email']);
$vpub_phone=valid_data($_POST['vpub_phone']);
$vpub_website=valid_data($_POST['vpub_website']);

$vdescp=valid_data($_POST['vdescp']);
$vversion=valid_data($_POST['vversion']);
$vformat=valid_data($_POST['vformat']);
$vlanguage=valid_data($_POST['vlanguage']);
$vsubjects=valid_data($_POST['vsubjects']);
$vuri=valid_data($_POST['vuri']);

$vowner_name=valid_data($_POST['vowner_name']);
$vowner_phone=valid_data($_POST['vowner_phone']);
$vowner_email=valid_data($_POST['vowner_email']);
$vowner_website=valid_data($_POST['vowner_website']);

$res1=@MYSQL_QUERY("delete from  nci_vocabulary.vocabulary_main where vocab_id='$vid'") ;

$query1=" Insert into nci_vocabulary.vocabulary_main (`vocab_id`, `vocab_title`, `vocab_descp`, `vocab_format`, `vocab_subject`, `vocab_language`, `vocab_pub_name`, `vocab_pub_email`, `vocab_pub_phone`, `vocab_pub_website`, `vocab_version`, `date_post`, `vocab_owner_name`, `user_id`, `vocab_owner_email`, `vocab_owner_phone`, `vocab_owner_website`, `voacb_file_path`, `vocab_uri`  ) values ($vid,  '$vtitle','$vdescp','$vformat','$vsubjects','$vlanguage','$vpub_name','$vpub_email','$vpub_phone','$vpub_website','$vversion','$val2','$vowner_name','$user_id','$vowner_email','$vowner_phone','$vowner_website','$file_url','$vuri')";


$result1=MYSQL_QUERY($query1) ;



echo "<br><br><br><center>Vocabulary successfully changed............<br><br>Please close this window and reload your main page to see the changes....";

 echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";

echo "<input class=form_field onclick='javascript:window.close()' name='button_save1' type='button' value='Close'>"; 

echo "<br><br><br>";

}


else {

?>



<form name="ff1" method="post" action="edit_vocab_detail.php"  enctype="multipart/form-data">

<br>

<font size=4 face='verdana' color=#800000><u> Change Vocabulary Detail</u></font>

<center>
<br><br>



<table class=tborder style="background-color:#ececec;"  border=0 width="95%"    >

<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Title</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="vtitle" id="vtitle"  size="120" value='<?echo $row1b['vocab_title'];?>'></td></tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Publisher Name</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vpub_name" id="vpub_name"  size="120" value='<?echo $row1b['vocab_pub_name'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Publisher Email</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vpub_email" id="vpub_email"  size="90" value='<?echo $row1b['vocab_pub_email'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Publisher Phone</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vpub_phone" id="vpub_phone"  size="90" value='<?echo $row1b['vocab_pub_phone'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Publisher Website</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vpub_website" id="vpub_website"  size="90" value='<?echo $row1b['vocab_pub_website'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>







<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Description</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><textarea class=form-field_big  id="vdescp" name="vdescp" rows=1 style="width: 610px; height: 120px;"><?echo $row1b['vocab_descp'];?></textarea></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Version</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="vversion" id="vversion"  size="120" value='<?echo $row1b['vocab_version'];?>'></td></tr>
<tr height=5><td>&nbsp;</td></tr>



<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Available Formats</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black">


<select name="vformat" id="vformat"   class=form-field   size="1"  >

<?if ($row1b['vocab_format']=='SKOS') {?>
<option value='SKOS' selected>SKOS</option>
<?} else { ?>
<option value='SKOS'>SKOS</option>
<?}?>


<?if ($row1b['vocab_format']=='OWL') {?>
<option value='OWL' selected>OWL</option>
<?} else { ?>
<option value='OWL'>OWL</option>
<?}?>

<?if ($row1b['vocab_format']=='TEXT') {?>
<option value='TEXT' selected>TEXT</option>
<?} else { ?>
<option value='TEXT'>TEXT</option>
<?}?>

<?if ($row1b['vocab_format']=='CSV') {?>
<option value='CSV' selected>CSV</option>
<?} else { ?>
<option value='CSV'>CSV</option>
<?}?>

<?if ($row1b['vocab_format']=='ZTHES') {?>
<option value='ZTHES' selected>ZTHES</option>
<?} else { ?>
<option value='ZTHES'>ZTHES</option>
<?}?>

<?if ($row1b['vocab_format']=='RDF') {?>
<option value='RDF' selected>RDF</option>
<?} else { ?>
<option value='RDF'>RDF</option>
<?}?>

<?if ($row1b['vocab_format']=='OTHER') {?>
<option value='OTHER' selected>OTHER</option>
<?} else { ?>
<option value='OTHER'>OTHER</option>
<?}?>



</select>




</td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Language</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vlanguage" id="vlanguage" size="120" value='<?echo $row1b['vocab_language'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Subjects</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vsubjects" id="vsubjects" size="120" value='<?echo $row1b['vocab_subject'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Type - URI</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vuri" id="vuri" size="120" value='<?echo $row1b['vocab_uri'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>



<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Type - File </font> </td>
<td width="80%" align=left >
 <font face='arial' size='2' >Select File to upload : &nbsp;&nbsp;&nbsp;&nbsp;<input class=sbttn3 type="file" name="userfile" maxlength="80" size="35">&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="84000000">
</tr>

<tr height=5><td>&nbsp;</td></tr>




<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Owner Name</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vowner_name" id="vowner_name"  size="120" value='<?echo $row1b['vocab_owner_name'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Owner Email</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vowner_email" id="vowner_email"  size="90" value='<?echo $row1b['vocab_owner_email'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Owner Phone</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vowner_phone" id="vowner_phone"  size="90" value='<?echo $row1b['vocab_owner_phone'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Owner Website</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="black"><input class=form-field_big type="text" name="vowner_website" id="vowner_website"  size="90" value='<?echo $row1b['vocab_owner_website'];?>'></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


</table>
<input type="hidden" name="vid" value="<?echo $vid;?>">


<br><br>
</center>
<input class=form_field name="button_save" type="submit" value="Submit">

<?}?>


</form>

<br><br>
 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>

