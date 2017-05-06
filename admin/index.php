<?php
ob_start();
session_start();

if(isset($_GET['errmsg']))
	if($_GET['errmsg']=="Please log in First")
	{
?>	
		<p style="background-color:#FFF8DC; 
				  border-style: solid; 
				  border-color:#FFD700;
				  color:#000000;
				  font-family: 'Lato', 'Lato Latin', 'Helvetica Neue', Helvetica, Arial, sans-serif; 
				  padding:10px; 
				  font-size:12px;">
					You must login to continue
		</p>
<?php
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Panel</title>
<style type="text/css">

body
{
font-family: 'Lato', 'Lato Latin', 'Helvetica Neue', Helvetica, Arial, sans-serif;
font-weight: 300;
font-size: 14px;
line-height:30px;
color:#FFFFFF;
}
<!--

-->
</style>
</head>

<body>
<div class="wrap1" style="">
<div style="float:left; padding-top:5px; width:100%; background-color:#FF0000;">

<hr width="100%"/>
<br />
<h2 style="margin:auto;display:table;line-height:20px;">Welcome to Pincode of India </h2>

 <div id="admin" class="adminlogin" >
  <form name="form1" action="" method="post">
  <div style="padding-left:20px; height:20px; color:#FF0000; font-weight:bold;"><?php
include('conn.php');
if(isset($_POST['submit']))
  {
    $name=$_POST['name'];
	$pass=md5($_POST['pass']);
	$sql='select* from admin where name="'.$name.'" and password="'.$pass.'" ';
	 $row=mysql_query($sql);
	 if(mysql_num_rows($row)>0)
	 {
	  $_SESSION["name"]=$name;
	  header("location:state_detail.php");
	  exit;
	 }
	 else
	 {
	  echo "<p style='color:#000000;text-align:center'>The username and password you entered don't match.</p>";
	 }
  }
?></div>
<br />
   <table align="center" border="0">
   
    <tr><td style="background:none;">User Name:</td>
	    <td><input type="text" name="name" value="" /></td>
	</tr>
	
    <tr><td style="background:none;">Password:</td>
	    <td ><input type="password" name="pass" /></td>
	</tr>
    <tr><td style="background:none;">&nbsp;</td>
	    <td style="background:none;"><input type="submit" name="submit" value="Login" /></td>
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
