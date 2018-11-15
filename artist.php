<?php
 $db = mysql_connect("localhost", "root", "");
 mysql_select_db("art",$db);
 $result = mysql_query("SELECT * FROM artist where username='$user_check'",$db);
  ?>
					<h2><center><u><b>Artists</u></h2></center> 
						<section class="panel">
							<div class="panel-body">
								<table class="table table-bordered table-striped mb-none">
									<thead>
										<tr>
											<th>Name</th>
											<th>Age</th>
											<th>Award</th>
											<th>Birth Place</th>
											<th>Art</th>
										</tr>
									</thead>
									<tbody>
								<?php
while ($myrow = mysql_fetch_array($result)) 
	{ 
		echo "<TR><TD>";
		echo $myrow["Name"];
		echo "<TD>";
		echo $myrow["Age"];
		echo "<TD>";
		echo $myrow["Award"];
		echo "<TD>";
		echo $myrow["Birth_of_place"];
		echo "<TD>";
		echo $myrow["Arts"];
		echo "</TR>";
	} 
	echo "</TABLE>";
	 ?> 