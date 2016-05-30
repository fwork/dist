 <?php
@include_once("autoload.php");
$site_class->init();
$sec_class->check_login();
$sec_class->single_session();
$sec_class->session_secret_handler();

//$sec_class->captcha_init();
$sec_class->get_nonce();
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

</head>

 <body class="page-Main_Page ">

<?include_once ($inc_path.check_includes_file_exist('header').".php");?>


    <div class="content hentry">
     <?include_once ($inc_path.check_includes_file_exist('top_menu').".php");?>
   
        <div class="entry-content">
		
		
 

 <h2>Feedback</h2>
<br><br>
Please fill out the form below to send us feedback
<br>
<br>

<table border=0 width="100%" >
<tr>

<td width="80%" align=left>


 <form method="POST" name="ldapInput" action="feedback_action.php" >


<?
$user_id= $_SESSION["uid_".session_id()];
?>
<table class=tborder style="background-color:#ececec;"  border=0 width="70%"    >

<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Name</font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="fname" size="50"></td> 
</tr>
<tr height=5><td>&nbsp;</td></tr>

<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Phone/Mobile </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="fphone" size="35"></td> 
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Email </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><input class=form-field_big type="text" name="femail" size="70"></td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="20%" align=left> <font size=2 face='tahoma' color=blue>&nbsp;&nbsp;Comments </font> </td>
<td width="80%" align=left ><font size=2 face='tahoma' color="blue"><textarea class=form-field_big  id="fcomments" name="fcomments" rows=1 style="width: 500px; height: 60px;"></textarea>
</td>
</tr>
<tr height=5><td>&nbsp;</td></tr>


<tr height=20>
<td widht="100%" colspan=2 align=left> 

<?$sec_class->captcha_div();?>

<br>
<?$sec_class->save_nonce();?>
<input class=sbttn3 type="submit" name="submit" value=" Submit "> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr height=5><td>&nbsp;</td></tr>

</table>
</form>
<br>


</td>
<td width="20%" align=right valign=top>
<image src="../images/feedback.jpg">
</td>
</tr></table>


<br><br>



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
