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
 ?>

<font size=4 face='verdana' color=#800000><u>DMP Report</u></font>
<center>
<br><br>
<table class=tborder style="table-layout: fixed; background-color:#ececec;"  border=1 width="99%"    >

<tr height=20>
<td width="20%" align=left valign=top> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Title</font> </td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Format Name/Version</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Dataset Version</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Tools</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Software</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Algorithms</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Flexibility</font></td>
<td width="11%" align=left ><font size=2 face='tahoma' color="blue">&nbsp;&nbsp;Services</font></td>
</tr>

<?
$res1b=@MYSQL_QUERY("select *  from nci_data_management.data_management order by datacollection_title") ;
while ($row1b=@MYSQL_fetch_array($res1b)){
 
?>

 


<tr bgcolor=#ffffff height=20>
<td  style="word-wrap: break-word" width="20%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['datacollection_title'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['format_name_version'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['dataset_version'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['tools'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['software'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['algorithms'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['flexibility'];?></td>
<td  style="word-wrap: break-word" width="11%" align=left ><font size=2 face='tahoma' color="black"><?echo $row1b['services'];?></td>
</tr>




<?}?>

</table>


<br><br>
</center>
