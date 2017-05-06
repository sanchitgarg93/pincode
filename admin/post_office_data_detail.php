<?php
include("conn.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
if(isset($_POST["submit1"]))
{
foreach($_POST["ch_box"] as $i=>$k)
{
   $query="delete from post_off_detail_table where post_off_detail_id='$k'";
   if(mysql_query($query))
  {
   header("location:post_office_data_detail.php");
  }
}
}
if(isset($_POST["submit"]))
{
 $state=$_POST['select'];
 $city=$_POST['select1'];
 $postname=$_POST['select2'];
 $post=$_POST['name'];
 if(mysql_query("insert into post_off_detail_table values('','$state','$city','$postname','$post')"))
 {
    header("location:post_office_data_detail.php");
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
<link rel="stylesheet" href="zebra_pagination.css" type="text/css">
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

<form id="form1" name="form1" method="post" action="">

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
$sq="select * from city_table";
$row1=mysql_query($sq);
?>
   <tr><td width="20%">Select City:</td>
   <td><select name="select1">
   <option value="">--Select City</option>
  <?php
		while($res1=mysql_fetch_array($row1))
{?>
		<option value="<?php echo $res1['city_id']; ?>"><?php echo $res1['city_name']; ?></option>
		<?php
		}?>
   </select> </td></tr>
    <?php
$sq="select * from post_office_table";
$row1=mysql_query($sq);
?>
   <tr><td width="20%">Select Post Office:</td>
   <td><select name="select2">
   <option value="">--Select Post Office</option>
  <?php
		while($res1=mysql_fetch_array($row1))
{?>
		<option value="<?php echo $res1['post_off_id']; ?>"><?php echo $res1['post_off_name']; ?></option>
		<?php
		}?>
   </select> </td></tr>
   <tr>
      <td width="20%">Pin Code:</td>
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
<?php 

 ?>

  <form id="form2" name="form2" method="post" action="">
  <table width="100%" border="0">
  <tr><td width="5%">City Id</td>
   <td width="20%">State Name</td>
  <td width="20%">City Name</td>
   <td width="20%">Post Office Name</td>
   <td width="15%">Pin Code</td>
  <td width="10%">Delete</td>
  <td width="10%">Mutipale Delete</td></tr>
<?php

  // how many records should be displayed on a page?
        $records_per_page = 10;

        // include the pagination class
        require 'Zebra_Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

$MySQL = "select SQL_CALC_FOUND_ROWS  post_off_detail_id from post_off_detail_table po left join post_office_table pt on po.post_off_id=pt.post_off_id left join city_table ct on po.city_id=ct.city_id left join state st on po.state_id=st.state_id LIMIT ". (($pagination->get_page() - 1) * $records_per_page) . ", " . $records_per_page ." ";

$sql = "select SQL_CALC_FOUND_ROWS  * from post_off_detail_table po left join post_office_table pt on po.post_off_id=pt.post_off_id left join city_table ct on po.city_id=ct.city_id left join state st on po.state_id=st.state_id LIMIT ". (($pagination->get_page() - 1) * $records_per_page) . ", " . $records_per_page ." ";

   // if query could not be executed
        if (!($result = @mysql_query($MySQL))) {

            // stop execution and display error message
            die(mysql_error());

        }

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

  // fetch the total number of records in the table
        $rows = mysql_fetch_assoc(mysql_query('SELECT FOUND_ROWS() AS rows'));

        // pass the total number of records to the pagination class
        $pagination->records($rows['rows']);

        // records per page
        $pagination->records_per_page($records_per_page);

$ctr=0;
while($res = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   


$ctr++;
$res['pin_code'];
$res['post_off_detail_id'];
?>
    <tr><td width="5%"> <?php echo $ctr;?></td>
  <td width="20%"><?php echo $res['state_name']; ?></td>
  <td width="20%"><?php echo $res['city_name']; ?></td>
   <td width="20%"><?php echo $res['post_off_name']; ?></td>
   <td width="15%"><?php echo $res['pin_code']; ?></td>
  <td width="10%"><?php echo '<a href="delete3.php?id='.$res['post_off_detail_id'].'">Delete</a>'; ?></td>
   <td width="10%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['post_off_detail_id']; ?>"></td></tr>
<?php
}
?>

<tr>
      
<?php




?>

    </tr>
 
	  <tr>
      <td width="7%" colspan="5"><label>
        <input type="submit" name="submit1" value="Delete" />
      </label></td>
    </tr>
</table>
  <?php

        // render the pagination links
        $pagination->render();

        ?>


</form>	  
</div>
</body>
</html>
