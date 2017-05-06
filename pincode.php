<div class="wrap">
	<div class="header">
<?php
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
			
			<div width="650px" text-align="center">
				<!--<span class="black_font">Pin Code Of India</span>-->
				<form name="form1" action="pincode_result.php" method="post">
					<table width="600px" text-align="center">
						<tr>
							<td style="font-size:20px;">Enter Pincode: &nbsp;</td>
							<td><input type="text" pattern="[0-9]{6}" name="pincode" class="widthedpincode" style="width:200px;"/>
							<input type="submit" name="submit" value="Search" class="myButtonpincode" style="width:200px;background-color:#3333FF;"/>
							</td>
						</tr>
					</table>
				</form>
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
			<div>
				<!--<p>You can join us join us on <a href="http://www.bankingonly.com/">Bankingonly.com</a>&nbsp;and you get all information about banks,bank jobs,banking news and bank job test you get every thing you need so join us on our site bankingonly.com </p>-->
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