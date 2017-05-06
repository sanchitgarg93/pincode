<div class="wrap">

<div class="header">  <?php
 include("header.php");
 ?>
   </div>
   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
    

   
   <div class="center">
  <div class="centerleft">
  
  <?php
			   include("left_panel.php");
			  ?>
  </div> 
           
		   <div class="centercenter">  
		   <?php
		   
		   $sql="select * from post_off_detail_table po left join post_office_table pt on po.post_off_id=pt.post_off_id left join state st on st.state_id=po.state_id left join city_table ct on ct.city_id=po.city_id where po.pin_code='".$_GET['value']."'"; 
		   $row=mysql_query($sql);
		   
		   ?>
		   
		   
		   
		    <span class="black_font">Other Post Offices With Same Pincode</span>
			<br /><br />
			<div>
			        
                              <div>
							  <?php
							  while($res=mysql_fetch_array($row))
							  {
							  $re1=$res['state_name'];
							  ?>
							 

							  
							  <table width="580">
							  
							  <tr><td colspan="2" bgcolor="#FFFF00" style="color:#000000; font-size:16px; font-weight:bold;">Details of Post Office : <?php if(isset($res['post_off_name'])) { echo $res['post_off_name'];  } ?>, <?php if(isset($res['city_name'])) { echo $res['city_name']; } ?></td></tr>
							  <tr><td width="250" style="color:#000000; font-weight:bold;">Post Office:</td>
							  <td><?php if(isset($res['post_off_name'])) { echo $res['post_off_name'];  } ?></td>
							  </tr> 
							  <tr><td  width="100"style="color:#000000; font-weight:bold;">District:</td>
							  <td><?php if(isset($res['city_name'])) { echo $res['city_name']; } ?></td>
							  </tr>
							  <tr><td style="color:#000000; font-weight:bold;">State:</td>
							  <td><?php if(isset($res['state_name'])) { echo $res['state_name']; } ?></td>
							  </tr> 
							  <tr><td style="color:#000000; font-weight:bold;">Pin Code:</td>
							  <td><?php if(isset($res['pin_code'])) { echo $res['pin_code']; } ?></td>
							  </tr> 
							  </table>
							  <br />
                                
                               <?php
							   }
							   ?>   
              </div>
                           
    
	   <div>
							  
							  </div>
							 
                              

							<div>
							<tr><td>&nbsp;&nbsp;</td></tr>
							</div>
								
			<div>
			  <script type="text/javascript" language="javascript">

 google_ad_client = "pub-3402879080584710"; /* 728x90, created 11/14/09 */ 

 google_ad_slot = "8297775385";

  google_ad_width = 610; 

  google_ad_height = 110; 

 </script>

      <script type="text/javascript" language="javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> </script>
         
		 <?php
		$postoff='';
    $city = '';
	$state='';		  
				  
		if(isset($res['post_off_name']) && !empty($res['post_off_name']))
		{		$postoff=$res['post_off_name'].', ';   }
		
		if(isset($res['city_name']) && !empty($res['city_name']))
		{		$city=$res['city_name'].', ';   }
		
		if(isset($re1) && !empty($re1))
		{		$state=$re1.', ';   }
   
	
    $country = 'india';
    $key = "AIzaSyBBR2u6FwMpVt3pGuqC_7e5oZHC2QlnwLI";
    $address = urlencode($postoff.$city.$state.$country);
    $sturl = 'http://maps.google.com/maps/geo?q='.$address.'&output=csv&key='.$key;
    $ch = curl_init($sturl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    $res = curl_exec($ch);
    $resinfo = curl_getinfo($ch);
    curl_close($ch);
    if($resinfo['http_code'] === 200) {
      $res = explode(",",$res);
      $latitude = $res[2];
      $longitude = $res[3];
      $value = '<img src="http://maps.google.com/staticmap?key='.$key.'&size=590x280&markers='.$latitude .','.$longitude.'&zoom=10" alt="Webuser Location" />';
    } else {
      $value = '';	//Should have been $value = 'N/A';
    }

echo $value;
?>
				  
			</div>
		<!--
            <div style="margin-top:5px;">
				<div class="fb-like" data-href="http://pincode.bankcode.in/" data-send="true" data-layout="button_count" data-width="450" data-show-faces="true" data-font="verdana"></div>
            </div>
			<div>
				<p>You can join us  on <a href="http://www.bankingonly.com/">Bankingonly.com</a>&nbsp;and you get all information about banks,bank jobs,banking news and bank job test you get every thing you need so join us on our site bankingonly.com </p>
		   </div>
		 -->
  
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