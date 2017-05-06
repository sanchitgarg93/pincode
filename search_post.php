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
		   <?php 
		 	$sq="select ct.city_name from post_off_detail_table pt left join post_office_table po on pt.post_off_id=po.post_off_id left join state st on st.state_id=pt.state_id left join city_table ct on ct.city_id=pt.city_id where ct.city_id='".$_GET['city']."' order by po.post_off_name ASC";  
		   $ro=mysql_query($sq);
		   $rest=mysql_fetch_array($ro);
	  
		  
?>  
		    <span class="black_font">Plase Select The First Alphabat Of Your Post Office  City <?php echo $rest['city_name']; ?>                   </span>
			<div>
			
			
			<?php
			
  // $sql="select * from post_office_table pt left join state st on st.state_id=pt.state_id left join city_table ct on ct.city_id=pt.city_id where pt.city_id='".$_GET['city']."' order by pt.post_off_name ASC"; 
//$row=mysql_query($sql);
//$res=mysql_fetch_array($row)

 ?>                             
				
                <table width="500">
							  <tr><td colspan="2" bgcolor="#00CCCC" style="color:#ffffff; font-size:16px; font-weight:bold;">
                            <?php  echo '<a href="test1.php?alpha=A&value='.$_GET['city'].'">A</a>';?>&nbsp; |
							 <?php  echo '<a href="test1.php?alpha=B&value='.$_GET['city'].'">B</a>';?>&nbsp; |
							  <?php  echo '<a href="test1.php?alpha=C&value='.$_GET['city'].'">C</a>';?>&nbsp; |
							   <?php  echo '<a href="test1.php?alpha=D&value='.$_GET['city'].'">D</a>';?>&nbsp; |
							    <?php  echo '<a href="test1.php?alpha=E&value='.$_GET['city'].'">E</a>';?>&nbsp; |
								 <?php  echo '<a href="test1.php?alpha=F&value='.$_GET['city'].'">F</a>';?>&nbsp; |
								  <?php  echo '<a href="test1.php?alpha=G&value='.$_GET['city'].'">G</a>';?>&nbsp; |
								   <?php  echo '<a href="test1.php?alpha=H&value='.$_GET['city'].'">H</a>';?>&nbsp; |
								    <?php  echo '<a href="test1.php?alpha=I&value='.$_GET['city'].'">I</a>';?>&nbsp; |
									 <?php  echo '<a href="test1.php?alpha=J&value='.$_GET['city'].'">J</a>';?>&nbsp; |
									  <?php  echo '<a href="test1.php?alpha=K&value='.$_GET['city'].'">K</a>';?>&nbsp; |
									   <?php  echo '<a href="test1.php?alpha=L&value='.$_GET['city'].'">L</a>';?>&nbsp; |
									    <?php  echo '<a href="test1.php?alpha=M&value='.$_GET['city'].'">M</a>';?>&nbsp; |
							          <?php  echo '<a href="test1.php?alpha=N&value='.$_GET['city'].'">N</a>';?>&nbsp; |
									   <?php  echo '<a href="test1.php?alpha=O&value='.$_GET['city'].'">O</a>';?>&nbsp; |
									    <?php  echo '<a href="test1.php?alpha=P&value='.$_GET['city'].'">P</a>';?>&nbsp; |
										 <?php  echo '<a href="test1.php?alpha=Q&value='.$_GET['city'].'">Q</a>';?>&nbsp; |
										  <?php  echo '<a href="test1.php?alpha=R&value='.$_GET['city'].'">R</a>';?>&nbsp; |
										   <?php  echo '<a href="test1.php?alpha=S&value='.$_GET['city'].'">S</a>';?>&nbsp; |
										    <?php  echo '<a href="test1.php?alpha=T&value='.$_GET['city'].'">T</a>';?>&nbsp; |
											 <?php  echo '<a href="test1.php?alpha=U&value='.$_GET['city'].'">U</a>';?>&nbsp; |
											  <?php  echo '<a href="test1.php?alpha=V&value='.$_GET['city'].'">V</a>';?>&nbsp; |
											   <?php  echo '<a href="test1.php?alpha=W&value='.$_GET['city'].'">W</a>';?>&nbsp; |
		  									    <?php  echo '<a href="test1.php?alpha=X&value='.$_GET['city'].'">X</a>';?>&nbsp; |
			                                   <?php  echo '<a href="test1.php?alpha=Y&value='.$_GET['city'].'">Y</a>';?>&nbsp; |
											    <?php  echo '<a href="test1.php?alpha=Z&value='.$_GET['city'].'">Z</a>';?>&nbsp; |				  
							  
							  
							  </td></tr>
							  </table>
                                </div>
							<div>
							<tr><td>&nbsp;&nbsp;</td></tr>
							</div>
								
			<div>
			  <script type="text/javascript" language="javascript">

 google_ad_client = "pub-3402879080584710"; /* 728x90, created 11/14/09 */ 

 google_ad_slot = "8297775385";

  google_ad_width = 610; 

  google_ad_height = 90; 

 </script>

      <script type="text/javascript" language="javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> </script>
   
			</div>
		<!--
		<div>
		  <p>You can join us  on <a href="http://www.bankingonly.com/">Bankingonly.com</a>&nbsp;and you get all information about banks,bank jobs,banking news and bank job test you get every thing you need so join us on our site bankingonly.com </p>
		   
		 </div>
  		-->
		   
		   
		   
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