<?php
include("conn.php");


if(isset($_POST['state']) && !empty($_POST['state']))
{
$state=$_POST['state'];

$sql="select * from city where 	state=$state";
$res=mysql_query($sql);

while($row=mysql_fetch_array($res))
{

echo '<option value="'.$row['id'].'" >'.$row['city'].'</option>';
}

}

if(isset($_POST['alphabat']) && isset($_POST['city']) && isset($_POST['stat']))
{
$state=$_POST['stat'];
$city=$_POST['city'];
$alphabat=$_POST['alphabat'];
 $sql="select * from post_office where 	state='".$state."' and city='".$city."' and post_office LIKE '$alphabat%' ";

$res=mysql_query($sql);

while($row=@mysql_fetch_array($res))
{

echo '<option value="'.$row['id'].'" >'.$row['post_office'].'</option>';
}

}


?>
