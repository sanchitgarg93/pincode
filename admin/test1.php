<?php
include("conn.php");
  if(isset($_POST["submit"]))
    {
	  $sname=$_POST["sname"];
	  $cname=$_POST["cname"];
	  $pname=$_POST["pname"];
	  $pname2=$_POST["pname1"];
	  $pname3=explode(",",$pname2);
	   foreach($pname3 as $val1)
	  {
	   $value==$val1;
	  }
	  $pname1=explode(",",$pname);
	  foreach($pname1 as $val)
	  {
	   $sql="insert into post_off_detail_table values('','$sname','$cname','$val','$value')";
	   if(mysql_query($sql))
	   {
	    header("location:test1.php");
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
      <td width="22%">post off pin code</td>
      <td width="78%"><label>
        <input type="text" name="pname1" />
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
