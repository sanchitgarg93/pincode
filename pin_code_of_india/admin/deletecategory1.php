<?php
include("conn.php");
$name=$_GET['id'];
$sql="delete from page where page_id='$name'";
if(mysql_query($sql))
{
 header("location:page.php");
}
?>