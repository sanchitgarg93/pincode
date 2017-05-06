<?php
include("conn.php");
$name=$_GET['id'];
$sql="delete from post_office_table where post_off_id='$name'";
if(mysql_query($sql))
{
 header("location:post_office_detail.php");
}
?>