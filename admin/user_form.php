<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from userdetail where email='$k'";
   if(mysql_query($query))
  {
   header("location:user_form.php");
  }
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
 <form id="form2" name="form2" method="get" action="">
  <table width="100%" border="0">
  <tr><td width="5%"> Id</td>
  <td width="10%">Name</td>
  <td width="10%">City</td>
  <td width="10%">Country</td>
  <td width="15%">Email</td>
   <td width="10%">Phone</td>
    <td width="30%">Message</td>
	<td width="10%">Delete</td></tr>
	
<?php
$sql="select * from userdetail";
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;
?>
  <tr><td width="5%"> <?php echo $ctr;?></td>
  <td width="10%"><?php echo $res['name']; ?></td>
  <td width="10%"><?php echo $res['city']; ?></td>
  <td width="10%"><?php echo $res['country']; ?></td>
  <td width="15%"><?php echo $res['email']; ?></td>
   <td width="10%"><?php echo $res['phone']; ?></td>
    <td width="30%"><?php echo $res['message']; ?></td>
   <td width="10%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['email']; ?>"></td></tr>
<?php
}?>

 
	  <tr>
      <td width="7%"><label>
        <input type="submit" name="submit1" value="Delete" />
      </label></td>
    </tr>
</table>
</form>	  
</div>
</body>
</html>
