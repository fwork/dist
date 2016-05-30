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
		
		
 

 <h2>FAQs</h2>

<br><br>
<table border=0 width="100%" >
<tr>

<td width="80%" align=left>

<?
$user_id= $_SESSION["uid_".session_id()];

if ($_SESSION["uacat_".session_id()]=='1') {
?>
<a href="javascript:void(0)" onClick="showComment0();"><img id="expandButton0" border="0" src="../images/collapse.gif"> <font size=3>Add new FAQ</font> </a>
 <div id="div_comment0" style="display: none; width:800px">
   <form name="f1" method="post" action="../php/faq_action.php">
<br><br>
 <font face='arial' size='2' color="blue">FAQ no. : &nbsp;&nbsp;<input class=sbttn3 type="text" name="fno" size="15">&nbsp;&nbsp;<br><br>
 <font face='arial' size='2' color="blue">FAQ  : &nbsp;&nbsp;<input class=sbttn3 type="text" name="faq" size="150">&nbsp;&nbsp;<br><br>
 <font face='arial' size='2' color="blue">FAQ description : &nbsp;&nbsp;<input class=sbttn3 type="text" name="ans" size="145">&nbsp;&nbsp;<br>

<br><br>
<?$sec_class->captcha_div();?>
<br><br><input type="hidden" name="nonce" value="<?php echo $nonce?>"/>

<input class=sbttn3 type="submit" name="submit" value=" SAVE ">
</form>
 </div>
<?}?>
<br>


<br>





<table class=tborder border=0 width="90%"    >
<?
$a=0;
$user_result = mysql_query("select * from nci_metadata_general.faqs order by faq_no");
while ($row = mysql_fetch_array($user_result)){
$a=$a+1;
?>

<tr height="20" class=row1>
<td     align="left" nowrap="nowrap" width="80%" colspan=2 height="20"><font size="2" face=tahoma color="#000"><?echo $a;?>. <?echo $row['ques']?>&nbsp;&nbsp;</font></td>
</tr>
<tr height=20>
<td width="100%" align=left ><font size=2 face='tahoma' color="blue"><?echo $row['ans'];?>
</td> 
</tr>
<tr height=15><td>&nbsp;</td></tr>
<?}?>
</table>

<br><br><br><br><br>


</td>
<td width="20%" align=right valign=top>
<image src="../images/faq1.jpg" width=150 height=75>
</td>
</tr></table>








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
