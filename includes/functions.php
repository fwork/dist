<?


// ********* View / Retrieve File  ***************

function retrieve_file ($filename,$folder_from) {

$up_doc_root=UP_DOC_ROOT;
if ($up_doc_root=='/') { $ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR; } else { $ROOT_PATH=$up_doc_root; }
$db_path=$ROOT_PATH."db/";
$inc_path=$ROOT_PATH."includes/";
$upload_path=$ROOT_PATH."uploads/";
$license_path=$ROOT_PATH."license/";
$temp_path=$ROOT_PATH."temp/";
$log_path=$ROOT_PATH."logs/";
$docs_path=$ROOT_PATH."docs/";
$apps_path=$ROOT_PATH."apps/";
$conf_path=$ROOT_PATH."conf/";
 

// folder_from will be upload,docs,temp ....
switch ($folder_from) {
    case "upload":
        $file=$upload_path.$filename;
        break;
    case "docs":
        $file=$docs_path.$filename;
        break;
    case "logs":
        $file=$log_path.$filename;
        break;
    case "temp":
        $file=$temp_path.$filename;
        break;
    case "apps":
        $file=$apps_path.$filename;
        break;
    case "conf":
        $file=$conf_path.$filename;
        break;
    case "setup":
        $file=$setup_path.$filename;
        break;
            case "includes":
        $file=$inc_path.$filename;
        break;
}

 
    header('Content-Type: application/octet-stream');
    header("Content-Type: application/force-download");
    header('Content-Type: application/pdf');
    header("Content-Transfer-Encoding: Binary");
    header('Accept-Ranges: bytes');  // For download resume
    header('Content-Disposition: attachment; filename=' . urlencode(basename($file)));
    // header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;


}





// set_error_handler('ts_error_handler');



// ********* Error Handler  ***************

function ts_error_handler($number, $message, $file, $line, $vars)

{
    $email = "
        <p>An error ($number) occurred on line
        <strong>$line</strong> and in the <strong>file: $file.</strong>
        <p> $message </p>";

    //$email .= "<pre>" . print_r($vars, 1) . "</pre>";

    $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Email the error to someone...
    @error_log($email, 1, 'raokashif@yahoo.com', $headers);

    if ( ($number !== E_NOTICE) && ($number < 2048) ) {
        die("There was an error. Please try again later.");
    }
}







// ********* Check Site License  ***************


function check_license () {
$admin_db=ADMIN_DB;

$ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$license_path=$ROOT_PATH."license/";

$array = explode("\n", file_get_contents($license_path.'framework_license.txt'));
$local_text=($array[1]);

$res=MYSQL_QUERY("select license_key  from ".$admin_db.".admin_license",db_conn_admin) ;
$row=@MYSQL_fetch_array($res);
$db_key = $row["license_key"];
if (ltrim(rtrim($local_text))!=ltrim(rtrim($db_key))){?>
<script>
alert1_basic('Not a valid license...');
</script>
<?exit();
}

}





// ********* Encrypt/Decrypt String  ***************

function encrypt($s) {
    return str_replace(array('+', '/'), array('-', '_'), base64_encode($s));
}

function decrypt($s) {
    return base64_decode(str_replace(array('-', '_'), array('+', '/'), $s));
}


// ********* Include/Main files check  ***************


function check_includes_file_exist ($str) {
$admin_db=ADMIN_DB;


$res1=MYSQL_QUERY("select include_filename  from ".$admin_db.".admin_site_includes",db_conn_admin) ;
while ($row=@MYSQL_fetch_array($res1)){
$os[] = $row["include_filename"];
}
if (in_array($str.".php",$os)) {
return $str;}
else { return null;}
}



function check_includes_request_from ($str) {
$admin_db=ADMIN_DB;

$res1=@MYSQL_QUERY("select main_filename  from ".$admin_db.".admin_site_main",db_conn_admin) ;
while ($row=@MYSQL_fetch_array($res1)){
$os[] = $row["main_filename"];
}
if (@in_array($str,$os)) {
return 1;}
else { return 0;}
}





// ********* Validate String  ***************

function valid_data($string) {
 $str=(preg_replace('/"|;|,|%|>|<|[^0-9 A-Z a-z _.-]/','',strip_tags($string,'')));
 $str=data_check($str);
return clean_input($str);
}


function clean_input($data)
{
        // Fix &entity\n;
        $data = str_replace(array('&amp;','&lt;','&gt;'), array('&amp;amp;','&amp;lt;','&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

                $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        return $data;
}



function data_check($string) {
 return  str_replace(array('\r', '\n'), '', $string); 
}
function valid_data_bslash($string) {
 $string=data_check($string); 
 return  (strip_tags($string,''));
}



// ********* Insert User Login History  ***************

function insert_hist ($usid,$sid,$ipaddr,$domain) {
$d=date("Y-m-d H:i:s");
$admin_db=ADMIN_DB;

$qry=@MYSQL_query("Insert into ".$admin_db.".admin_login_history (userid,date_time,session_id,ip_addr,domain) values ('$usid','$d','$sid','$ipaddr','$domain')",db_conn_admin);
$qry2=@MYSQL_query("delete from ".$admin_db.".admin_current_login where userid='$usid' ",db_conn_admin);
$qry3=@MYSQL_query("Insert into ".$admin_db.".admin_current_login (userid,date_time,session_id,ip_addr) values ('$usid','$d','$sid','$ipaddr')",db_conn_admin);

}




  // ********* Mysql database -  fixing database tables***************


 function fixTables($dbname) {
 $result = mysql_list_tables($dbname) or die(mysql_error());
 while ($row = mysql_fetch_row($result)) {
 @MYSQL_query("REPAIR TABLE $row[0]",db_conn_admin);
 @MYSQL_query("OPTIMIZE TABLE $row[0]",db_conn_admin);
 }
 }

  // ********* Mysql database -  fixing database tables***************

/*$form_data = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'address1' => $address1,
    'address2' => $address2,
    'address3' => $address3,
    'postcode' => $postcode,
    'tel' => $tel,
    'mobile' => $mobile,
    'website' => $website,
    'contact_method' => $contact_method,
    'subject' => $subject,
    'message' => $message,
    'how_you_found_us' => $how_you_found_us,
    'time' => time()
);


function dbRowInsert($table_name, $form_data)
{
    // retrieve the keys of the array (column titles)
    $fields = @array_keys($form_data);

    // build the query
    $sql = "INSERT INTO ".$table_name."
    (`".implode('`,`', $fields)."`)
    VALUES('".implode("','", $form_data)."')";

    // run and return the query result resource
    return @MYSQL_query($sql,db_conn_admin);
}


// the where clause is left optional incase the user wants to delete every row!
function dbRowDelete($table_name, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add keyword
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // build the query
    $sql = "DELETE FROM ".$table_name.$whereSQL;

    // run and return the query result resource
    return @MYSQL_query($sql,db_conn_admin);
}



// again where clause is left optional
function dbRowUpdate($table_name, $form_data, $where_clause='')
{
    // check for optional where clause
    $whereSQL = '';
    if(!empty($where_clause))
    {
        // check to see if the 'where' keyword exists
        if(substr(strtoupper(trim($where_clause)), 0, 5) != 'WHERE')
        {
            // not found, add key word
            $whereSQL = " WHERE ".$where_clause;
        } else
        {
            $whereSQL = " ".trim($where_clause);
        }
    }
    // start the actual SQL statement
    $sql = "UPDATE ".$table_name." SET ";

    // loop and build the column /
    $sets = array();
    foreach($form_data as $column => $value)
    {
         $sets[] = "`".$column."` = '".$value."'";
    }
    $sql .= implode(', ', $sets);

    // append the where statement
    $sql .= $whereSQL;

    // run and return the query result
    return @MYSQL_query($sql,db_conn_admin);
}

*/






// ********* Password Hashing ***************


function setPassword($password)
  {
     
    $password_salt = generateRandomSalt();
    $password = sha1($password . $password_salt);
  }

   function generateRandomSalt()
  {
    return openssl_random_pseudo_bytes(16);
  }


function checkPassword($password,$password_salt)
  {
    $hashed = sha1($password . $password_salt);
    return ($hashed);
  }




// ********* Memory Usage by PHP Script ***************

 function mem_usage() { 
  $mem=@memory_get_usage();
  return $mem;
 }
 
 function mem_usage_peak() { 
  $mem=@memory_get_peak_usage();
  return $mem;
 }


// ********* CPU Usage by PHP Script ***************

 function cpu_usage() { 
  $cpu=@getrusage();
  return $cpu;
 }
 
  
 
   
 
 
 
 
 
  // ********* Encode Email with given text ***************

 
 function encode_email($email='info@domain.com', $linkText='Contact Us', $attrs ='class="emailencoder"' )
{
$email = str_replace('@', '&#64;', $email);
$email = str_replace('.', '&#46;', $email);
$email = str_split($email, 5);

$linkText = str_replace('@', '&#64;', $linkText);
$linkText = str_replace('.', '&#46;', $linkText);
$linkText = str_split($linkText, 5);

$part1 = '<a href="ma';
$part2 = 'ilto&#58;';
$part3 = '" '. $attrs .' >';
$part4 = '</a>';

$encoded = '<script type="text/javascript">';
$encoded .= "document.write('$part1');";
$encoded .= "document.write('$part2');";
foreach($email as $e)
{
$encoded .= "document.write('$e');";
}
$encoded .= "document.write('$part3');";
foreach($linkText as $l)
{
$encoded .= "document.write('$l');";
}
$encoded .= "document.write('$part4');";
$encoded .= '</script>';
return $encoded;
}

 
 
 
  // ********* Validate Email Address ***************
  
function is_valid_email($email, $test_mx = false)
{
if(eregi("^([_a-z0-9-]+)(\.[_a-z0-9-]+)*@([a-z0-9-]+)(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
if($test_mx)
{
list($username, $domain) = split("@", $email);
return getmxrr($domain, $mxrecords);
}
else
return true;
else
return false;
} 
 
 
 
 // ********* Create Zip File  ***************

 
 function create_zip($files = array(),$destination = '',$overwrite = false) {
 //if the zip file already exists and overwrite is false, return false
 if(file_exists($destination) && !$overwrite) { return false; }
 //vars
 $valid_files = array();
 //if files were passed in...
 if(is_array($files)) {
 //cycle through each file
 foreach($files as $file) {
 //make sure the file exists
 if(file_exists($file)) {
 $valid_files[] = $file;
 }
 }
 }
 //if we have good files...
 if(count($valid_files)) {
 //create the archive
 $zip = new ZipArchive();
 if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
 return false;
 }
 //add the files
 foreach($valid_files as $file) {
 $zip->addFile($file,$file);
 }
 //debug
 //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
 
 //close the zip -- done!
 $zip->close();
 
 //check to make sure the file exists
 return file_exists($destination);
 }
 else
 {
 return false;
 }
 }
/***** Example Usage ****/
//$files=array('file1.jpg', 'file2.jpg', 'file3.gif');
//create_zip($files, 'myzipfile.zip', true);
 
 
 
 
 
 
 
 
  // ********* Unzip Zip File  ***************

function unzip_file($file, $destination){
	// create object
	$zip = new ZipArchive() ;
	// open archive
	if ($zip->open($file) !== TRUE) {
		die ('Could not open archive');
	}
	// extract contents to destination directory
	$zip->extractTo($destination);
	// close archive
	$zip->close();
	echo 'Archive extracted to directory';
}


// ********* Resize Images  ***************


function resize_image($filename, $tmpname, $xmax, $ymax)
{
	$ext = explode(".", $filename);
	$ext = $ext[count($ext)-1];

	if($ext == "jpg" || $ext == "jpeg")
		$im = imagecreatefromjpeg($tmpname);
	elseif($ext == "png")
		$im = imagecreatefrompng($tmpname);
	elseif($ext == "gif")
		$im = imagecreatefromgif($tmpname);
	
	$x = imagesx($im);
	$y = imagesy($im);
	
	if($x <= $xmax && $y <= $ymax)
		return $im;

	if($x >= $y) {
		$newx = $xmax;
		$newy = $newx * $y / $x;
	}
	else {
		$newy = $ymax;
		$newx = $x / $y * $newy;
	}
	
	$im2 = imagecreatetruecolor($newx, $newy);
	imagecopyresized($im2, $im, 0, 0, 0, 0, floor($newx), floor($newy), $x, $y);
	return $im2; 
}







// ********* Add th,st,nd or rd to the end of a number  ***************


 function ordinal($cdnl){ 
    $test_c = abs($cdnl) % 10; 
    $ext = ((abs($cdnl) %100 < 21 && abs($cdnl) %100 > 4) ? 'th' 
            : (($test_c < 4) ? ($test_c < 3) ? ($test_c < 2) ? ($test_c < 1) 
            ? 'th' : 'st' : 'nd' : 'rd' : 'th')); 
    return $cdnl.$ext; 
}
// Usage : echo ordinal($number); //output is 10th



// ********* Saving Logs  ***************

 function log_save1($string1,$string2) {
$admin_db=ADMIN_DB;

  $res1=@MYSQL_QUERY("select max(log_id) as cc  from ".$admin_db.".admin_error_log",db_conn_admin) ;
                          $row=@MYSQL_fetch_array($res1);
                          $max_id = $row["cc"];
 $max_id=$max_id+1;
 $d=@date("Y-m-d H:i:s");
  $qry=@MYSQL_query("Insert into ".$admin_db.".admin_error_log (log_id,date_time,userid,text) values ($max_id,'$d','$string1','$string2')",db_conn_admin);
 }
 

 




////////////////////////////    Send Email Short Version   ////////////
function email_send_short($msg,$sub,$event) {
$d=@date("d/m/y");
$t=@date("h:i:s");
$yemail="datacollections@nf.nci.org.au";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From: datacollections@nf.nci.org.au";
$to_email='kashif.gohar@anu.edu.au';
mail($to_email,$sub,$msg,$headers);

$to_email='jingbo.wang@anu.edu.au';
mail($to_email,$sub,$msg,$headers);

}

 
 
 // ********* Send Email  ***************


 
////////////////////////////    Send Email    ////////////
function email_send($msg,$sub,$event) {
$d=@date("d/m/y");
$t=@date("h:i:s");
$yemail="datacollections@nf.nci.org.au";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .="From:".$yemail;

$txt="<html><head></head><body>
<center><center>
<br>
        <table border=0 width='700' cellspacing='1' id='table3' style='border: 1px solid #6393DF;'>
<tr><td background='http://130.56.243.97/software/images/email_header.png' height='78' width='700'> </td></tr>
<tr><td align=left>

<table border=0 width=650 >
<tr><td width='100%' align=left>
</center>
<br><font size=1 face=arial>
".$d."
   <br><br>
Dear NCI Users
   <br><br><br>

<b>Sub: &nbsp;&nbsp;".$sub."
<br><br>
".$msg."</b>

   <br><br><br><br>
Best regards
   <br>
NCI User Services
   <br><br><br></font>
</td></tr></table>

</td></tr>
<tr>
<td width='600' align=right>
<table border=0 width='20%'>
<tr>
<td width='10%' align=center><a href='https://www.facebook.com/NCIAustralia' target='_blank'><img src='http://130.56.243.97/software/images/img-fb.png' alt='NCI'></a></td>
<td width='10%' align=center><a href='https://twitter.com/NCInews' target='_blank'><img src='http://130.56.243.97/software/images/img-tw.png' alt='NCI'></a></td>
<td width='10%' align=center><a href='https://www.youtube.com/user/NCINationalFacility' target='_blank'><img src='http://130.56.243.97/software/images/img-yt.png' alt='NCI'></a></td>
</tr></table>
</td></tr>
</table>
<table border=0  width='700' cellspacing='1'><tr><td align=left>
<font size=1>(C) 2015 National Computational Infrastructure<br>
Stay informed. If you would like to be informed about research supported by NCI.<br>
</td></tr></table><br><br>
<br><br></body>
</html>
 ";
$usid=$_SESSION["uid_".session_id()] ;

if ($event==1) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='Data Management Plan - Addition'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


if ($event==2) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='Data Management Plan - Updation'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


if ($event==3) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='Admin - Server Status Check'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}



if ($event==4) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='Admin - Geonetwork Status Check'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


if ($event==5) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='Admin - Harvesting Routine Check'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


if ($event==6) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='DOI - Addition'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


if ($event==7) {
$res1=@PG_QUERY("select echeck,email from email_alert where userid='$usid' and event='DOI - Addition(Manual)'") ;
$row=@pg_fetch_array($res1);
if ($row['echeck']=='on') {
$to_email=$row['email'];
mail($to_email,$sub,$txt,$headers);}
}


}







// ********* Date / Time Functions  ***************


// from 26/12/2016 -- 2016-12-26

	function saved_date_format($str) {
  list($mday,$mmonth, $myear) = split('[/.-]', $str);

  if (strlen($mday)==1){
    $mday="0".$mday;
} 

if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 
 
   $ddate=$myear."-".$mmonth."-".$mday;

      return $ddate;

}


// from 2016/12/26 ---  26/23/2016

function retrieve_date_format($str) {
  list($myear,$mmonth, $mday) = split('[/.-]', $str);
  if (strlen($mday)==1){
    $mday="0".$mday;
} 
if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 
   $ddate=$mday."/".$mmonth."/".$myear;
      return $ddate;
}



// from 2016/12/26 ---  26/12/16

function retrieve_date_small_format($str) {
  list($myear,$mmonth, $mday) = split('[/.-]', $str);
  if (strlen($mday)==1){
    $mday="0".$mday;
} 
if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 
   $ddate=$mday."/".$mmonth."/".substr($myear,2,2);
      return $ddate;
}


// from 2016/12/26 ---  26-12-2016

function format_retr_date_m_M($str) {
  list($myear,$mmonth, $mday) = split('[/.-]', $str);
  if (strlen($mday)==1){
    $mday="0".$mday;
} 
if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 
if ($mmonth=='01') {
	$mmonth="Jan"; }
elseif ($mmonth=='02') {
	$mmonth="Feb"; }
elseif ($mmonth=='03') {
	$mmonth="Mar"; }
elseif ($mmonth=='04') {
	$mmonth="Apr"; }
elseif ($mmonth=='05') {
	$mmonth="May"; }
elseif ($mmonth=='06') {
	$mmonth="Jun"; }
elseif ($mmonth=='07') {
	$mmonth="Jul"; }
elseif ($mmonth=='08') {
	$mmonth="Aug"; }
elseif ($mmonth=='09') {
	$mmonth="Sep"; }
elseif ($mmonth=='10') {
	$mmonth="Oct"; }
elseif ($mmonth=='11') {
	$mmonth="Nov"; }
elseif ($mmonth=='12') {
	$mmonth="Dec"; }
   $ddate=$mday."-".$mmonth."-".$myear;
      return $ddate;
}


// from 2016/12/26 ---  2106-12-26

function saved_date_M_m($str) {
  list($mday,$mmonth, $myear) = split('[/.-]', $str);
  if (strlen($mday)==1){
    $mday="0".$mday;
} 
if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 

if ($mmonth=='Jan') {
	$mmonth="01"; }
elseif ($mmonth=='Feb') {
	$mmonth="02"; }
elseif ($mmonth=='Mar') {
	$mmonth="03"; }
elseif ($mmonth=='Apr') {
	$mmonth="04"; }
elseif ($mmonth=='May') {
	$mmonth="05"; }
elseif ($mmonth=='Jun') {
	$mmonth="06"; }
elseif ($mmonth=='Jul') {
	$mmonth="07"; }
elseif ($mmonth=='Aug') {
	$mmonth="08"; }
elseif ($mmonth=='Sep') {
	$mmonth="09"; }
elseif ($mmonth=='Oct') {
	$mmonth="10"; }
elseif ($mmonth=='Nov') {
	$mmonth="11"; }
elseif ($mmonth=='Dec') {
	$mmonth="12"; }
   $ddate=$myear."-".$mmonth."-".$mday;
      return $ddate;
}


// from 2016/12/26 ---  12-26-2016 00:00:0

function java_format($str) {
  list($myear,$mmonth, $mday) = split('[/.-]', $str);
  if (strlen($mday)==1){
    $mday="0".$mday;
} 
if (strlen($mmonth)==1){
    $mmonth="0".$mmonth;
} 
if ($mmonth=='01') {
	$mmonth="January"; }
elseif ($mmonth=='02') {
	$mmonth="February"; }
elseif ($mmonth=='03') {
	$mmonth="March"; }
elseif ($mmonth=='04') {
	$mmonth="April"; }
elseif ($mmonth=='05') {
	$mmonth="May"; }
elseif ($mmonth=='06') {
	$mmonth="June"; }
elseif ($mmonth=='07') {
	$mmonth="July"; }
elseif ($mmonth=='08') {
	$mmonth="August"; }
elseif ($mmonth=='09') {
	$mmonth="September"; }
elseif ($mmonth=='10') {
	$mmonth="October"; }
elseif ($mmonth=='11') {
	$mmonth="November"; }
elseif ($mmonth=='12') {
	$mmonth="December"; }
   $ddate=$mmonth." ".$mday.",".$myear." 00:00:00";
      return $ddate;
}



// from 26/12/2016 ---  12-26-2016 00:00:0

function java_format_second($str) {
  list($mday,$mmonth, $myear) = split('[/.-]', $str);
if ($mmonth=='Jan') {
	$mmonth="January"; }
elseif ($mmonth=='Feb') {
	$mmonth="February"; }
elseif ($mmonth=='Mar') {
	$mmonth="March"; }
elseif ($mmonth=='Apr') {
	$mmonth="April"; }
elseif ($mmonth=='May') {
	$mmonth="May"; }
elseif ($mmonth=='Jun') {
	$mmonth="June"; }
elseif ($mmonth=='Jul') {
	$mmonth="July"; }
elseif ($mmonth=='Aug') {
	$mmonth="August"; }
elseif ($mmonth=='Sep') {
	$mmonth="September"; }
elseif ($mmonth=='Oct') {
	$mmonth="October"; }
elseif ($mmonth=='Nov') {
	$mmonth="November"; }
elseif ($mmonth=='Dec') {
	$mmonth="December"; }
   $ddate=$mmonth." ".$mday.",".$myear." 00:00:00";
      return $ddate;
}





function secsToTime($totalSecs) {
  $time = "";
  $hours = (int) ((double)$totalSecs/(60*60));
  $time .= ($hours < 10) ? "0%d:" : "%d:";
  $totalSecs -= (double)((double)$hours * 60*60);
  $mins = (int) ($totalSecs/60);
  $time .= ($mins < 10) ? "0%d:" : "%d:";
  $secs = (int) ((int)$totalSecs - ($mins*60));
  $time .= ($secs < 10) ? "0%d" : "%d";
  return sprintf($time, $hours, $mins, $secs);
}

function timeToSecs($time) {
  if (time == '') {
    return 0;
  }
  $index = strpos($time, ":");
  $hours = intval(substr($time, 0, $index));
  $mins  = intval(substr($time, $index+1, 2));
  $secs  = intval(substr($time, $index+4));
  return ((float)($hours*60*60)+($mins*60)+$secs);
}

function getYear($date) {
  if ($date == '') {
    return "";
  }
  return (int)substr($date, 0, 4);
}

function getMonth($date) {
  if ($date == '') {
    return "";
  }
  $index = strpos($date, "-");
  $month = intval(substr($date, $index+1, 2));
  if ($month == 0)
    return "00";
  else if ($month <10)
    return "0".$month;
  else
    return $month;
}

function getDay($date) {
  if ($date == '') {
    return "";
  }
  $index = strpos($date, "-");
  $day = intval(substr($date, $index+4, 2));
  if ($day == 0)
    return "00";
  else if ($day <10)
    return "0".$day;
  else
    return $day;
}

function getDateHours($time) {
  if ($time == '') {
    return "";
  }
  $index = strpos($time, ":");

  $hours = intval(substr($time, $index-2, $index));
  if ($hours == 0)
    return "00";
  else if ($hours <10)
    return "0".$hours;
  else
    return $hours;
}

function getHours($time) {
  if ($time == '') {
    return "";
  }
  $index = strpos($time, ":");
  $hours = intval(substr($time, 0, $index));
  if ($hours == 0)
    return "00";
  else if ($hours <10)
    return "0".$hours;
  else
    return $hours;
}

function getMins($time) {
  if ($time == '') {
    return "";
  }
  $index = strpos($time, ":");
  $mins = intval(substr($time, $index+1, 2));
  if ($mins == 0)
    return "00";
  else if ($mins <10)
    return "0".$mins;
  else
    return $mins;
}

function getSecs($time) {
  if ($time == '') {
    return "";
  }
  $index = strpos($time, ":");
  $secs = intval(substr($time, $index+4));
  if ($secs == 0)
    return "00";
  else if ($secs <10)
    return "0".$secs;
  else
    return $secs;
}




// ********* Unit Conversion  ***************


function getAppropMemUnit($memunit, $mem) {
  
  if (strcmp($memunit, "kb") == 0) {
    return sprintf("%0.1fkb", ($mem/1024));
  } else if (strcmp($memunit, "mb") == 0) {
    return sprintf("%0.1fmb", ($mem/(1024*1024)));
  } else if (strcmp($memunit, "gb") == 0) {
    return sprintf("%0.1fgb", ($mem/(1024*1024*1024)));
  }
}

function getAppropUnit($mem) {
  if ((int)($mem/(1024*1024*1024)) != 0) {
    return "gb";
  } else if ((int)($mem/(1024*1024)) != 0) {
    return "mb";
  } else if ((int)($mem/(1024)) != 0) {
    return "kb";
  }  
}

function getInBytes($val) {
  if (substr_count($val, "gb") == 1) {
    return (intval($val))*1024*1024*1024;
  } else if (substr_count($val, "mb") == 1) {
    return (intval($val))*1024*1024;
  } else if (substr_count($val, "b") == 1) {
    return intval($val);
  }
}

function getMemUnit($val) {
  if (substr_count($val, "gb") == 1) {
    return "gb";
  } else if (substr_count($val, "mb") == 1) {
    return "mb";
  } else if (substr_count($val, "b") == 1) {
    return "b";
  } else if (substr_count($val, "perc") == 1) {
    return "%";
  } else {
    return "b";
  }
}



// ********* Folder Functions  ***************


function GetFolderSize($d ="." ) {
 
    $h = @opendir($d);
    if($h==0)return 0;

    while ($f=@readdir($h)){
        if ( $f!= "..") {
            $sf+=@filesize($nd=$d."/".$f);
            if($f!="."&&is_dir($nd)){
                $sf+=GetFolderSize ($nd);
            }
        }
    }
    @closedir($h);
    return $sf ;
}
 
 
 
 
 function GetFileSize($file) {
     return filesize($file) . ' bytes';
}


 function create_folder($folder_name) {

if (!file_exists($folder_name)) {
    mkdir($folder_name, 0777, true);
}
 }




function is_emtpy_dir($dirname){
  // Returns true if $dirname is a directory and it is empty
  // Assume it is not a directory
  $result=true;
  if(is_dir($dirname)){
    $handle = opendir($dirname);
    while(( $name = readdir($handle)) !== false) {
      // directory not empty
      if ($name!= "." && $name !=".."){ 
	$result=false;    
	break;
      }
    }
    closedir($handle);
  }
  return $result; 
}





function num_files($directory='.'){
    if ($handle = @opendir($directory)) {
        $numFiles = 0;
        while (false !== ($file = @readdir($handle))) {
            if ($file != "." && $file != "..") {
                $numFiles++;
            }
        }
        @closedir($handle);
        return $numFiles;
    }
}
 
function deltree($f) {
  if (is_dir($f)) {
    foreach(glob($f.'/*') as $sf) {
      if (is_dir($sf) && !is_link($sf)) {
        @deltree($sf);
        @rmdir($sf);
         
      } else {
        @unlink($sf);
      }  
    }  
  }

  @rmdir($f);
}


     
    
// ********* View Image file  ***************

function view_image($file) {    
    
  header('Content-Type: image/jpeg');
    header('Content-Length: ' . filesize($file));
    echo file_get_contents($file);
    
    }
    
         
    
    
// ********* Image Function  ***************


function imageCompression($imgfile="",$thumbsize=0,$savePath=NULL) {
$img_type=substr($imgfile, -3, 3);  

        list($width,$height)=getimagesize($imgfile);
    /* The width and the height of the image also the getimagesize retrieve other information as well   */
    
    @$imgratio=$width/$height; 
    /*
    To compress the image we will calculate the ration 
    For eg. if the image width=700 and the height = 921 then the ration is 0.77...
    if means the image must be compression from its height and the width is based on its height
    so the newheight = thumbsize and the newwidth is thumbsize*0.77...
    */
   
   
   
   if ($width<500 and $height<600) {
   $newwidth=$width;
   $newheight=$height;
   
   }
   
   else if ($imgratio>1) {
        $newwidth=$thumbsize;
        $newheight=$thumbsize/$imgratio;
    } else {
        $newheight=$thumbsize;       
        $newwidth=$thumbsize*$imgratio;
    }
    
   
    $thumb=@imagecreatetruecolor($newwidth,$newheight); // Making a new true color image
    
      if ($img_type=='gif') {
   	$source=imagecreatefromgif($imgfile); // Now it will create a new image from the source
   @imagecopyresampled($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
    @imagegif($thumb,$savePath,100);
   } else if ($img_type=='jpg') {
   	$source=imagecreatefromjpeg($imgfile); // Now it will create a new image from the source
    @imagecopyresampled($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
    @imagejpeg($thumb,$savePath,100);
   } else if ($img_type=='jpeg') {
   	$source=imagecreatefromjpeg($imgfile); // Now it will create a new image from the source
    @imagecopyresampled($thumb,$source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
    @imagejpeg($thumb,$savePath,100);
   } else {
     
   }
 
    /*
    Out put of image 
    if the $savePath is null then it will display the image in the browser
    */
    @imagedestroy($thumb);
    /*
        Destroy the image
    */
   
}



// ********* Check Array Exist  ***************


function contains_array($value){
        if(is_array($value)) {
          return true;
    }
    return false;
}



 













?>
