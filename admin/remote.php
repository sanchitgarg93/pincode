<?php
include("conn.php");


if(isset($_POST['state']) && !empty($_POST['state']))
{
$state=$_POST['state'];

$sql="select * from city_table where state_id=$state order by city_name ASC ";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{

echo '<option value="'.$row['city_id'].'" >'.$row['city_name'].'</option>';
}

}

if(isset($_POST['state1']) && !empty($_POST['state1']))
{
$state=$_POST['state1'];

$sql="select * from city_table where state_id=$state order by city_name ASC";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{

echo '<option value="'.$row['city_id'].'" >'.$row['city_name'].'</option>';
}

}



if(isset($_POST['city']) && isset($_POST['stat']))
{
$state=$_POST['stat'];
$city=$_POST['city'];
 $sql="select * from post_office_table where state_id='".$state."' and city_id='".$city."' order by post_off_name ASC ";

$res=mysql_query($sql);

while($row=@mysql_fetch_array($res))
{

echo '<option value="'.$row['post_off_id'].'" >'.$row['post_off_name'].'</option>';
}

}


?>
