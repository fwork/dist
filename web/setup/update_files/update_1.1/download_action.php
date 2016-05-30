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
    
	

	    <h1 class="entry-title">Documentation Upload </h1>

		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
<?$sec_class->captcha_check();?>		
		 
 
  
 
</center>




<?

$group=valid_data($_POST['group']);
$project=valid_data($_POST['project']);
$puser=valid_data($_POST['puser']);
$dd=date("Y-m-d");

if (isset($group)) {
$val1='Y';} 
else { $val1='N';}

if (isset($project)) {
$val2='Y';} 
else { $val2='N';}


if (isset($puser)) {
$val3='Y';} 
else { $val3='N';}



   $filename=$_FILES['userfile']['name'];
  $file_url=$filename;
     
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) { 
  move_uploaded_file($_FILES['userfile']['tmp_name'], $docs_path.$filename); }
 
   echo"<font face=verdana color=#800000 size=3>Help File successfully uploaded ..........</font><br><br> </center> "; 


     $res1=@MYSQL_QUERY("select max(table_id) as cc  from nci_metadata_general.documentation") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
 $max_id=$max_id+1;

$query1=" Insert into nci_metadata_general.documentation (`table_id`, `file_name`,  `group`, `project`, `puser`,`link`,`date_updated`  ) values ($max_id,  '$filename', '$val1', '$val2', '$val3','$file_url','$dd' )";
$result1=MYSQL_QUERY($query1) ;


?> 
 
<a href="../php/downloads.php" ><image src="../images/back.png"></a>
 
 
 
 <br><br><br>
 <br><br><br>
 <br><br><br>
 <br><br><br>
 <br><br><br>
 <br><br><br>
 <br><br><br>
<br>



 
 <div class="printfooter">
 </div>
		</div>	
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 


</body></html>

