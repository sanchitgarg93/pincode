<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$state=$_POST['state'];
$city=$_POST['city'];
$post_office_name=$_POST['post_office_name'];
$sql="select *, st.state as state, ct.city as city from post_detaile pd left join state st on pd.state=st.id left join city ct on ct.id=pd.city left join post_office po on po.id=pd.post_office where pd.state='".$state."' and pd.city='".$city."' and pd.post_office='".$post_office_name."'";
$row=mysql_query($sql); 
while($res=mysql_fetch_array($row))
{
 echo $res['state']."<br>";
 echo $res['city']."<br>";
 echo $res['post_office']."<br>";
 echo $res['pin_code']."<br>";
 echo $res['post_off_type']."<br>";
 echo $res['addres']."<br>";
} 
?>
</body>
</html>
