  <?php
@include_once("autoload.php");
$site_class->init();
$sec_class->check_login();
$sec_class->single_session();
$sec_class->session_secret_handler();

 
?>

 
<?//$sec_class->session_expire_div();?>
<?//$sec_class->session_expire_handler();?>

<?//check_license(); use for checking the site license, and it should only be placed in the index file (only)?>

 <?//$sec_class->captcha_div();?> place where you want the captcha image to be displayed
<?//$sec_class->captcha_check ();?> place where you want to check the captcha code
<?//$sec_class->save_nonce ();?> place where you want to save the nonce.
<?//$sec_class->check_nonce ();?> place where you want to check the nonce code


<?  //use valid_data(), valid_data_bslash()  function for parsing the input variables ?>
<?  //use encrypt(), decrypt()  function for all $_REQUEST variables ?>


  
<?//include_once ($inc_path.check_includes_file_exist('header').".php");?>

  
</body></html>
