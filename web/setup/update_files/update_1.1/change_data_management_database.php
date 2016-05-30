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
    
	

	    <h1 class="entry-title">Notices & News </h1>

		<p class="sub-title"></p>

 		    <div id="jump-to-nav">Jump to:		        <a href="#sidebar">navigation</a>, 
		        <a href="#search">search</a>
		    </div>
		        
        <div class="entry-content">
		
		
		 
 
  
 
</center>
<br>
<?
$d=date("Y-m-d H:i:s");

$res_sec=@MYSQL_QUERY("select *  from nci_data_management.data_management  order by dm_id") ;
while ($row_sec=@MYSQL_fetch_array($res_sec)) 
{
$dm_id=$row_sec['dm_id'];
$ncode=$row_sec['nci_code'];

$link1='http://dapds00.nci.org.au/thredds/fileServer/licenses/'.$ncode.'_licence.pdf';
$link2=' http://dapds00.nci.org.au/thredds/fileServer/licenses/'.$ncode.'_readme.txt';
$link3='http://dapds00.nci.org.au/thredds/catalog/'.$ncode.'/catalog.html';

$ress=@MYSQL_QUERY("update nci_data_management.data_management set access_constraints='$link1',use_constraints='$link1',documentation='$link2',services='$link3'  where dm_id=$dm_id") ;

}


?> 



 <div class="printfooter">
 </div>
		</div>	
	</div>
	
<div id="sidebar">
 <?include_once ($inc_path.check_includes_file_exist('sidebar').".php");?>
</div><!-- end of the sidebar -->

 <?include_once ($inc_path.check_includes_file_exist('footer').".php");?>
		 


</body></html>

