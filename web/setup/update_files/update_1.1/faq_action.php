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
    
	

	    <h1 class="entry-title">FAQs </h1>

		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
		
		 
 
  
 
</center>
<br>

 <?$sec_class->captcha_check();?>



<?
  $fno=valid_data($_POST['fno']);
  $faq=valid_data($_POST['faq']);
  $ans=valid_data($_POST['ans']);

     $res1=@MYSQL_QUERY("select max(table_id) as cc  from nci_metadata_general.faqs") ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
 $max_id=$max_id+1;


$query1=" Insert into nci_metadata_general.faqs (`table_id`, `faq_no`, `ques`, `ans`  ) values ($max_id,  '$fno', '$faq', '$ans' )";

$result1=MYSQL_QUERY($query1) ; 
 
?> 
 
FAQ successfully saved.....
 
<br><br><br>
<a href="../php/faqs.php" ><image src="../images/back.png"></a>



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

