<?php
ob_start();
session_start();
?>
<?php
include("conn.php");
if(isset($_GET["submit"]))
{
 $state=$_GET['sele'];

 $city=$_GET['name'];
 $city1=explode(',',$city);
 foreach($city1 as $city2)
 {
  $query="insert into city_table values('','58','$city2')";
  $res=mysql_query($query);
 }
 if($res)
 {
    header("location:city_detail2.php");
 }
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
<link href="state.css" />
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


<div id="state" style="background-color:#0099FF; color:#FFFFFF;">

<form id="form1" name="form1" method="get" action="">

  <table width="100%" border="0">
  <tr><td width="5%">&nbsp;</td></tr>
   <tr><td width="5%">&nbsp;</td></tr>
    <tr><td width="5%">&nbsp;</td></tr>


  <tr><td width="20%">Select State:</td>
   <td><input type="text" name="sele"  />
  </td></tr>
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
</body>
</html>
