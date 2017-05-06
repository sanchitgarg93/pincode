<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from city_table where city_id='$k'";
   if(mysql_query($query))
  {
   header("location:state_detail.php");
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

 <form id="form2" name="form2" method="get" action="">
  <table width="100%" border="0">
  <tr><td width="15%">City Id</td>
   <td width="20%">State Name</td>
  <td width="20%">City Name</td>
  <td width="15%">Edit</td>
  <td width="15%">Delete</td>
  <td width="15%">Mutipale Delete</td></tr>
<?php
$sql="select * from city_table ct left join state st on ct.state_id=st.state_id";
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;
$res['city_name'];
$res['city_id'];
?>
  <tr><td width="15%"> <?php echo $ctr;?></td>
  <td width="20%"><?php echo $res['state_name']; ?></td>
  <td width="20%"><?php echo $res['city_name']; ?></td>
  <td width="11%"><?php echo '<a href="edit1.php?value='.$res['city_id'].'">Edit</a>'; ?></td>
  <td width="11%"><?php echo '<a href="delete1.php?id='.$res['city_id'].'">Delete</a>'; ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['city_id']; ?>"></td></tr>
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
