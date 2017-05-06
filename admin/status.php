<?php
include("conn.php");
$id=$_GET['id'];
$status=$_GET['status'];
 if($status==0)
 {
  $sql="update category set status=1 where id='$id'";
  mysql_query($sql);
  header("location:category.php");
  }
  else if($status==1)
  {
    $sq="update category set status=0 where id='$id'";
   mysql_query($sq);
  header("location:category.php");
  }
  else
  {
   echo "error".mysql_error();
  }
?>