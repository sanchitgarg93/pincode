<?php
include("conn.php");
$name=$_GET['id'];
$sql="delete from state where state_id='$name'";
if(mysql_query($sql))
{
 header("location:state_detail.php");
}
?>