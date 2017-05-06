<?php
include("conn.php");
$name=$_REQUEST['id'];
$sql="delete from post_off_detail_table where post_off_detail_id='$name'";
if(mysql_query($sql))
{
 header("location:post_office_data_detail.php");
}
?>