<?php
	include 'conn.php';
	
	$sql    = "SELECT * FROM b_cities WHERE cityID IN (SELECT cityID FROM b_links)";
	$result = mysqli_query($con,$sql);

	while ($row  = mysqli_fetch_row($result)) {
		?>
		 <div class="row row-cards">
			<div class="col-md-4 col-lg-12">
			   <div class="card">
				  <div class="card-body">
					 <h3 class="card-title"><?php echo $row[2] ?></h3>
				  </div>
				  <?php
					$sql1    = "SELECT * FROM b_links WHERE cityID = " .$row[1];
					$result1 = mysqli_query($con,$sql1);
					
					
					?>
						<div class="row">
					<?php
					while ($row1 = mysqli_fetch_row($result1)) {
						?>
							<div class="col-md-2 col-lg-4">
								<div class="card card-borderless">
								   <div class="card-body">
									  <div>
										 <iframe style="width: 100%; height:278px" src="<?php echo 'https://www.youtube.com/embed/' . $row1[2] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									  </div>
								   </div>
								</div>
							 </div>
						<?php
					}
					mysqli_next_result($con);
					
					?>
						</div>
					<?php
				  ?>
			   </div>
			</div>
		 </div>
		 <br>
		<?php
	}

	mysqli_close($con);
?>