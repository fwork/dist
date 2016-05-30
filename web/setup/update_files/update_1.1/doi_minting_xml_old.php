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
		
		
 

<h1>DOI Minting &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <font size=3 face=tahoma  color=#800000>Minting DOI from ANDS Cite My Data Service</font></h1>
<br>

<table border=0 width="100%"><tr><td width="30%" align=left></td> <td wdith="70%" align=right><a href=""></a><a href="doi_minting_xml.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Upload XML Metadata</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="doi_minting.php"><image src="../images/add_icon.png">&nbsp;<font size=2>Add DOI</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="search_doi.php"><image src="../images/search_icon.png">&nbsp;Search DOI</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../php/update_doi.php"><image src="../images/update_icon.png">&nbsp;Update DOI</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td></tr></table>



<?
$user_id= $_SESSION["uid_".session_id()];
?>




<?
if (isset($_POST['submit'])){              



		 
if ($_SESSION['captcha']['code'] != valid_data($_POST['capcode'])) {
?>
<br><br><br>
<font color=#800000 size=3> Code Error!</font>   &nbsp;&nbsp;&nbsp;<font size=2>Please re-enter the code .....

<br><br><br><br><br>
<image src="../images/back.png" onclick="window.history.back()">
<br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<?} else {




    // connect to the database
    $maxfilesize=150000000;
if ($_FILES['userfile']['size'] > $maxfilesize) {
  $error = "file is too large";
       echo"<center><br><br> Your Image file exceeded the limit of 50MB ..........</font> <br><br><font size=3 face=arial>Try Again..</font><br></center><br><br>";
} else {

$path2="/var/www/rdc/projects/";

  $filename=$_FILES['userfile']['name'];
  $file_url=$path2.$filename;

if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
  move_uploaded_file($_FILES['userfile']['tmp_name'], $path2.$filename); }
   echo"<font face=verdana color=#800000 size=3><br><br><img src='../images/gtick.jpg' width=30 height=30>&nbsp;&nbsp;Input Data File successfully uploaded ..........</font><br><br> </center> ";

echo "<form name='f21' method='post' action='doi_minting_xml_action.php' >  ";   
echo "<input type='hidden' name='filename' value=$filename>";
echo "<INPUT TYPE='hidden' name='site' value='".$site."'>";
echo "<br>Dataset Landing Page URL : <input class=sbttn3 type='text' name='doi_lpage'  size='50'><br>";
echo " <table    border=0 width='80%'>";
echo "<tr height=50><td width='100%' colspan=3 align=left><input type='submit' value='Mint DOI'></td></tr></table>"; 
 echo "</form>";
?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><center>

<?
}


}

} else {
?>



</center><br>
  <a href="../images/simple_template.png" target="_blank">Sample DOI XML Template</a><br>
  <a href="../images/optional_template.png" target="_blank">Sample DOI XML Template(with optional fields)</a><br>
 
<br><br>
<form name="f11"   method="post" action="../php/doi_minting_xml.php" enctype="multipart/form-data" >
This form allows you to upload an xml file to the server.  <br>
<br><br>
 <br>
 <font face='arial' size='2' color="blue">Select Data File to upload : &nbsp;&nbsp;&nbsp;&nbsp;<input class=sbttn3 type="file" name="userfile" maxlength="80" size="35">&nbsp;&nbsp;&nbsp;&nbsp;<br>
<INPUT TYPE="hidden" name="MAX_FILE_SIZE" value="84000000">
<INPUT TYPE="hidden" name="site" value="<?echo $site;?>">
<br>
<?php
        echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
        ?>
<br>
Please enter the above code (code is case sensitive)
<br><input class=sbttn3 type="text" name="capcode" size="15"><br>
<br><br>
 <br><input type="hidden" name="nonce" value="<?php echo $nonce?>"/>

<input class=sbttn3 type="submit" name="submit" value=" UPLOAD ">
</form> <br><br><br><br><br><br>
  <?
}
?>





















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
