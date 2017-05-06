<div class="wrap">
	<div class="header">  
<?php
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
	if(isset($_POST['submit']))
	{
		if(!(empty($_POST['state'])))	
			$state=$_POST['state'];
		else
			$stateErr = "*State is required";
		if(!(empty($_POST['city'])))	
			$city=$_POST['city'];
		else
			$cityErr = "*City is required";
		if(!(empty($_POST['post_office_name'])))	
			$post_office_name=$_POST['post_office_name'];
		else
			$post_office_nameErr = "*Post Office Name is required";
			
			//$state=$_POST['state'];
			//$city=$_POST['city'];
			//$post_office_name=$_POST['post_office_name'];

	if(!(isset($stateErr) ||  isset($cityErr) || isset($post_office_nameErr)))
	{
		$sq="select pt.post_off_name,ct.city_name from post_off_detail_table po left join state st on po.state_id=st.state_id left join city_table ct on ct.city_id=po.city_id left join post_office_table pt on pt.post_off_id=po.post_off_id where po.state_id='".$state."' and po.city_id='".$city."' and po.post_off_id='".$post_office_name."'"; 
		$rew=mysql_query($sq);
		$re=mysql_fetch_array($rew);

		$sql="select * from post_off_detail_table po left join state st on po.state_id=st.state_id left join city_table ct on ct.city_id=po.city_id left join post_office_table pt on pt.post_off_id=po.post_off_id where po.state_id='".$state."' and po.city_id='".$city."' and po.post_off_id='".$post_office_name."'"; 
		$row=mysql_query($sql);  
?>
		    <span class="black_font">Details of Post Office <?php echo $re['post_off_name'];?> ,<?php echo $re['city_name'];?>                     </span>
		<div>
<?php
		if(mysql_num_rows($row)>=1)
		{
			$res=mysql_fetch_array($row)
?>                             
            <div>
				<table width="400">
					<tr><td width="165" style="color:#000000; font-weight:bold;">Post Office:</td>
						<td width="235"><?php if(isset($res['post_off_name'])){ echo $res['post_off_name']; } ?></td>
					</tr>
					<tr><td style="color:#000000; font-weight:bold;">District:</td>
						<td><?php if($res['city_name']){ echo $res['city_name'];} ?></td>
					</tr> 
					<tr><td style="color:#000000; font-weight:bold;">State:</td>
						<td><?php if($res['state_name']) { echo $res['state_name']; }?></td>
					</tr> 
					<tr><td style="color:#000000; font-weight:bold;">Pin Code:</td>
						<td><?php if($res['pin_code']) { echo $res['pin_code']; }?></td>
					</tr> 
				</table>
            </div>
<?php
		} 
?>          <div>
				<table width="600" border="0">
<?php
		$s="select count('po.pin_code') as pintotal,po.pin_code,ct.city_name,pt.post_off_name from post_off_detail_table po left join state st on po.state_id=st.state_id left join city_table ct on ct.city_id=po.city_id left join post_office_table pt on pt.post_off_id=po.post_off_id where po.pin_code='".$res['pin_code']."'"; 
		$row1=mysql_query($s);
		while($rest=mysql_fetch_array($row1))
		{
?>
					<tr><td colspan="2" bgcolor="#FFFF00" style="color:#000000; font-size:16px; font-weight:bold;"><!--Other--><?php echo $rest['pintotal']; ?> more Post Offices share the Same PIN Code <?php echo $rest['pin_code']; ?> in <?php echo $rest['city_name']; ?></td></tr>
					<tr><td><?php  echo '<a href="search_pin_total.php?value='.$rest["pin_code"].'">'.'Click Here to See Post Office With Same Pin Code'.'</a>'.'&nbsp;';  ?></td></tr>
				</table>
<?php
		} 
	}
	}
?>
			</div>
			<div>
				<tr><td>&nbsp;&nbsp;</td></tr>
			</div>
			<div>
<script type="text/javascript" language="javascript">

 google_ad_client = "pub-3402879080584710"; /* 728x90, created 11/14/09 */ 

 google_ad_slot = "8297775385";

  google_ad_width = 610; 

  google_ad_height = 100; 

</script>

<script type="text/javascript" language="javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"> </script>

<?php
	$postoff='';
    $city = '';
	$state='';		  
				  
	if(isset($res['post_off_name']) && !empty($res['post_off_name']))
	{
		$postoff=$res['post_off_name'].', ';   
	}
	if(isset($res['city_name']) && !empty($res['city_name']))
	{		
		$city=$res['city_name'].', ';   
	}
	if(isset($res['state_name']) && !empty($res['state_name']))
	{		
		$state=$res['state_name'].', ';   
	}
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
    if($resinfo['http_code'] === 200)
	{
		$res = explode(",",$res);
		$latitude = $res[2];
		$longitude = $res[3];
		$value = '<img src="http://maps.google.com/staticmap?key='.$key.'&size=590x280&markers='.$latitude .','.$longitude.'&zoom=10" alt="Webuser Location" />';
    } 
	else 
	{
	  $value = '';	//Should have been $value = 'N/A';
    }
	echo $value;
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