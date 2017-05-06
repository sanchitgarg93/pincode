<?php
ob_start();
session_start();
?>

<?php
include('conn.php');
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
	$pass=md5($_POST['pass']);
	if(mysql_query("insert into admin values('$name','$pass')"))
	{
	 header("location:index.php");
	 exit;
	}
	 else
	 {
	  echo "Sorry you have inter wrong password";
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
<div class="wrap1">
<div style="float:left; padding-top:5px; width:100%;">

<img src="images/multivertex.jpg" /><br />
<hr width="100%"/><br />

<span style="float:left; padding-left:250px; text-align:right; line-height:20px;">
Welcome to<br />
<h2>Multivertex<br /></h2>
Enter Your username and password<br />
then press Login

</span>
 <div id="admin" class="adminlogin"><br />

  <form name="form1" action="" method="post">
   <table align="center" border="0">
    <tr><td>User Name:</td>
	    <td><input type="text" name="name" value="" /></td>
	</tr>
	
    <tr><td>Password:</td>
	    <td><input type="password" name="pass" /></td>
	</tr>
    <tr><td>&nbsp;</td>
	    <td><input type="submit" name="submit" value="Login" /></td>
	</tr>
  </table>
   </form>

 </div>
	

 
 
 
 
 
 
 
 </div>
<div style="float:left; width:100%;"> &nbsp;<br />
<br />
</div>

</div>
</body>
</html>
