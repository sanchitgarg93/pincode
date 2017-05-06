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
$test=$_GET['state'];
 $cntcity="select count('ct.city_name') as totcity, state_name from city_table ct left join state st on ct.state_id=st.state_id where ct.state_id='".$_GET['state']."' order by ct.city_name ASC";
  $rw=mysql_query($cntcity); 
  $rest=mysql_fetch_array($rw);
 
  $sql="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.state_id='".$_GET['state']."' order by ct.city_name ASC";  
$row=mysql_query($sql); ?>  
			
		    <span class="black_font"> <?php echo $rest['totcity']; ?> Districts of  <?php echo $rest['state_name']; ?> having Post Offices       </span>
			<div>
			<?php 
while($res=mysql_fetch_array($row))
{
 ?>                            
                             
			
			
                 <?php
				 
				  echo '<a href="search_post.php?city='.$res["city_id"].'" style="cursor:pointer;  color:#0033CC; text-decoration:inline;">'.$res["city_name"].'</a>'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;';
				 }
				 ?>                               
                                </div>
								
							<div style="padding-top:10px; padding-bottom:15px;">
							
							<tr><td><?php if($test==28)
							{
							 echo "1 GPO IN BIHAR"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=800001">PATNA,800001</a>';
							}
						else if($test==33)
							{
							   echo "2 GPO IN DELHI"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=110006">DELHI,110006</a>'."&nbsp;"."&nbsp;"."&nbsp;";
							  echo '<a href="test.php?value=110001">NEW DELHI,110001</a>';
							}
							else if($test==30)
							{
							   echo "0 GPO IN CHHATTISGARH"."&nbsp;"."&nbsp;"."&nbsp;";
							 
							 
							}
							else if($test==31)
							{
							   echo "0 GPO IN DADRA AND NAGAR HAVELI"."&nbsp;"."&nbsp;"."&nbsp;";
							 
							 
							}
							else if($test==32)
							{
							   echo "0 GPO IN DAMAN AND DIU"."&nbsp;"."&nbsp;"."&nbsp;";
							 
							 
							}
							else if($test==34)
							{
							   echo "0 GPO IN GOA"."&nbsp;"."&nbsp;"."&nbsp;";
							 
							 
							}
							else if($test==35)
							{
							 echo "1 GPO IN GUJARAT"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=380001">AHMEDABAD,380001</a>';
							}
							else if($test==36)
							{
							 echo "1 GPO IN HARYANA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=133001">AMBALA,133001</a>';
							}
							else if($test==37)
							{
							 echo "1 GPO IN HIMACHAL PRADESH"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=171001">SHIMLA,171001</a>';
							}
							else if($test==38)
							{
							 echo "1 GPO IN JAMMU AND KASHMIR"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=190001">SRINAGAR,190001</a>';
							}
							else if($test==39)
							{
							 echo "1 GPO IN JHARKHAND"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=834001">RANCHI,834001</a>';
							}
							else if($test==40)
							{
							 echo "1 GPO IN KARNATAKA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=560001">BANGALORE,560001</a>';
							}
							else if($test==41)
							{
							 echo "1 GPO IN KERALA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=695001">THIRUVANANTHAPURAM,695001</a>';
							}
							else if($test==42)
							{
							 echo "0 GPO IN LAKSHADWEEP"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==43)
							{
							 echo "2 GPO IN MADHYA PRADESH"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=462001">BHOPAL,462001</a>'."&nbsp;"."&nbsp;"."&nbsp;";
							  echo '<a href="test.php?value=452001">INDORE,452001</a>';
							}
							else if($test==44)
							{
							 echo "2 GPO IN MAHARASHTRA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=400001">MUMBAI,400001</a>'."&nbsp;"."&nbsp;"."&nbsp;";
							  echo '<a href="test.php?value=440001">NAGPUR,440001</a>';
							}
							else if($test==45)
							{
							 echo "0 GPO IN MANIPUR"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==46)
							{
							 echo "1 GPO IN MEGHALAYA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=793001">SHILLONG,793001</a>';
							}
							else if($test==47)
							{
							 echo "0 GPO IN MIZORAM"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==48)
							{
							 echo "0 GPO IN NAGALAND"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==49)
							{
							 echo "2 GPO IN ORISSA"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=751001">BHUBANESWAR,751001</a>'."&nbsp;"."&nbsp;"."&nbsp;";
							  echo '<a href="test.php?value=753001">CUTTACK,753001 </a>';
							}
							else if($test==50)
							{
							 echo "0 GPO IN PONDICHERRY"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==51)
							{
							 echo "1 GPO IN PUNJAB"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=143001">AMRITSAR,143001</a>';
							}
							else if($test==52)
							{
							 echo "1 GPO IN RAJASTHAN"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=302001">JAIPUR,302001</a>';
							}
							else if($test==53)
							{
							 echo "0 GPO IN SIKKIM"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==54)
							{
							 echo "1 GPO IN TAMIL NADU"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=600001">CHENNAI,600001</a>';
							}
							else if($test==55)
							{
							 echo "0 GPO IN TRIPURA"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==56)
							{
							 echo "1 GPO IN UTTAR PRADESH"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=226001">LUCKNOW,226001</a>';
							}
							else if($test==57)
							{
							 echo "0 GPO IN UTTARAKHAND"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==58)
							{
							 echo "1 GPO IN WEST BENGAL"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=700001">KOLKATTA,700001</a>';
							}
							else if($test==25)
							{
							 echo "1 GPO IN ANDHRA PRADESH"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=500001">HYDERABAD,500001</a>';
							}
							else if($test==26)
							{
							 echo "0 GPO IN ARUNACHAL PRADESH"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==27)
							{
							 echo "1 GPO IN ASSAM"."&nbsp;"."&nbsp;"."&nbsp;";
							 echo '<a href="test.php?value=781001">GUWAHATI,781001</a>';
							}
							else if($test==29)
							{
							 echo "0 GPO IN CHANDIGARH"."&nbsp;"."&nbsp;"."&nbsp;";
							
							}
							else if($test==24)
							{
							   echo "0 GPO IN ANDAMAN AND NICOBAR ISLANDS"."&nbsp;"."&nbsp;"."&nbsp;";
							 
							 
							}
							?>
							</td></tr>
							
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