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
 

 <body class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

 <h2>Dashboard</h2>
 
<br><br>




<table border=0 width="90%">

<tr>


<?
if ($_SESSION["uacat_".session_id()]=='1') {

?>

<td width="20%" align=center><a  title="Data Management Plan" style="text-decoration:none;" href="../php/data_management.php"><img src="../images/dmp_icon.jpg" ><br><font size=2 face=tahoma color="blue">Data Management Plan</a></td>

<td width="20%" align=center><a  title="General Metadata Profile" style="text-decoration:none;" href="../php/general_index.php"><img src="../images/prof1.jpg"><br><font size=2 face=tahoma color="blue">General Metadata Profile</a></td>

<td width="20%" align=center><a  title="GA Metadata Profile" style="text-decoration:none;" href="../php/ga_index.php"><img src="../images/prof2.jpg"><br><font size=2 face=tahoma color="blue">GA Metadata Profile</a></td>

<td width="20%" align=center><a  title="AusCover Metadata Profile" style="text-decoration:none;" href="../php/auscover_index.php"><img src="../images/prof3.jpg"><br><font size=2 face=tahoma color="blue">AusCover Metadata Profile</a></td>

</tr>

<tr height="50"><td></td></tr>


<tr>

<td width="20%" align=center><a  title="eMAST Metadata Profile" style="text-decoration:none;" href="../php/emast_index.php"><img src="../images/prof4.jpg"><br><font size=2 face=tahoma color="blue">eMAST Metadata Profile</a></td>

<td width="20%" align=center><a  title="Admin" style="text-decoration:none;" href="../php/admin.php"><img src="../images/admin_icon.jpg"><br><font size=2 face=tahoma color="blue">Admin</a></td>

<!--<td width="20%" align=center><a  title="Reports" style="text-decoration:none;" href="../php/reports.php"><img src="../images/reports_icon.jpg"><br><font size=2 face=tahoma color="blue">Reports</a></td>
-->
<td width="20%" align=center><a  title="Documentation" style="text-decoration:none;" href="../php/downloads.php"><img src="../images/download_icon.jpg"><br><font size=2 face=tahoma color="blue">Documentation</a></td>

</tr>

</table>
<br><br><br>
<br><br><br><br><br>

<?} else {

$prof=$_SESSION["uprofile_".session_id()];

$href1="../php/".$prof."_index.php";
?>

<td width="20%" align=center><a  title="Data Management Plan" style="text-decoration:none;" href="../php/data_management.php"><img src="../images/dmp_icon.jpg" ><br><font size=2 face=tahoma color="blue">Data Management Plan</a></td>

<?if ($_SESSION["uprofile_".session_id()]!='') {
?>
<td width="20%" align=center><a  title=<?echo strtoupper($prof);?>." Metadata Profile" style="text-decoration:none;" href="<?echo $href1;?>"><img src="../images/prof2.jpg"><br><font size=2 face=tahoma color="blue"><?echo strtoupper($prof);?> Metadata Profile</a></td>
<?}?>

<td width="20%" align=center><a  title="General Metadata Profile" style="text-decoration:none;" href="../php/general_index.php"><img src="../images/prof1.jpg"><br><font size=2 face=tahoma color="blue">General Metadata Profile</a></td>

<!--
<td width="20%" align=center><a  title="Reports" style="text-decoration:none;" href="../php/reports.php"><img src="../images/reports_icon.jpg"><br><font size=2 face=tahoma color="blue">Reports</a></td>
-->
<td width="20%" align=center><a  title="Documentation" style="text-decoration:none;" href="../php/downloads.php"><img src="../images/download_icon.jpg"><br><font size=2 face=tahoma color="blue">Documentation</a></td>

<tr>
</table>
<br><br>
<br><br><br><br><br>
<br><br><br><br><br><br>

<?}?>













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
