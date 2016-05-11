<?php


class site_class{



// ************** Site Init functions ***************

public function init() {

        @session_start();
	    @date_default_timezone_set('Australia/ACT');
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
        @include_once ($inc_path.'functions.php');
        @include_once($db_path.'db.php');
        $this->top_comments();
        $this->title();
        @include_once ($inc_path.'jscript_include.php');
        @include_once ($inc_path.'stylesheet_include.php');
        @include_once ($inc_path.'php_utilities.php');
        @include_once ($inc_path.'general_utilities.php');
        @include_once ($inc_path.'jscript_utilities.php');
        @include_once ($inc_path.'php_setvalues.php');
                                
}


// ************** Site Layout functions **************


public function top_comments() {
$ROOT_PATH = (dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$db_path=$ROOT_PATH."db/";
include_once($db_path.'db.php');
$admin_db=ADMIN_DB;

$res1=@MYSQLi_QUERY(db_conn,"select *  from ".$admin_db."_admin.admin_title_text") ;
$row=@MYSQLi_fetch_array($res1);
echo '<!--
// **************************************************************************
//
// === Copyright
//
// Copyright (c) All Rights Reserved
// Software : '.$row['cp_software'].'
// Version : '.$row['cp_version'].'
// Author : '.$row['cp_author'].'
// Created : '.$row['cp_datecreate'].'
//
//
// **************************************************************************
-->';
}





public function title() {
$admin_db=ADMIN_DB;
$res1=@MYSQLi_QUERY(db_conn,"select *  from ".$admin_db."_admin.admin_project_meta") ;
$row=@MYSQLi_fetch_array($res1);
echo '
<html<head>
<title>'.$row['title'].'</title>
<meta name="keywords" content="'.$row['tag_keyword'].'" />
<meta name="description" content="'.$row['tag_description'].'" />
<meta name="author" content="'.$row['tag_author'].'" />
<meta name="revised" content="'.$row['tag_revised'].'" />
<meta http-equiv="Content-Type" content="'.$row['tag_characterset'].'" />
<meta http-equiv="X-Frame-Options" content="deny">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
';
}








}
?>
