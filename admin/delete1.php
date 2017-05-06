<?php
include("conn.php");
$name=$_GET['id'];
$sql="delete from city_table where city_id='$name'";
if(mysql_query($sql))
{
 header("location:city_detail.php");
}
?>