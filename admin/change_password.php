<?php
include('conn.php');
?>
<?php
$msg='';
if(isset($_POST['submit']))
{
 $pass=md5($_POST['pass']);
 $sql="select * from admin";
 $row=mysql_query($sql);
 while($res=mysql_fetch_array($row))
 {
  $new=$res['password'];
 }
 $pass1=md5($_POST['pass1']);
 $pass2=md5($_POST['pass2']);
 if ($new!=$pass)
{
 echo "Old Password is Wrong"; 
}
else
{
$query="update admin set password='$pass1' where password='$pass'";
if(mysql_query($query))
{
 echo "password Change";
}
}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Multivertex Admin</title>
<style type="text/css">
<!--
@import url("css/template.css");
-->
</style>
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

<form id="form1" name="form1" method="post" action="">

  <table width="100%" border="0">
  <tr><td width="5%">&nbsp;</td></tr>
   <tr><td width="5%">&nbsp;</td></tr>
    <tr><td width="5%">&nbsp;</td></tr>
   <tr>
      <td width="20%">User Name:</td>
      <td width="60%"><label>
        <input type="text" name="name" width="400px"/>
      </label></td>
    </tr>
	<tr>
      <td width="20%">Old Password:</td>
      <td width="60%"><label>
        <input type="password" name="pass" width="400px"/>
      </label></td>
    </tr>
	<tr>
      <td width="20%">New Password:</td>
      <td width="60%"><label>
        <input type="password" name="pass1" width="400px"/>
      </label></td>
    </tr>
	<tr>
      <td width="20%">Confirm Password :</td>
      <td width="60%"><label>
        <input type="password" name="pass2" width="400px"/>
      </label></td>
    </tr>
	<tr><td width="5%">&nbsp;</td></tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="Change Password" />
      </label></td>
    </tr>
   
  </table>
</form>
</div>
</body>
</html>
