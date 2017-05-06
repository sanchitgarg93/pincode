<?php
include("conn.php");
?>
<?php
if(isset($_POST["submit"]))
{
 $city=$_POST['city'];
 $state=$_POST['select'];
 $name=$_POST['name'];
 if(mysql_query("insert into post_office values('','$state','$city','$name')"))
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
	<tr>
      <td>post office name</td>
      <td><label>
        <input type="text" name="name" />
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
