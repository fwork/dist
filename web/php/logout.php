
<?php

ini_set("session.gc_maxlifetime", "1800");

@session_start(); 

$uid = $_SESSION["uid_".session_id()];

unset($_SESSION["uid_".session_id()]);

unset(  $_SESSION["utype_".session_id()]);

unset(  $_SESSION["uacat_".session_id()]);
 
@session_unset();
@session_destroy();

// ask client to delete the session cookie
$session_cookie_params = session_get_cookie_params();

 
@setcookie(session_name(), '', time() - 24 * 3600, $session_cookie_params['path'], $session_cookie_params['domain'], $session_cookie_params['secure'], $session_cookie_params['httponly']);

// clear $_SESSION array
$_SESSION = array(); 


@header("Location: ../php/index.php");

?>
