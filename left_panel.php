
			Search By State<br />

				 <?php
				 $sql="select *  from state";
				 $row=mysql_query($sql);
				 while($res=mysql_fetch_array($row))
				 {
				 ?>
			
				
                 <?php
				 
				  echo '<a href="search_city.php?state='.$res["state_id"].'" style="cursor:pointer;  color:#0000EE; text-decoration:none;">'.$res["state_name"].'</a>'.'<br />';
				 }
				 ?> 
				
				