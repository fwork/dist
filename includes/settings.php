<?php

//********************
// * @file
// * Framework configuration file.
// *
// * IMPORTANT NOTE:
// * This file may have been set to read-only by the framework installation program.
//* If you make changes to this file, be sure to protect it again after making
// * your modifications. Failure to remove write permissions to this file is a
// * security risk.
// *
//********************



//** Host -- eg abc.com

@define("HOST", "");


//** Document Root -- eg /var/www/abc 

@define("DOC_ROOT", "");


//** One Level Up Document Root -- eg /var/www/ 

@define("UP_DOC_ROOT", "");



//** Admin Database settings
@define("ADMIN_DB", "");
@define("ADMIN_DB_USER", "");
@define("ADMIN_DB_PASS", "");
 


//** Setting all paths

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


 ?>