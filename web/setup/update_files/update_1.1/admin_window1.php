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

<script>
function win_open(str) {
  w = screen.availWidth;
   h = screen.availHeight;
    var popW = 550, popH = 250;
var leftPos = (w-popW)/2, topPos = (h-popH)/2;
 win2=window.open('delete_map1.php?gn='+str,'win2','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=550,height=250,top=' + topPos + ',left=' + leftPos);
}

</script>

 
<table class='tborder'  border="0" width="99%" align=center height="80%"><tr><td valign=top>

<table border=0 width=100% align=center>
<tr height=30 class="row1">
<td width=5% align=center></td>
<td width=30% align=center>Group Name</td>
<td width=65% align=center>Group Description</td>
</tr>

<?
$result1=MYSQL_query("Select group_name,group_descp from nci_metadata_general.groups");
 while ($row1=MYSQL_fetch_array($result1)){
$gn=$row1['group_name'];
?>

<tr>
<td width=5% align=left><font size=2>&nbsp;&nbsp;<a href="javascript:win_open('<?=$gn?>')">  <image src="../images/del_icon.png" width=10 height=10></a></font></td>
<td width=30% align=left><font size=2><?echo $row1['group_name'];?></font></td>
<td width=65% align=left><font size=2><?echo $row1['group_descp'];?></font></td>
</tr>

<?}?>
 </table>

</td></tr>
</table>
<br><div align="center">
<input type="button" value='Close Window' onclick="javascript:window.close();"></div>
</BODY>
</HTML>
