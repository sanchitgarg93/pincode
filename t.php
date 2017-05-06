<?php
include("conn.php");
$test=$_GET['value'];
$alphabat=$_GET['city'];
$sql="select * from post_office_table where city_id='".$alphabat."' and post_off_name LIKE '$test%' ";
$row=mysql_query($sql);
while($res=mysql_fetch_array($row))
{
 echo $res['post_off_name'];
}

?>