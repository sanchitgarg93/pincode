<?php
include("conn.php");
error_reporting(E_ALL ^ E_NOTICE);
?>
<?php
if(isset($_POST["submit1"]))
{
foreach($_POST["ch_box"] as $i=>$k)
{
   $query="delete from post_office_table where post_off_id='$k'";
   if(mysql_query($query))
  {
   header("location:post.php");
  }
}
}
if(isset($_POST["submit"]))
{
 $state=$_POST['state'];
 $city=$_POST['city'];
 $post=$_POST['name'];
 if(mysql_query("insert into post_office_table values('','$state','$city','$post')"))
 {
    header("location:post.php");
 }
 
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin State</title>
<link href="../style/state.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" >
jQuery(document).ready(function() {
jQuery('select[name=state]').change(function() {
var st=jQuery('select[name=state]').val();

var postdata='state='+st;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#city').html(output);
		
		}
		});

		
		


});


jQuery('select[name=state]').change(function() {
var ste=jQuery('select[name=state]').val();

var postdata='state1='+ste;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#citynm').html(output);
		
		}
		});

		
		


});





jQuery('select[name=alphabat]').change(function() {
var state=jQuery('select[name=state]').val();
var city=jQuery('select[name=city]').val();
var alf=jQuery('select[name=alphabat]').val();

var postdata='alphabat='+alf+'&stat='+state+'&city='+city;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#post_office_name').html(output);
		
		}
		});
		
		


});



});

</script>
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
   <td><select name="state" id="state">
   <option value="">--Select State</option>
  <?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['state_id']; ?>"><?php echo $res['state_name']; ?></option>
		<?php
		}?>
   </select> </td></tr>
    
   <tr><td width="20%">Select City:</td>
   <td><select name="city" id="city">
   <option value="">--Select City</option>
  	<option value=""></option>
		
   </select> </td></tr>
    <tr>
      <td width="20%">Post Office Name:</td>
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
<?php  $rec_limit = 60;

 ?>

  <form id="form2" name="form2" method="post" action="">
  <table width="100%" border="0">
  <tr><td width="10%">City Id</td>
   <td width="20%">State Name</td>
  <td width="20%">City Name</td>
   <td width="20%">City Name</td>
  <td width="15%">Delete</td>
  <td width="15%">Mutipale Delete</td></tr>
<?php
/* Get total number of records */
$sql = "SELECT count(post_off_id) from post_office_table pt left join city_table ct on pt.city_id=ct.city_id left join state st on pt.state_id=st.state_id ";
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
$row = mysql_fetch_array($retval, MYSQL_NUM );
$rec_count = $row[0];

if( isset($_GET['page'] ) )
{
   $page = $_GET['page'] + 1;
   $offset = $rec_limit * $page ;
}
else
{
   $page = 0;
   $offset = 0;
}
$left_rec = $rec_count - ($page * $rec_limit);

$sql = "select * from post_office_table pt left join city_table ct on pt.city_id=ct.city_id left join state st on pt.state_id=st.state_id ".
       "LIMIT $offset, $rec_limit";

$retval = mysql_query( $sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}

$ctr=0;
while($res = mysql_fetch_array($retval, MYSQL_ASSOC))
{
   


//$sql="select * from city_table ct left join state st on ct.state_id=st.state_id";
//$row=mysql_query($sql);


$ctr++;
$res['post_off_name'];
$res['post_off_id'];
?>
   <tr><td width="10%"> <?php echo $ctr;?></td>
  <td width="20%"><?php echo $res['state_name']; ?></td>
  <td width="20%"><?php echo $res['city_name']; ?></td>
   <td width="20%"><?php echo $res['post_off_name']; ?></td>
  <td width="11%"><?php echo '<a href="delete2.php?id='.$res['post_off_id'].'">Delete</a>'; ?></td>
   <td width="15%"><input type="checkbox" name="ch_box[]" value="<?php echo $res['post_off_id']; ?>"></td></tr>
<?php
}
?>

<tr>
      
<?php

if( $page > 0 )
{


   $last = $page - 2;
   ?> <td width="7%" colspan="1">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 60 Records</a> |";
   ?> <td width="7%" colspan="4">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 60 Records</a>";
}
else if( $page == 0 )
{
   ?> <td width="7%" colspan="1">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$page\">Next 60 Records</a>";
}
else if( $left_rec < $rec_limit )
{
   $last = $page - 2;
   ?> <td width="7%" colspan="4">
	  <?php
   echo "<a href=\"$_PHP_SELF?page=$last\">Last 60 Records</a>";
}



?>

    </tr>
 
	  <tr>
      <td width="7%" colspan="5"><label>
        <input type="submit" name="submit1" value="Delete" />
      </label></td>
    </tr>
</table>
</form>	  
</div>
</body>
</html>
