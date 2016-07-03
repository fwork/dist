<?
$server=($_SERVER['SCRIPT_NAME']);


if (!strstr($_SERVER["PHP_SELF"], "/php/")) die ("You are not allowed to include this file!");

if (check_includes_request_from(basename($_SERVER['SCRIPT_NAME']))==0){?>   <script>alert('Not a valid include request...');</script><? exit();}

?>


// include here .......