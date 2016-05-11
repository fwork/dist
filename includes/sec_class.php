<?php


class sec_class{


// ************** Check Login  ***************

public function check_login() {

        if ((!isset($_SESSION["uid_".session_id()]) || $_SESSION["uid_".session_id()] == '')) {
        $referer=($_SERVER['REQUEST_URI']);
        ?>
        <script language="Javascript">
        window.location.href = "../php/login.php?referer=<?=$referer?>";
        </script>
        <?
        exit();
        }

}



// ************** Check Single Session *************


function single_session () {

$admin_db=ADMIN_DB;
$sid=session_id();
$usid=$_SESSION["uid_".session_id()] ;

$res=MYSQLi_QUERY(db_conn,"select count(*) as cc from ".$admin_db."_admin.admin_current_login where userid='$usid' and session_id='$sid'") ;
$row=MYSQLi_fetch_array($res);
$cnt = $row["cc"];

/*
if ($cnt!=1 ){?>
<script>
alert('Multiple Session Detected ... \n\n\n Multiple session are not allowed ...');
window.location.href = "../php/logout.php";
</script>

<?}
*/}



// ************** Captcha  ***************


 


public function captcha_div() {

echo '<br><font size=2>';
echo '<input name="captcha" type="text">';
echo '&nbsp;&nbsp;<img src="captcha.php" /><br>';
echo '
<font size=2>Please enter the code
<br>';
}


public function captcha_check () {

if ($_SESSION['captcha']['code'] != valid_data($_POST['capcode'])) {
?>
<br><br><br>
<font color=#800000 size=3> Code Error!</font>   &nbsp;&nbsp;&nbsp;<font size=2>Please re-enter the code .....

<br><br><br><br><br>
<image src="../images/back.png" onclick="window.history.back()">
<br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<?
exit();
}


}







// ************** Session Nonce  ***************

public function get_nonce () {

 $nonce=hash("md5",rand().time().rand());
  $_SESSION['nonce']=$nonce;
}


public function save_nonce () {

$nonce=$_SESSION['nonce'];
echo '<input type="hidden" name="nonce" value="'.$nonce.'"/>';

}


public function check_nonce () {

 $post_nonce=$_POST['nonce'];
  $session_nonce=$_SESSION['nonce'];
  if($post_nonce==$session_nonce)
  {}else{?>
  <script>alert('Form Submission is not authorized. Please reneter the data again .....');</script>
  <script>window.history.back()</script>
<?
}
}










// ************** Session Expire  ***************


public function session_expire_div () {

echo '<div id="sessionTimeoutWarning" style="display: none"></div>';

}


public function session_expire_handler () {

if (!strstr($_SERVER["PHP_SELF"], "/php/")) die ("You are not allowed to include this file!");
if (check_includes_request_from(basename($_SERVER['SCRIPT_NAME']))==0){?>   <script>alert('Not a valid include request...');</script><? exit();}

?>
        <script type="text/javascript" src="../jscript/jquery-1.4.1.min.js"></script>
        <script type="text/javascript" src="../jscript/jquery-ui-1.8rc1.custom.min.js"></script>
        <!-- include smoothness jQueryUI theme -->
        <link rel="stylesheet" type="text/css" href="../jscript/jquery-ui-1.8rc1.custom.css">
        <!-- jQuery idletimer plugin http://paulirish.com/2009/jquery-idletimer-plugin/ -->
        <script type="text/javascript" src="../jscript/jquery.idletimer.js"></script>
        <script type="text/javascript">
        var idleTime = 600000; // number of miliseconds until the user is considered idle
        var initialSessionTimeoutMessage = 'Your session will expire in <span id="sessionTimeoutCountdown"></span>&nbsp;seconds.<br/><br />Click <b>OK</b> to continue your session.';
        var sessionTimeoutCountdownId = 'sessionTimeoutCountdown';
        var redirectAfter = 10; // number of seconds to wait before redirecting the user
        var redirectTo = '../php/logout.php'; // URL to relocate the user to once they have timed out
        var keepAliveURL = '../php/index.php'; // URL to call to keep the session alive
        var expiredMessage = 'Your session has expired. You are being logged out for security reasons.'; // message to show user when the countdown reaches 0
        var running = false; // var to check if the countdown is running
        var timer; // reference to the setInterval timer so it can be stopped
        $(document).ready(function() {
        // create the warning window and set autoOpen to false
        var sessionTimeoutWarningDialog = $("#sessionTimeoutWarning");
                $(sessionTimeoutWarningDialog).html(initialSessionTimeoutMessage);
        $(sessionTimeoutWarningDialog).dialog({
        title: 'Session Expiration Warning',
        autoOpen: false, // set this to false so we can manually open it
        closeOnEscape: false,
        draggable: false,
        width: 460,
        minHeight: 50,
        modal: true,
        beforeclose: function() { // bind to beforeclose so if the user clicks on the "X" or escape to close the dialog, it will work too
        // stop the timer
        clearInterval(timer);
        // stop countdown
        running = false;
        // ajax call to keep the server-side session alive
        $.ajax({
        url: keepAliveURL,
        async: false
        });
                },
        buttons: {
        OK: function() {
        // close dialog
        $(this).dialog('close');
        }
        },
        resizable: false,
        open: function() {
        // scrollbar fix for IE
        $('body').css('overflow','hidden');
        },
        close: function() {
        // reset overflow
        $('body').css('overflow','auto');
        }
        




       }); // end of dialog
        // start the idle timer
        $.idleTimer(idleTime);
        // bind to idleTimer's idle.idleTimer event
        $(document).bind("idle.idleTimer", function(){
        // if the user is idle and a countdown isn't already running
        if($.data(document,'idleTimer') === 'idle' && !running){
        var counter = redirectAfter;
        running = true;
        // intialisze timer
        $('#'+sessionTimeoutCountdownId).html(redirectAfter);
        // open dialog
        $(sessionTimeoutWarningDialog).dialog('open');
        // create a timer that runs every second
        timer = setInterval(function(){
        counter -= 1;
        // if the counter is 0, redirect the user
        if(counter === 0) {
        $(sessionTimeoutWarningDialog).html(expiredMessage);
        $(sessionTimeoutWarningDialog).dialog('disable');
        window.location = redirectTo;
              } else {
        $('#'+sessionTimeoutCountdownId).html(counter);
        };
        }, 1000);
        };
        });
        });
        </script>
<?

}







// ************** Site Secret ***************



public function session_secret_handler () {

        if (!strstr($_SERVER["PHP_SELF"], "/php/")) die ("You are not allowed to include this file!");

        if (check_includes_request_from(basename($_SERVER['SCRIPT_NAME']))==0){?>   <script>alert('Not a valid include request...');</script><? exit();}

        // check session secret
        if (!isset($_COOKIE['session_secret'], $_SESSION['session_secret']) || hash('sha256', $_COOKIE['session_secret']) != $_SESSION['session_secret']) {
        ?><script>
        alert('Session is not authorized. Please Login again .....');
        </script>
        <?session_destroy();?>
        <script language="Javascript">
        window.location.href = "login.php";
        </script> <?
        }


}



public function get_session_secret_handler () {

// generate session secret, store it in a cookie and store its hash in the session
$secret =$this->secure_random(16);
$session_cookie_params = session_get_cookie_params();

setcookie('session_secret', $secret, $session_cookie_params['lifetime'], $session_cookie_params['path'], $session_cookie_params['domain'], $session_cookie_params['secure'], $session_cookie_params['httponly']);
$_SESSION['session_secret'] = hash('sha256', $secret);

}

function secure_random($num_bytes) {
    if (!is_int($num_bytes) || $num_bytes <= 0)
        throw new Exception('Argument must be a positive integer.');

    if (function_exists('openssl_random_pseudo_bytes'))
        $raw_random = openssl_random_pseudo_bytes($num_bytes);
    elseif (function_exists('mcrypt_create_iv'))
        $raw_random = mcrypt_create_iv($num_bytes, MCRYPT_DEV_URANDOM);
    else
        throw new Exception('OpenSSL or Mcrypt extension required.');

    return bin2hex($raw_random);
}

















}
?>
