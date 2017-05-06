<div class="wrap">

<div class="header">  <?php
 include("header.php");
 ?>
   </div>
   
   
   <div class="center">
  <div class="centerleft">
  
  <?php
			   include("left_panel.php");
			  ?>
  </div> 
           
		   <div class="centercenter">     
		   
		    <span class="black_font">Pin Code Of India                       </span>
			<div>
			<?php
			if(isset($_POST['submit']))
			{
			$name=$_POST['name'];
			$city=$_POST['city'];
			$country=$_POST['country'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$message=$_POST['message'];
			 if(mysql_query("insert into userdetail values('$name','$city','$country','$email','$phone','$message')"))
			 {
			   echo "<p>Thank You";
			 }
			 else
			 {
			  echo "not".mysql_error();
			 }
			 }
			?>
                                </div>


  
		   
		   
		   
		   </div>
		   
		   <div class="centerright">
		   
		    <?php
				  include("right_panel.php");
				  ?>
		   </div>
          

  </div>
  
  <div class="footer">
 <?php
 include("footer.php");
 ?>
</div>
</div>