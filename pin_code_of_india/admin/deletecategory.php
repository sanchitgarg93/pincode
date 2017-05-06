<?php
include("conn.php");
$name=$_GET['id'];
$sql="delete from category where id='$name'";
if(mysql_query($sql))
{
 header("location:category.php");
}
?>