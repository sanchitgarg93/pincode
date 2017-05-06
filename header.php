<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
Pin Code of India
<?php
if(isset($_GET['state']))
{
  $sql="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.state_id='".$_GET['state']."' order by ct.city_name ASC";  
$row=mysql_query($sql);
$res=mysql_fetch_array($row);
echo "State"."&nbsp;".$res['state_name'];

}
if(isset($_GET['city']))
{
 $sq="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.city_id='".$_GET['city']."' order by ct.city_name ASC";  
$ro=mysql_query($sq);
$re=mysql_fetch_array($ro);
echo "State"."&nbsp;".$re['state_name']."&nbsp;"."district"."&nbsp;".$re['city_name'];

}
if(isset($_GET['id']))
{
 $sq="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.city_id='".$_GET['id']."' order by ct.city_name ASC";  
$ro=mysql_query($sq);
$re=mysql_fetch_array($ro);
echo "State"."&nbsp;".$re['state_name']."district".$re['city_name'];

}

?>
</title>
<?php if(isset($_GET['state']))
{
  $sql="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.state_id='".$_GET['state']."' order by ct.city_name ASC";  
$row=mysql_query($sql);
$res=mysql_fetch_array($row);
}
?>
<?php
 if(isset($_GET['city']))
{
 $sq="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.city_id='".$_GET['city']."' order by ct.city_name ASC";  
$ro=mysql_query($sq);
$re=mysql_fetch_array($ro);
echo "State".$re['state_name']."district".$re['city_name'];

}
?>
<meta name="description" content="Pincode of <?php echo $res['state_name'] ?> professional offshore outsourcing and website designing, development and search engine optimization company in India that provides best web development, SEM, SMO and SEO services across the world." />

<meta name="keywords" content="Pincode State &nbsp;<?php if(isset($_GET['state']))
{
  $sql="select * from city_table ct left join state st on ct.state_id=st.state_id where ct.state_id='".$_GET['state']."' order by ct.city_name ASC";  
$row=mysql_query($sql);
$res=mysql_fetch_array($row);
echo $res['state_name'];

}
 ?>, Web Development and SMO, SEM, SEO company India, Website Optimization,  SEO Training Delhi, SEO Services India" />

<link href="style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery.js">
</script>
<script type="text/javascript" >
jQuery(document).ready(function() {
jQuery('select[name=state]').change(function() {
var st=jQuery('select[name=state]').val();

var postdata='state='+st;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#city').html(output);
		
		}
		});

		
		


});
jQuery('select[name=state]').change(function() {
var ste=jQuery('select[name=state]').val();

var postdata='state1='+ste;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#citynm').html(output);
		
		}
		});

		
		


});





jQuery('select[name=alphabat]').change(function() {
var state=jQuery('select[name=state]').val();
var city=jQuery('select[name=city]').val();
var alf=jQuery('select[name=alphabat]').val();

var postdata='alphabat='+alf+'&stat='+state+'&city='+city;

jQuery.ajax({
		url: 'remote.php',
		type:'POST',
		data: postdata,
		success: function(output) {
		jQuery('#post_office_name').html(output);
		
		}
		});
		
		


});



});

</script>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>

<style>
* {
    box-sizing: border-box;
}
.header_logo
{
	//border: 1px solid blue;
	padding:15 0px;
}
img {
    max-width: 100%;
    height: auto;
}
.row:after {
    content: "";
    clear: both;
    display: block;
}
[class*="col-"] {
    float: left;	
    padding: 15px;
    width: 100%;
}
@media only screen and (min-width: 600px) {
    .col-s-1 {width: 8.33%;}
    .col-s-2 {width: 16.66%;}
    .col-s-3 {width: 25%;}
    .col-s-4 {width: 33.33%;}
    .col-s-5 {width: 41.66%;}
    .col-s-6 {width: 50%;}
    .col-s-7 {width: 58.33%;}
    .col-s-8 {width: 66.66%;}
    .col-s-9 {width: 75%;}
    .col-s-10 {width: 83.33%;}
    .col-s-11 {width: 91.66%;}
    .col-s-12 {width: 100%;}
	
}
@media only screen and (min-width: 768px) {
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
	
	
	.footerleft{
		float:left;
	}
	.footerright{
		float:right;
	}
	.formleftside{
		text-align:right;
		
	}
	.formrightside{
		text-align:left;
	}
}
</style>
</head>

<body>
	<div class="header_logo">
		<a href="index.php">
			<img src="images/main_logo.png" width="310" height="61" alt="" />
		</a>
	</div>
	<!--
	<div style="float:right;">
		<a target="_blank" href="http://www.facebook.com/pages/BankCodein/119298371511244">
            <img width="18" height="18" border="0" src="images/face.jpg">
		</a>
        <a href="mailto:?body=bankcode.in?tab=today&amp;subject=Send enquiry to bankcode.in)">
			<img width="18" height="18" border="0" src="images/mail-icon.jpg">
		</a>
        <a target="_blank" href="http://twitter.com/#!/bankcode1">
            <img width="18" height="18" border="0" src="images/tweter-icon.jpg">
		</a>
        <a target="_blank" href="http://blogspot.com"><img width="18" height="18" border="0" src="images/blogger-icon.jpg">
		</a>
        <a target="_blank" href="http://www.youtube.com/">
			<img width="18" height="18" border="0" src="images/youtube-icon.jpg">
		</a>
        <a target="_blank" href="https://www.linkedin.com/"><img width="18" height="18" border="0" src="images/in-icon.jpg">
		</a>
	</div>
	-->
	<div class="row">
		<div class="col-4 col-s-12"></div>
		<div class="col-4 col-s-6"></div>
		
		<!--<div style="width: 980px;"align="right">-->
			<form action="googlesearchresult.php" id="cse-search-box">
				<input type="hidden" name="cx" value="partner-pub-3402879080584710:pfjrqifgcgh" />
				<input type="hidden" name="cof" value="FORID:10" />
				<input type="hidden" name="ie" value="ISO-8859-1" />
		<div class="col-4 col-s-6" style=" padding:0px;text-align:right;">
				<input type="text" name="q" size="18%" style="height:5.3%;" />
				<input type="submit" name="sa" value="Google Search" class="googlesearchbar" />
		</div>
			</form>
		
	</div>
	
	<div class="row main_menu" style="border:10px solid yellow;">
		<div class="col-6 col-s-6" style=" text-align:center">
			<a href="index.php">Search Pin Code</a>
		</div>
		<div class="col-6 col-s-6" style=" text-align:center">
			<a href="pincode.php#Enter%20Pincode">Search By Pincode</a>
		</div>
	</div>
	
	<!--
	<div class="main_menu">
        <div class="fl">
			<table width="954" height="39" cellspacing="0" cellpadding="0" border="0">
            <tbody>
				<tr>
					<td style="font-weight:400" width="250" align="center"><a class="table" href="index.php">Home</a></td>
					<td style="font-weight:400" width="250" align="center"><a href="index.php">Search Pin Code</a></td>
					<td style="font-weight:400" width="200" align="center"><a href="pincode.php#Enter%20Pincode">Search By Pincode</a></td>
					<!--<td style="font-weight:400" align="center"><a href="contactus.php">Contact Us</td>
				</tr>
            </tbody>
			</table>
        </div>
	</div>
	-->
		<!------------------ SEARCH TABLE ----------------------->
		
		<!--
		<div width="954px">
		-->
		
    <form id="form1" name="form1" method="post" action="search_result.php" style="margin:0px; padding:0px;">
			<!--
			<table width="650px" border="0px" style = "padding:20px;margin: 0 auto;color:#FFFFFF;bgcolor:#FFFFFF" >
			-->
		<div class="row" style="border:10px solid pink;">
			<!--<div class="col-2" style=" "></div>-->
<?php
	$sql="select * from state";
	$row=mysql_query($sql);
?>
			<div class="col-2 col-s-2" style=" "></div>
			<div class="col-4 col-s-4" style="text-align:center;">
				<div class="formleftside" style="font-size:20px;">Select State&nbsp;&nbsp; : </div>
			</div>
			<div class="col-4 col-s-4" style="text-align:center;">
				<div class="formrightside"> <select name="state" id="state" class="widthed" style="width:94%;">
					<option value=""><!--Select State-->Select</option>
				
<?php
	while($res=mysql_fetch_array($row))
	{
?>
					<option value="<?php echo $res['state_id']; ?>"><?php echo $res['state_name']; ?></option>
<?php
	}
?>				</select>
				</div>
			</div>
			<div class="col-2 col-s-2" style=" "></div>
	
			<!--<div class="col-2" style=" "></div>-->
		</div>
					
		<div class="row" style="border:10px solid pink;">
			<div class="col-2 col-s-2" style=" "></div>	
            
			<div class="col-4 col-s-4" style=" text-align:center;">
				<div style="font-size:20px;">Select City/District&nbsp; : </div>
			</div>
			
			<div class="col-4 col-s-4" style=" text-align:center;">
				<select name="city" id="city" class="widthed" style="width:94%;">
					<option value=""><!--Select District-->Select</option>
					<option value=""></option>
				</select>
			</div>
			
			<div class="col-2 col-s-2" style=" "></div>
		</div>
		
		<div class="row" style="border:10px solid pink;">
			<div class="col-2 col-s-2" style=" "></div>	
            
			<div class="col-4 col-s-4" style=" text-align:center;">
				<div style="font-size:20px;">Select Post Office Name's Ist Alphabet :</div>
			</div>
			
			<div class="col-4 col-s-4" style=" text-align:center;">
						<select name="alphabat" id="alphabat" class="widthed" style="width:94%;">
							<option value="">Select<!--Post Office Name 1st Alphabet--></option>
							<option value="">Select this to view all post office names<!--Select State/District to see 1st Alphabet List--></option>
							
							<option>a</option>
							<option>b</option>
							<option>c</option>
							<option>d</option>
							<option>e</option>
							<option>f</option>
							<option>g</option>
							<option>h</option>
							<option>i</option>
							<option>j</option>
							<option>k</option>
							<option>l</option>
							<option>m</option>
							<option>n</option>
							<option>o</option>
							<option>p</option>
							<option>q</option>
							<option>r</option>
							<option>s</option>
							<option>t</option>
							<option>o</option>
							<option>v</option>
							<option>w</option>
							<option>x</option>
							<option>y</option>
							<option>z</option>
						</select>
					</div>
			
			<div class="col-2 col-s-2" style=" "></div>
		</div>
		
		<div class="row" style="border:10px solid pink;">
			<div class="col-2 col-s-2" style=" "></div>	
            
			<div class="col-4 col-s-4" style=" text-align:center;">
				<div style="font-size:20px;">Select Post Office Name : </div>
			</div>
			
			<div class="col-4 col-s-4" style=" text-align:center;">
						<select name="post_office_name" id="post_office_name" class="widthed" style="width:94%;">
							<option value=""></option>
						</select>
					</div>
			
			<div class="col-2 col-s-2" style=" "></div>
		</div>
		
		<div class="row" style="border:10px solid green;">
		<div class="col-12 col-s-12" style=" text-align:center;">
				<input type="submit" name="submit" value="Search" class="myButton"/>
			</div>
			<!--
			<div class="col-2" style=" "></div>	
			<div class="col-4" style=" text-align:center;"></div>
			<div class="col-4" style=" text-align:center;">
				<input type="submit" name="submit" value="Search" class="myButton"/>
			</div>
			<div class="col-2" style=" "></div>
			-->
		</div>
	</form>
		 
		  
	

	<div id="ct">Search By City/District&nbsp;</div><br /><br />
    <div id="citynm" style="font-family: 'Lato', 'Lato Latin', 'Helvetica Neue', Helvetica, Arial, sans-serif;font-weight: 300;margin-bottom:8px;margin-left:40px;margin-right:150px;line-height:30px;">&nbsp;</div>
        
     