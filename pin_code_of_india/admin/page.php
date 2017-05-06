<?php
include("conn.php");
?>
<?php
if(isset($_GET["submit1"]))
{
foreach($_GET["ch_box"] as $i=>$k)
{
   $query="delete from page where page_id='$k'";
   if(mysql_query($query))
  {
   header("location:page.php");
  }
}
}
if(isset($_GET["submit"]))
{
 $category=$_GET['select'];
 $page=$_GET['name'];
 if(mysql_query("insert into page values('','$category','$page','')"))
 {
    header("location:page.php");
 }
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
<link href="state.css" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
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
	$sql="select * from category";
$row=mysql_query($sql);
	?>
	<tr>
      <td width="20%">Select Category:</td>
      <td width="60%"><label>
       <select name="select">
	   <?php
	   while($res=mysql_fetch_array($row))
	   {
	   ?>
	   <option value="<?php echo $res['category']; ?>"><?php echo $res['category']; ?></option>
	   <?php
	   }?>
	   </select>
      </label></td>
    </tr>
   <tr>
      <td width="20%">Add Page Detail:</td>
      <td width="60%"><label>
        <textarea class="ckeditor" cols="80" id="editor1" name="name" rows="10"></textarea>
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
  <tr><td width="10%">Page Id</td>
  <td width="30%">Page Category </td>
  <td width="15%">Edit</td>
  <td width="15%">Delete</td>
  <td width="15%">active/deactive</td>
  <td width="15%">Action</td></tr>
<?php
$sql="select * from page";
$row=mysql_query($sql);
$ctr=0;
while($res=mysql_fetch_array($row))
{
$ctr++;

?>
  <tr><td width="15%"> <?php echo $ctr;?></td>
  <td width="40%"><?php echo $res['category']; ?></td>
  <td width="11%"><?php echo '<a href="editcategory1.php?value='.$res['page_id'].'">Edit</a>'; ?></td>
  <td width="11%"><?php echo '<a href="deletecategory1.php?id='.$res['page_id'].'">Delete</a>'; ?></td>
  <td width="11%"><?php if($res['status']==1)
   {
    $status='active';
   }
   else
   {
    $status='deactive';
   }
   echo '<a href="status1.php?id='.$res['page_id'].'&status='.$res['status'].'">'.$status.'</a>';
   ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['page_id']; ?>"></td></tr>
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
