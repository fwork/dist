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
    
	

	    <h1 class="entry-title">Feedback </h1>

		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
		
		 
 
 <?$sec_class->captcha_check();?>

 
 
</center>
<br>
<?
  $fname=valid_data($_POST['fname']);
  $fphone=valid_data($_POST['fphone']);
  $femail=valid_data($_POST['femail']);
  $fcomments=valid_data($_POST['fcomments']);

$d=date("Y-m-d H:i:s");




$sub="Feedback";
$msg="A feedback has been received .....
<br>
<br>
Date : ".$d."<br><br>
From : ".$fname."<br><br>
Phone : ".$fphone."<br><br>
Email : ".$femail."<br><br><br><br>
Comments : ".$fcomments."<br><br>";



email_send($msg,$sub);



 
?> 
 
Feedback  received.....
 
<br><br><br>
<a href="../php/feedback.php" ><image src="../images/back.png"></a>

<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>







 <div class="printfooter">
 </div>
		</div>	
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 

</body></html>

