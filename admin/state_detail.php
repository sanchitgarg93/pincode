<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from state where state_id='$k'";
   if(mysql_query($query))
  {
   header("location:state_detail.php");
  }
}
}
if(isset($_GET["submit"]))
{
 $state=$_GET['name'];
  $state1=explode(',',$state);
  foreach($state1 as $state2)
  {
    $query="insert into state values('','$state2')";
	$sql=mysql_query($query);
  }
 if($sql)
 {
    header("location:state_detail.php");
 }
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
<link href="../style/state.css" rel="stylesheet" type="text/css" />
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
    
    <tr>
      <td width="20%">State Name:</td>
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
  <tr><td width="15%">State Id</td>
  <td width="40%">State Name</td>
  <td width="15%">Edit</td>
  <td width="15%">Delete</td>
  <td width="15%">Mutipale Delete</td></tr>
<?php
$sql="select * from state";
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;
$res['state_name'];
$res['state_id'];
?>
  <tr><td width="15%"> <?php echo $ctr;?></td>
  <td width="40%"><?php echo $res['state_name']; ?></td>
  <td width="11%"><?php echo '<a href="edit.php?value='.$res['state_id'].'">Edit</a>'; ?></td>
  <td width="11%"><?php echo '<a href="delete.php?id='.$res['state_id'].'">Delete</a>'; ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['state_id']; ?>"></td></tr>
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
