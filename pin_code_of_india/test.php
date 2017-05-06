<?php
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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
</head>

<body>
<form id="form1" name="form1" method="post" action="search_result.php">
<?php
$sql="select * from state";
$row=mysql_query($sql);
?>
  <table width="332" border="0">
    <tr>
      <td width="260">state</td>
      <td width="56"><label>
        <select name="state" id="state" >
		<option value="">--Choose State--</option>
		<?php
		while($res=mysql_fetch_array($row))
{?>
		<option value="<?php echo $res['state_id']; ?>"><?php echo $res['state_name']; ?></option>
		<?php
		}?>
        </select>
      </label></td>
    </tr>
	
    <tr>
      <td>city</td>
      <td><label>
        <select name="city" id="city">
		<option >--select city--</option>
		<option ></option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>first alphabat </td>
      <td><label>
        <select name="alphabat" id="alphabat">
		<option>--select aiphabat--</option>
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
      </label></td>
    </tr>
    <tr>
      <td>post office name </td>
      <td><label>
        <select name="post_office_name" id="post_office_name">
		<option></option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="submit" value="Search" />
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
