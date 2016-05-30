<?php
@include_once("autoload.php");
include_once($db_path."db.php");


$doi=($_REQUEST["doi"]);


$res1=@MYSQL_QUERY("select count(minting_id) as cc  from nci_doi_main.nci_doi where doi='$doi' ")   ;
                          $row=@MYSQL_fetch_array($res1);
                          $count_id = $row["cc"];
                           
        if ($count_id==0){
$rec_chk=0;
$msg="Record not Found";
  print("<caller_info>\n");
  printf("<rec_chk>%s</rec_chk>\n",      $rec_chk);
  printf("<msg>%s</msg>\n",      $msg);
  print("</caller_info>\n");
}

else
{
  $rec_chk=1;
     
$res1a=@MYSQL_QUERY("select minting_id as cc  from nci_doi_main.nci_doi where doi='$doi' ")   ;
$rowa=@MYSQL_fetch_array($res1a);
$mid=$rowa['cc']; 
$qry3=@MYSQL_query("Select * from nci_doi_main.titles  where minting_id='$mid'")   ;

  $row3=@MYSQL_fetch_array($qry3);
 
  printf("<?xml version=\"1.0\" ?>\n");
  printf("<rec_chk>%s</rec_chk>\n", $rec_chk);
  printf("<title>%s</title>\n", $row3['title']);
  printf("<title_type>%s</title_type>\n", $row3['title_type']);

  
  }
?>
