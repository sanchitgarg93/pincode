<?php
include('conn.php');
error_reporting(E_ALL ^ E_NOTICE);

if($_REQUEST['submit']!="")
{

$file_path=$_FILES['csvfile']['tmp_name'];

if($file_path!='')
{
	define('RESUMEURL','uploads/');

	$file_name=time();  
	$file_name.=$_FILES['csvfile']['name'];
	$file_upload_path=RESUMEURL.$file_name;
	move_uploaded_file($file_path,$file_upload_path);
	$Fullname = $file_name;
}
else
{

	echo 'File could not be uploaded.';exit();

}


      $handle = fopen(RESUMEURL.$Fullname, 'r');
	  
	  $k=0;
	  
	  
	  
	  /*
	   @mysql_query('TRUNCATE TABLE `_users`');
	   @mysql_query('TRUNCATE TABLE `_users_skills`');
	   @mysql_query('TRUNCATE TABLE `_users_look_attributes`');
	   @mysql_query('TRUNCATE TABLE `_users_experience`');
	   @mysql_query('TRUNCATE TABLE `_users_images`');
	   @mysql_query('TRUNCATE TABLE `_users_att_male`');
	   @mysql_query('TRUNCATE TABLE `_users_att_female`');
	   @mysql_query('TRUNCATE TABLE `_users_training`');
	   @mysql_query('TRUNCATE TABLE `_users_awards`');
	   @mysql_query('TRUNCATE TABLE `_users_att_children`');*/
		 
		 
		 
		
	  
	  	  while(($data = fgetcsv($handle, 1000, ",")) !== false)
				  {
			
					if($k!=0 && $data[0]!="")
					{
						
					//$impObj = new user();	
						
						/*-----------user table------------*/
						$stateid=addslashes($data[0]);
						$cityid=addslashes($data[1]);
						$postoffname=addslashes($data[2]);
						$pincode=addslashes($data[3]);
										
					$sql="select * from post_office_table where post_off_name='".$postoffname."'"; 
						 $row=mysql_query($sql);
						 $res=mysql_fetch_array($row);
						 $post=$res['post_off_id'];
						
					
						
						{
						
							
							$user_sql = "INSERT INTO post_off_detail_table values('','$stateid','$cityid','$post','$pincode')"; 
							$row=mysql_query($user_sql);
							if($row)
							{
							 echo "insert";
							}
							else
							{
							 echo "not".mysql_error();
							}
						
						}
							
							
							
							
							
						
							
					}
					
					
							
					$k++;
								
				  } // end while loop
	  
	 

fclose($handle);
	  
}	  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="application/javascript">
function valid()
{

	if(document.csvform.csvfile.value==false)	
	{
		alert("Please Select The File first. ");
		return false;
	}
	
}

</script>

<style type="text/css">
<!--
body,td,th {
	font-family: Tahoma;
	font-size: 12px;
	
	
}
.p_left
{
	padding-left:8px;
	
}
-->
</style></head>

<body style="margin-top:90px">
<form action="" method="post" enctype="multipart/form-data" name="csvform">
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center" style="border:1px solid #999">
  <tr>
    <td colspan="2" bgcolor="#006699" style="color:#FFF;" align="center"><strong>Import CSV to Database</strong></td> 

    
  </tr>
  <tr>
    <td width="92">&nbsp;</td> <td width="306">&nbsp;</td>
   
    
  </tr>
   </tr>
  <tr>
    <td width="92">&nbsp;</td> <td width="306"><? if($message!="") { echo $message; } ?></td>
   
    
  </tr>
    <tr>
    <td align="right">Choose File</td> <td class="p_left"><input type="file" name="csvfile" size="30" /></td>
   
    
  </tr>
  <tr>
    <td width="92">&nbsp;</td> <td width="306">&nbsp;</td>
   
    
  </tr>
  <tr>
    <td width="92">&nbsp;</td> <td width="306"><input type="submit" value="submit" name="submit" onSubmit="return valid()" /></td>
   
    
  </tr>
</table>
</form>
</body>
</html>
