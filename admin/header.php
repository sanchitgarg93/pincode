<?php
ob_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>



</head>

<body> 
 <div id="user" style="background-color:#000000; border:1px #000000 solid; color:#FFFFFF;">
   <table width="100%" border="0">
     <tr><td align="left">Welcome&nbsp;&nbsp; <?php echo $_SESSION['name'];?></td><td align="right"><a href="signout.php" style="color:#FFFFFF;">Signout</a>&nbsp;&nbsp;<a href="change_password.php" style="color:#FFFFFF;">Change Password</a>
	     </td>
	  </tr>
 </div>
 <div id="header" style="background-color:#0099FF; border:1px #000000 solid; color:#FFFFFF;">
  <table class="linkcolor" width="100%" border="0">
    <tr>
     <td width="15%"><a href="state_detail.php" style="color:#FFFFFF;">State Detail </a></td>
     <td width="14%"><a href="city_detail.php" style="color:#FFFFFF;">City Detail</a> </td>
     <td width="17%"><a href="post.php" style="color:#FFFFFF;">Post Office Name Detail </a></td>
     <td width="19%"><a href="post_office_data_detail.php" style="color:#FFFFFF;">Post Office Data Detail</a> </td>
     <td width="15%"><a href="category.php" style="color:#FFFFFF;">Category </a></td>
     <td width="11%"><a href="page.php" style="color:#FFFFFF;">Add Page </a></td>
     <td width="9%"><a href="user_form.php" style="color:#FFFFFF;">User Form </a></td>
   </tr>
 </table>
 </div>
</body>
</html>
