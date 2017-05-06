<?php
include("conn.php");
?>
<?php
if(isset($_POST["submit"]))
{
 $city=$_POST['city'];
 $state=$_POST['select'];
 $name=$_POST['name'];
 $post_office=$_POST['post_office'];
 $name1=$_POST['name1'];
 $name2=$_POST['name2'];
 if(mysql_query("insert into post_detaile values('','$state','$city','$post_office','$name','$name1','$name2')"))
 {
 echo "insert";
 }
 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
<?php
$sql="select * from state";
$row=mysql_query($sql);
?>
  <table width="351" border="0">
    <tr>
      <td width="180">state</td>
      <td width="155"><label>
        <select name="select">
		<?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['id']; ?>"><?php echo $res['state']; ?></option>
		<?php
		}?>
        </select>
      </label></td>
    </tr>
<?php
$sql="select * from city";
$row=mysql_query($sql);
?>
    <tr>
      <td>city</td>
      <td><label>
       <select name="city">
		<?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['id']; ?>"><?php echo $res['city']; ?></option>
		<?php
		}?>
        </select>
      </label></td>
    </tr>
	<?php
$sql="select * from post_office";
$row=mysql_query($sql);
?>
    <tr>
      <td>post office name</td>
      <td><label>
       <select name="post_office">
		<?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['id']; ?>"><?php echo $res['post_office']; ?></option>
		<?php
		}?>
        </select>
      </label></td>
    </tr>
	<tr>
      <td>pin code</td>
      <td><label>
        <input type="text" name="name" />
      </label></td>
    </tr>
	<tr>
      <td>post office type</td>
      <td><label>
        <input type="text" name="name1" />
      </label></td>
    </tr>
	<tr>
      <td>address</td>
      <td><label>
        <input type="text" name="name2" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="Submit" />
      </label></td>
    </tr>
   
  </table>
</form>
</body>
</html>
