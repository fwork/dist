
<?php
$ROOT_PATH = dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR;
$db_path=$ROOT_PATH."db/";
$inc_path=$ROOT_PATH."includes/";
$upload_path=$ROOT_PATH."uploads/";
$license_path=$ROOT_PATH."license/";
$temp_path=$ROOT_PATH."temp/";
$log_path=$ROOT_PATH."logs/";
$docs_path=$ROOT_PATH."docs/";
$apps_path=$ROOT_PATH."apps/";
$conf_path=$ROOT_PATH."conf/";
$setup_path=$ROOT_PATH."setup/";


 
@define("PFX", "nci");
@define("PROJ", "sra");
@define("HOST", "genome-catalogue.nci.org.au");


@include_once($inc_path."sec_class.php");
$sec_class = new sec_class();

@include_once($inc_path."site_class.php");
$site_class = new site_class();

?>
