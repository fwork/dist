<?

$host=HOST;
$admin_db=ADMIN_DB;
$admin_db_user=ADMIN_DB_USER;
$admin_db_pass=ADMIN_DB_PASS;



// ************** MySQL  (Admin Database) ***************
// *************************************************

    $my_host = $host;
    $my_user = $admin_db_user;
    $mydb_name = $admin_db;
    $my_pass =$admin_db_pass;

 $db = @MYSQLi_connect($my_host, $my_user, $my_pass);
 @MYSQLi_select_db($mydb_name);
  
@define("db_conn_admin", $db);




// ************** for general databases ***************
// **********************************************



// ************** MySQL  ***************
    $my_host = "";
    $my_user = "";
    $mydb_name = "";
    $my_pass ="";

 $db = @MYSQLi_connect($my_host, $my_user, $my_pass);
 @MYSQLi_select_db($mydb_name);
  
@define("db_conn", $db);



// ************** Postgres  ***************

    $db_host = "";
    $db_user = "";
    $db_name = $prefix."_".$projname."_main";
    $db_pass ="";
    $connection=@pg_connect ("host=$db_host dbname=$db_name user=$db_user password=$db_pass")  ;
 
?>

