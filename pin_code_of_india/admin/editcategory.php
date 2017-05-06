<?php
include("conn.php");
error_reporting(E_ALL^E_NOTICE);
?>
<?php
$id=$_GET['value'];
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $sq="update category set category='$name' where id='$id'";
  if(mysql_query($sq))
  {
   header("location:category.php");
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
</head>

<body>
<div id="state" style="background-color:#0099FF; border:1px #000000 solid; color:#FFFFFF;">
<?php
include("header.php");
?>
<form id="form1" name="form1" method="post" action="">

  <table width="100%" border="0">
  <tr><td width="5%">&nbsp;</td></tr>
   <tr><td width="5%">&nbsp;</td></tr>
    <tr><td width="5%">&nbsp;</td></tr>

	
    <tr>
      <td width="20%">State:</td>
      <td width="60%"><label>
        <input type="text" name="name" value="" width="400px"/>
      </label></td>
    </tr>
	<tr><td width="5%">&nbsp;</td></tr>
	
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="Edit" />
      </label></td>
    </tr>
   
  </table>
</form>

 
</div>
</body>
</html>
