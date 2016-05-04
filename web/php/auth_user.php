<?include_once("autoload.php");?>
<?$site_class->init();?>

<?
$sec_class->get_nonce();
$sec_class->get_session_secret_handler();




 
/* Authenticate user */
$host = 'ldaps://sfldap0.anu.edu.au';
$ou = 'ou=people';
$baseDn = 'dc=apac,dc=edu,dc=au';
$uid = valid_data($_REQUEST["txtUid"]);
if ($uid=='avd652') {
$uidPass = mysql_escape_string($_REQUEST["txtUidPass"]); }
else {
$uidPass = valid_data_bslash($_REQUEST["txtUidPass"]);
}


$msg = "";

$port='636';
if (isset($uid) && trim($uid) == '') {
  $msg = "<b>Please provide a valid userID</b>";
}
if (isset($uidPass) && trim($uidPass) == '') {
  if ($msg != "") {
    $msg = "<b>Please provide a valid userID and password</b>";
  } else {
    $msg = "<b>Please provide a valid password</b>";
  }
}

/*ldap will bind anonymously, make sure we have some credentials*/
  $ldap = @ldap_connect($host,$port);
  if ((isset($ldap) && $ldap != '')) {
    /* Set the LDAP protocol version to 3*/
    /*#ldap_set_option ($ldap, LDAP_OPT_REFERRALS, 0);*/
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    /* search for the uid dn anonymously first, this will tell us if the uid exists */
  $ldap_result = @ldap_search($ldap, $ou.','.$baseDn, "uid=".$uid);
    if ($ldap_result != 0) {
      $entries = @ldap_get_entries($ldap, $ldap_result);
      $user_dn = $entries[0]['dn'];
      if (isset($user_dn)) {
        /* start TLS for secure authentication */
        #ldap_start_tls($ldap);

        /* bind as this user */
      $actv_conn = "";
        if (ldap_bind($ldap, $user_dn, $uidPass)) {
          $actv_conn = $ldap;
        }


       $grp_search = @ldap_search($actv_conn, $baseDn, "memberUid=".$uid); 
	  $grp_search2 = @ldap_search($actv_conn, $baseDn, "uid=".$uid); 
	  $grp_entry = ldap_get_entries($actv_conn, $grp_search); 
	  $grp_entry2 = ldap_get_entries($actv_conn, $grp_search2); 
	  $grp_arr = array();
	  
	  
	  	  foreach ($grp_entry as $grp) {
	    $grp_name = $grp["cn"][0];
	   
	    if ($grp_name == '') continue;
	    $grp_arr[] = $grp_name;
	     
	  }
	 

	             $_SESSION["group_id"]=$grp_arr;
 
        if ($actv_conn != "") {
        
        
      
       foreach ($grp_arr as $grp) {
	    
	    $_SESSION["pid_".session_id()]=$grp;
	   }

print_r ($grp_arr)."<br>";
echo "<br>";




$g_check=1;
 
     if ($g_check==1) {

$_SESSION["uid_".session_id()]=$uid;      
$d=@date("Y-m-d H:i:s");
$sid=session_id();
$usid=$_SESSION["uid_".session_id()] ;

$upid=$_SESSION["pid_".session_id()];



        $user_result1 = mysql_query("select count(table_id)  as cc from nci_metadata_general.web_admin where userid='$usid'");
	    $row1 = mysql_fetch_array($user_result1);
        if ($row1['cc']=='1') { 
        $_SESSION["uacat_".session_id()]='1';
        } else { 
	        $user_result2 = mysql_query("select count(table_id) as cc from nci_metadata_general.group_admin  where user_id='$usid'");
        	$row2 = mysql_fetch_array($user_result2);
        	if ($row2['cc']>0) { 
        	$_SESSION["uacat_".session_id()]='2';
		} else {
			$user_result3 = mysql_query("select count(table_id) as cc from nci_metadata_general.project_admin  where user_id='$usid'");
	                $row3 = mysql_fetch_array($user_result3);
        	        if ($row3['cc']>0) {
               		$_SESSION["uacat_".session_id()]='3';
                	} else {
				$user_result4 = mysql_query("select count(table_id) as cc from nci_metadata_general.project_user  where user_id='$usid'");
	                        $row4 = mysql_fetch_array($user_result4);
        	                if ($row4['cc']>0) {
                	        $_SESSION["uacat_".session_id()]='4';
				} else {
				$_SESSION["uacat_".session_id()]='5';
				}
                	}
	
		}
        }
              


    $ipaddr=$_SERVER['REMOTE_ADDR'];
    $dom=$_SERVER['SERVER_NAME'];

        insert_hist($usid,$sid,$ipaddr,$dom);


//echo $_SESSION["uacat_".session_id()]."<br>";
//echo $ipaddr."<br>";
//echo $dom."<br>";
//echo $usid."<br>";
//echo $sid."<br>";
//exit();



     header("Location: ../php/index.php");
 
    }

        else {
        
      
          $msg = "<b>No Project associated with this system</b>";}




        } else {
          $msg = "<b>Invalid credentials supplied</b>";
        }
      } else {
                $msg = "<b>User does not exist.</b>";
      }
      ldap_free_result($ldap_result);
    } else {
                $msg = "<b>Error occured while searching the LDAP server</b>";
 }
    ldap_close($ldap);
  } else {
        $msg = "<b>Cannot connect to the LDAP server at '.$host.'</b>";
  }
$_SESSION["msg_".session_id()] = $msg;
$referer = 'index.php';
$php_self = str_replace('auth_user.php', '', $_SERVER['PHP_SELF']);
?>
<script language='javascript'>

   window.location.href="/php/index.php";
</script>
<?
exit();
?>


