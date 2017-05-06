<?php
include("conn.php");
$id=$_GET['id'];
$status=$_GET['status'];
 if($status==0)
 {
  $sql="update page set status=1 where page_id='$id'";
  mysql_query($sql);
  header("location:page.php");
  }
  else if($status==1)
  {
    $sq="update category set status=0 where page_id='$id'";
   mysql_query($sq);
  header("location:page.php");
  }
  else
  {
   echo "error".mysql_error();
  }
?>