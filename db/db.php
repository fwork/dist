<?
$prefix=PFX;
$projname=PROJ;

// ************** MySQL  ***************
    $my_host = "";
    $my_user = "";
    $mydb_name = "";
    $my_pass ="";

 $db = @MYSQLi_connect($my_host, $my_user, $my_pass);
 @MYSQLi_select_db($prefix."_".$projname."_main");
  
@define("db_conn", $db);



// ************** Postgres  ***************

    $db_host = "";
    $db_user = "";
    $db_name = $prefix."_".$projname."_main";
    $db_pass ="";
    $connection=@pg_connect ("host=$db_host dbname=$db_name user=$db_user password=$db_pass")  ;
 
?>

