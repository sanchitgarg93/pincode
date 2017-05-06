<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
Pincode of India,
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
</head>

<body>

<img src="images/main_logo.gif" width="310" height="61" alt="" />
        <div style="float:right;">
                          <a target="_blank" href="http://www.facebook.com/pages/BankCodein/119298371511244">
                          <img width="18" height="18" border="0" src="images/face.jpg"></a>
                          
<a href="mailto:?body=bankcode.in?tab=today
                         &amp;subject=Send enquiry to bankcode.in)">
                          <img width="18" height="18" border="0" src="images/mail-icon.jpg"></a>
                          
                          <a target="_blank" href="http://twitter.com/#!/bankcode1">
                          <img width="18" height="18" border="0" src="images/tweter-icon.jpg"></a>
                          <a target="_blank" href="http://blogspot.com"><img width="18" height="18" border="0" src="images/blogger-icon.jpg"></a>
                          
                          <a target="_blank" href="http://www.youtube.com/">
                          <img width="18" height="18" border="0" src="images/youtube-icon.jpg"></a>
                          <a target="_blank" href="https://www.linkedin.com/"><img width="18" height="18" border="0" src="images/in-icon.jpg"></a></div>
    <form action="googlesearchresult.php" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-3402879080584710:pfjrqifgcgh" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="ISO-8859-1" />
    <input type="text" name="q" size="20" />
    <input type="submit" name="sa" value="Search" /></div></form>
	
	
	
	<div class="main_menu">
          <div class="fl"><img width="7" height="39" alt="" src="images/main_menu_left.jpg"></div>
          <div class="fl">
            <table width="954" cellspacing="0" cellpadding="0" border="0">
              <tbody><tr>
                <td width="250" align="center"><a class="table" href="index.php">Home</a></td>
                <td width="1"><img width="1" height="39" alt="" src="images/main_menu_sap.jpg"></td>
                <td width="250" align="center"><a href="index.php">Search Pin Code</a></td>
                <td width="1"><img width="1" height="39" alt="" src="images/main_menu_sap.jpg"></td>
                <td width="200" align="center"><a href="pincode.php">Search By Pincode</a></td>
                <td width="1"><img width="1" height="39" alt="" src="images/main_menu_sap.jpg"></td>
                <td align="center"><a href="contactus.php">Contact Us</td>
                </tr>
                </tbody></table>
            </div>
          <div class="fr"><img width="7" height="39" alt="" src="images/main_menu_right.jpg"></div>
          </div></td>
        </tr>
      <tr>
        <td colspan="3" align="left" valign="top" style="padding-top:8px;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="352"><table width="352" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><img src="images/search_top.gif" alt="" width="352" height="4" /></td>
                </tr>
              <tr>
                <td align="left" valign="top" class="serch_middle"><table width="352" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td style="padding-left:10px;"><img src="images/search_icon.gif" alt="" width="14" height="15" /><span class="black_font">&nbsp;Searh Pin Codes</span></td>
                    </tr>
                  <tr>
                    <td><img src="images/serch_line.gif" alt="" width="350" height="1" /></td>
                    </tr>
                  <tr>
                    <td valign="top"><form id="form1" name="form1" method="post" action="search_result.php" style="margin:0px; padding:0px;">
					<?php
$sql="select * from state";
$row=mysql_query($sql);
?>
                      <table width="342" border="0" cellspacing="4" cellpadding="1" style="margin-top:0px; margin-left:10px; margin-bottom:0px;">
                        <tr>
                          <td width="106" align="left">Select State&nbsp;&nbsp;&nbsp;&nbsp; : </td>
                          <td colspan="4"><select name="state" id="state" class="widthed"  style="width:220px;">
  <option value="">--Select State--</option>
 <?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['state_id']; ?>"><?php echo $res['state_name']; ?></option>
		<?php
		}?>
  </select></td>
                          </tr>
                        <tr>
                          <td align="left">Select Districe&nbsp; : </td>
                          <td colspan="4"><select name="city" id="city" class="widthed" style="width:220px;">
  <option value="">District</option>
  <option value=""></option></select></td>
                          </tr>
                        <tr>
                          <td align="left">Select Alphabet</td>
                          <td colspan="4"><select name="alphabat" id="alphabat" class="widthed" style="width:220px;">
  <option value="">Post Office Name 1st Alphabet</option>
  <option value="">Select State/District to see 1st Alphabet List</option>
  
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
  </select></td>
                          </tr>
                        <tr>
                          <td align="left">Select office name</td>
                          <td colspan="4"><select name="post_office_name" id="post_office_name" style="width:220px;">
                            <option value=""></option></select></td>
                          </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td width="59"><input type="submit" name="submit" value="" style="background:url(images/search_button.gif) no-repeat; width:57px; height:25px; border:0px; cursor:pointer;"/></td>
                          <td width="133" colspan="3">&nbsp;</td>
                          </tr>
                        </table>
                      </form></td>
                    </tr>
                  </table></td>
                </tr>
              <tr>
                <td><img src="images/search_bottom.gif" alt="" width="352" height="5" /></td>
                </tr>
              </table></td>
            <td width="10">&nbsp;</td>
            <td align="left" valign="top"><a href="http://www.bankingonly.com/"><img src="images/banner.jpg" width="618" height="172" alt="" /></a></td>
            </tr>
          </table>
          
		  
		  
	
 <div id="ct">Search City</div>
    <div id="citynm" style="margin-bottom:8px;">&nbsp;</div>
        
     