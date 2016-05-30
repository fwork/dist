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

<font size=3 color=#800000>List of Group Admin
<br><br>
<script>
function win_open(str,str1) {
  w = screen.availWidth;
   h = screen.availHeight;
    var popW = 550, popH = 250;
var leftPos = (w-popW)/2, topPos = (h-popH)/2;
 win2=window.open('delete_map2.php?guid='+str+'&group_id='+str1,'win2','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=550,height=250,top=' + topPos + ',left=' + leftPos);
}

</script>
 
<table class='tborder'  border="0" width="99%" align=center height="80%"><tr><td valign=top>

<table border=0 width=100% align=center>
<tr height=30 class="row1">
<td width=5% align=center></td>
<td width=40% align=center>Group Name</td>
<td width=50% align=center>User ID</td>
<!--<td width=5% align=center></td>-->
</tr>

<?
$result1=@MYSQL_query("Select group_id,user_id from nci_metadata_general.group_admin");
 while ($row1=@MYSQL_fetch_array($result1)){

$group_id=$row1['group_id'];
$result2=@MYSQL_query("Select group_name from nci_metadata_general.groups where group_id=$group_id");
$row2=@MYSQL_fetch_array($result2);
$guid=$row1['user_id'];

?>

<tr>
<td width=5% align=left><font size=2>&nbsp;&nbsp;<a href="javascript:win_open('<?=$guid?>','<?=$group_id?>')">  <image src="../images/del_icon.png" width=10 height=10></a></font></td>
<td width=40% align=left><font size=2><?echo $row2['group_name'];?></font></td>
<td width=50% align=left><font size=2><?echo $row1['user_id'];?></font></td>
<!--<td width=5% align=center><font size=2><image src='../images/dred.png'></td>-->
</tr>

<?}?>
 </table>

</td></tr>
</table>
<br><div align="center">
<input type="button" value='Close Window' onclick="javascript:window.close();"></div>
</BODY>
</HTML>
