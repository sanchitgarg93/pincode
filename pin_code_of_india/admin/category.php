<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from category where id='$k'";
   if(mysql_query($query))
  {
   header("location:category.php");
  }
}
}
if(isset($_GET["submit"]))
{

 $category=$_GET['name'];
 if(mysql_query("insert into category values('','$category','')"))
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
   <tr>
      <td width="20%">Add Category:</td>
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
  <tr><td width="10%">Category Id</td>
  <td width="30%">Category Name</td>
  <td width="15%">Edit</td>
  <td width="15%">Delete</td>
  <td width="15%">active/deactive</td>
  <td width="15%">Action</td></tr>
<?php
$sql="select * from category";
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;

?>
  <tr><td width="15%"> <?php echo $ctr;?></td>
  <td width="40%"><?php echo $res['category']; ?></td>
  <td width="11%"><?php echo '<a href="editcategory.php?value='.$res['id'].'">Edit</a>'; ?></td>
  <td width="11%"><?php echo '<a href="deletecategory.php?id='.$res['id'].'">Delete</a>'; ?></td>
  <td width="11%"><?php if($res['status']==1)
   {
    $status='active';
   }
   else
   {
    $status='deactive';
   }
   echo '<a href="status.php?id='.$res['id'].'&status='.$res['status'].'">'.$status.'</a>';
   ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['id']; ?>"></td></tr>
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
