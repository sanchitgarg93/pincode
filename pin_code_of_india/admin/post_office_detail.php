<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from post_office_table where post_off_id='$k'";
   if(mysql_query($query))
  {
   header("location:post_office_detail.php");
  }
}
}
if(isset($_GET["submit"]))
{
 $state=$_GET['select'];
 $city=$_GET['select1'];
 $post_office=$_GET['name'];
 if(mysql_query("insert into post_office_table values('','$state','$city','$post_office')"))
 {
    header("location:post_office_detail.php");
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
<div id="state" style="background-color:#0099FF; color:#FFFFFF;">

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
   <?php
$sql="select * from city_table";
$row=mysql_query($sql);
?>

  <tr><td width="20%">Select City:</td>
   <td><select name="select1">
   <option value="">--Select State</option>
  <?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['city_id']; ?>"><?php echo $res['city_name']; ?></option>
		<?php
		}?>
   </select> </td></tr>
    <tr>
      <td width="20%">Add Post Office:</td>
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

 <form id="form2" name="form2" method="get" action="">
  <table width="100%" border="0">
  <tr><td width="10%">Post Office Id</td>
  <td width="20%">State Name</td>
  <td width="20%">City Name</td>
  <td width="20%">Post Office Name</td>
  <td width="10%">Edit</td>
  <td width="10%">Delete</td>
  <td width="10%">Mutipale Delete</td></tr>
<?php
$sql="select * from post_office_table pt left join city_table ct on pt.city_id=ct.city_id  left join state st on pt.state_id=st.state_id";
      
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;
$res['post_off_name'];
$res['post_off_id'];
?>
  <tr><td width="10%"> <?php echo $ctr;?></td>
  <td width="20%"><?php echo $res['state_name']; ?></td>
  <td width="20%"><?php echo $res['city_name']; ?></td>
  <td width="20%"><?php echo $res['post_off_name']; ?></td>
  <td width="10%"><?php echo '<a href="edit2.php?value='.$res['post_off_id'].'">Edit</a>'; ?></td>
  <td width="10%"><?php echo '<a href="delete2.php?id='.$res['post_off_id'].'">Delete</a>'; ?></td>
   <td width="10%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['post_off_id']; ?>"></td></tr>
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
