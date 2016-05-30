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
 
<script>
function showComment0()  {
 
 var tE  = document.getElementById("div_comment0"); 
 var obj = document.getElementById("expandButton0"); 
    
    
 if(tE.style.display!= "block"){ 
 tE.style.display="block";
 obj.src = "../images/retract.gif"; 
 } else { 
 tE.style.display="none"; 
 obj.src = "../images/collapse.gif"; 
 } 
 } 
</script>


</head>

 <body class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

 <h2>Technical Resources</h2>
 
<br><br>

<table border=0 width="100%" >
<tr>

<td width="80%" align=left>


<?
$user_id= $_SESSION["uid_".session_id()];


if ($_SESSION["uacat_".session_id()]=='1') {
?>
<a href="javascript:void(0)" onClick="showComment0();"><img id="expandButton0" border="0" src="../images/collapse.gif"> <font size=3>Upload Help Docs</font> </a>
 <div id="div_comment0" style="display: none; width:800px"><br>
   <form name="f1" method="post" action="../php/download_action.php" enctype="multipart/form-data" >
<font size=2>
This form allows you to upload a help file to the server.<br>
 <br>Accessible to <br>
<br><input type="checkbox" name="group" value="group_on">Group Admin <br>
<input type="checkbox" name="project" value="project_on">Project Admin <br>
<input type="checkbox" name="puser" value="puser_on">Project User <br>
<br>
 <font face='arial' size='2' color="blue">Select File to upload : &nbsp;&nbsp;&nbsp;&nbsp;<input class=sbttn3 type="file" name="userfile" maxlength="80" size="35">&nbsp;&nbsp;&nbsp;&nbsp;<br>
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="84000000">
 <br>

<?$sec_class->captcha_div();?>
<br><br><input type="hidden" name="nonce" value="<?php echo $nonce?>"/>

<input class=sbttn3 type="submit" name="submit" value=" UPLOAD ">
</form> 
 </div>
<br>
<br>

<table  border=0 width="80%"    >
<thead>
<tr height="20" >
<td     align="left" nowrap="nowrap" width="80%" colspan=2 height="20"><font size="2" face=tahoma color="#000"> &nbsp;&nbsp;<u>General Documents<br></u>&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<?
$result1=@MYSQL_query("Select file_name,link,date_updated from nci_metadata_general.documentation order by file_name");
 while ($row1=@MYSQL_fetch_array($result1)){
?>
 <tr   height=20>
<td width="100%" align=left ><font size=2 face='tahoma' color="blue"><a target='_blank' href="view_pdf1.php?fname=<?echo $row1['link'];?>"><image src="../images/download.gif" width="15" height="15">&nbsp;<?echo $row1['file_name'];?></font> </a><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Updated: &nbsp;<?echo $row1['date_updated'];?></font></td>
</tr>

<?
}
?>

</table>
<br><br><br>


<?}?>








<? // ******* Group Admin ***********

if ($_SESSION["uacat_".session_id()]=='2') {
?>
<table  border=0 width="80%"    >
<thead>
<tr height="20" >
<td     align="left" nowrap="nowrap" width="80%" colspan=2 height="20"><font size="2" face=tahoma color="#000"> &nbsp;&nbsp;<u>General Documents<br></u>&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<?
$result1=@MYSQL_query("Select file_name,link,date_updated from nci_metadata_general.documentation where `group`='Y' order by file_name");
 while ($row1=@MYSQL_fetch_array($result1)){
?>
 <tr   height=20>
<td width="100%" align=left ><font size=2 face='tahoma' color="blue"><a target='_blank' href="<?echo $row1['link'];?>"><image src="../images/download.gif" width="15" height="15">&nbsp;<?echo $row1['file_name'];?></font> </a><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Updated: &nbsp;<?echo $row1['date_updated'];?></font></td>
</tr>

<?
}
?>

</table>
<br><br><br>

<?}?>








<? // ******* Project Admin ***********

if ($_SESSION["uacat_".session_id()]=='3') {
?>
<table  border=0 width="80%"    >
<thead>
<tr height="20" >
<td     align="left" nowrap="nowrap" width="80%" colspan=2 height="20"><font size="2" face=tahoma color="#000"> &nbsp;&nbsp;<u>General Documents<br></u>&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<?
$result1=@MYSQL_query("Select file_name,link,date_updated from nci_metadata_general.documentation where `project`='Y' order by file_name");
 while ($row1=@MYSQL_fetch_array($result1)){
?>
 <tr   height=20>
<td width="100%" align=left ><font size=2 face='tahoma' color="blue"><a target='_blank' href="<?echo $row1['link'];?>"><image src="../images/download.gif" width="15" height="15">&nbsp;<?echo $row1['file_name'];?></font> </a><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Updated: &nbsp;<?echo $row1['date_updated'];?></font></td>
</tr>

<?
}
?>

</table>
<br><br><br>

<?}?>






<? // ******* Project User ***********

if ($_SESSION["uacat_".session_id()]=='4') {
?>
<table  border=0 width="80%"    >
<thead>
<tr height="20" >
<td     align="left" nowrap="nowrap" width="80%" colspan=2 height="20"><font size="2" face=tahoma color="#000"> &nbsp;&nbsp;<u>General Documents<br></u>&nbsp;&nbsp;</font></td>
</tr>
</thead>
<tbody>
<?
$result1=@MYSQL_query("Select file_name,linki,date_updated from nci_metadata_general.documentation where `puser`='Y' order by file_name");
 while ($row1=@MYSQL_fetch_array($result1)){
?>
 <tr   height=20>
<td width="100%" align=left ><font size=2 face='tahoma' color="blue"><a target='_blank' href="<?echo $row1['link'];?>"><image src="../images/download.gif" width="15" height="15">&nbsp;<?echo $row1['file_name'];?></font> </a><font size=1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Updated: &nbsp;<?echo $row1['date_updated'];?></font></td>
</tr>

<?
}
?>

</table>
<br><br><br>

<?}?>







</td>
<td width="20%" align=right valign=top>
 <image src="../images/docm.jpg" >
</td>
</tr></table>







</font>
 <div class="printfooter">
 </div>
		</div>	
		
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->
</center>
	 
 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 


</body></html>
