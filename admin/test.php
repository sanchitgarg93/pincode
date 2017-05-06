<?php
include("conn.php");
  if(isset($_POST["submit"]))
    {
	  $sname=$_POST["sname"];
	  $cname=$_POST["cname"];
	  $pname=$_POST["pname"];
	  $pname1=explode(",",$pname);
	  foreach($pname1 as $val)
	  {
	   $sql="insert into post_office_table values('','$sname','$cname','$val')";
	   if(mysql_query($sql))
	   {
	    header("location:test.php");
	   }
	   else
	   {
	    echo "error".mysql_error();
	   }
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
  <table width="100%" border="0">
    <tr>
      <td width="22%">state name</td>
      <td width="78%"><label>
        <input type="text" name="sname" />
      </label></td>
    </tr>
	<tr>
      <td width="22%">cityname</td>
      <td width="78%"><label>
        <input type="text" name="cname" />
      </label></td>
    </tr>
	<tr>
      <td width="22%">post off name</td>
      <td width="78%"><label>
        <input type="text" name="pname" />
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
