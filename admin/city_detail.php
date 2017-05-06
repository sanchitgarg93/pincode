<?php
include("conn.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from city_table where city_id='$k'";
   if(mysql_query($query))
  {
   header("location:city_detail.php");
  }
}
}
if(isset($_GET["submit"]))
{
 $state=$_GET['select'];
 $city=$_GET['name'];
 if(mysql_query("insert into city_table values('','$state','$city')"))
 {
    header("location:city_detail.php");
 }
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />	
<title>Admin State</title>
<link href="../style/state.css" rel="stylesheet" type="text/css"  />
</head>

<body>
<?php
include("header.php");
?>
<?php
 if(!(isset($_SESSION['name'])))
 {
  header("location:index.php?errmsg=Please log in First");
  exit;
 }
?>

<div id="state" style="color:#FFFFFF;">

<form id="form1" name="form1" method="get" action="">

  <table width="100%" border="0">
  <tr><td width="5%">&nbsp;</td></tr>
   <tr><td width="5%">&nbsp;</td></tr>
    <tr><td width="5%">&nbsp;</td></tr>
<?php
$sql="select * from state";
$row=mysql_query($sql);
?>

  <tr><td width="20%">Select State:</td>
   <td><select name="select">
   <option value="">--Select State</option>
  <?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['state_id']; ?>"><?php echo $res['state_name']; ?></option>
		<?php
		}?>
   </select> </td></tr>
    <tr>
      <td width="20%">City Name:</td>
      <td width="60%"><label>
        <input type="text" name="name" width="400px"/>
      </label></td>
    </tr>
	<tr><td width="5%">&nbsp;</td></tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="Add" />
      </label></td>
    </tr>
   
  </table>
</form>
<?php  $rec_limit = 30;

 ?>
 <form id="form2" name="form2" method="get" action="">
  <table width="100%" border="0">
  <tr><td width="15%">City Id</td>
   <td width="20%">State Name</td>
  <td width="20%">City Name</td>
  <td width="15%">Delete</td>
  <td width="15%">Mutipale Delete</td></tr>
<?php
/* Get total number of records */
$sql = "SELECT count(city_id)  from city_table ct left join state st on ct.state_id=st.state_id ";
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET['page'] ) )
{
   $page = $_GET['page'] + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "select * from city_table ct left join state st on ct.state_id=st.state_id ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$ctr=0;
while($res = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   


//$sql="select * from city_table ct left join state st on ct.state_id=st.state_id";
//$row=mysql_query($sql);


$ctr++;
$res['city_name'];
$res['city_id'];
?>
  <tr><td width="15%"> <?php echo $ctr;?></td>
  <td width="20%"><?php echo $res['state_name']; ?></td>
  <td width="20%"><?php echo $res['city_name']; ?></td>
  <td width="11%"><?php echo '<a href="delete1.php?id='.$res['city_id'].'">Delete</a>'; ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['city_id']; ?>"></td></tr>
<?php
}
?>

<tr>
      
<?php

if( $page > 0 )
{


   $last = $page - 2;
   ?> <td width="7%" colspan="1">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 30 Records</a> |";
   ?> <td width="7%" colspan="4">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 30 Records</a>";
}
else if( $page == 0 )
{
   ?> <td width="7%" colspan="1">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 30 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   ?> <td width="7%" colspan="4">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 30 Records</a>";
}



?>

    </tr>
 
	  <tr>
      <td width="7%" colspan="5"><label>
        <input type="submit" name="submit1" value="Delete" />
      </label></td>
    </tr>
</table>
</form>	  
</div>
</body>
</html>
