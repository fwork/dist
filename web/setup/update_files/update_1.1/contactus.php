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

<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
<?include_once ($inc_path.check_includes_file_exist('title').".php");?>

</head>

 <body class="page-Main_Page ">

  <?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
  <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

 <h2>Contact Us</h2>
<br>
Please fill out the form below to send us your request

<table border=0 width="100%" >
<tr>

<td width="85%" align=left>
<br>
<form method="POST" name="ldapInput" action="contactus_action.php" >
<?
$user_id= $_SESSION["uid_".session_id()];
?>
<table class=tborder style="background-color:#ececec;"  border=0 width="70%"    >

<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Name</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="fname" size="50"></td>
</tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Phone/Mobile </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="fphone" size="35"></td>
</tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Email </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="femail" size="70"></td>
</tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Description </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><textarea class=form-field_big  id="fcomments" name="fcomments" rows=1 style="width: 500px; height: 60px;"></textarea>
</td>
</tr>

<tr height=20>
 

<td width="100%" colspan=2 align=left> 
<br>
<?$sec_class->captcha_div();?>

<input type="hidden" name="nonce" value="<?php echo $nonce?>"/>

<div align=right>
<input class=sbttn3 type="submit" name="submit" value=" Submit "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
</tr>

</table>
</form>
<br>


</td>
<td width="20%" align=right valign=top>
 <image src="../images/contactus.jpg">
</td>
</tr></table>


<b>NCI Contacts</b>
<br><br>
General enquiries: 02 6125 9800<br>
Media enquiries: 02 6125 4389 or 0478 879 347<br>
Help desk: help ?at? nf.nci.org.au<br>
<br><br>
<b>Address:</b><br><br>

National Computational Infrastructure<br>
The Australian National University<br>
143 Ward Road<br>
Acton, ACT, 2601<br>








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
