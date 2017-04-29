<?php
	//type of searches
	if(isset($_POST["service"]) && empty($_POST["city"]) && empty($_POST["state"]))
	{
		print('<h2> All '. ucwords($_POST["service"]) .' Services offered </h2>');
	}
	
	else if(isset($_POST["service"]) && empty($_POST["city"]) && isset($_POST["state"]))
	{
		print('<h2> All '. ucwords($_POST["service"]) .' Services offered in '. $_POST["state"] . ' state  </h2>');
	}
	
	else if(empty($_POST["service"]) && isset($_POST["city"]) && empty($_POST["state"]))
	{
		print('<h2> All the services offered in '. ucwords($_POST["city"]) .'  </h2>');
	}
	
	else if(empty($_POST["service"]) && isset($_POST["city"]) && isset($_POST["state"]))
	{
		print('<h2> All the services offered in '. ucwords($_POST["city"]) .', ' . $_POST["state"] . '  </h2>');
	}
	
	else if(empty($_POST["service"]) && empty($_POST["city"]) && isset($_POST["state"]))
	{
		print('<h2> All Services offered in ' . $_POST["state"] . ' state </h2>');
	}
	
	else if(isset($_POST["service"]) && isset($_POST["city"]) && isset($_POST["state"]))
	{
		print('<h2>'. ucwords($_POST["service"]) .'  services in ' . ucwords($_POST["city"]) .', ' . $_POST["state"] . '  </h2>');
	}
	
		else if(!empty($_POST["service"]) && !empty($_POST["city"]) && empty($_POST["state"]))
	{
		print('<h2>'. ucwords($_POST["service"]) .'  services in ' . ucwords($_POST["city"]) .'  </h2>');
	}
	
	
	foreach ($positions as $position)
	{	  
		
		print('
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail services">
					<a href="vendor.php?u=' . $position["user_id"] . '">
						<img src="../img/'  . $position["service_type"] . '.png" alt="services">
					</a>
						<div class="caption">
							 ');
							 
							 if(empty($_POST["city"]) && empty($_POST["state"]))
								{
									print('<h2>'. ucwords($position["city"]) .' , ' . $position["state"] . '  </h2>');
								}

							else if(empty($_POST["service"]) && empty($_POST["state"]))
								{
									print('<h2>'. ucwords($position["service_type"]) .'  </h2> <h4>' . ucwords($position["city"]) . ', ' . $position["state"] .' </h4>');
								}
							else if(empty($_POST["service"]) && empty($_POST["city"]))
								{
									print('<h2>'. ucwords($position["service_type"]) .'  </h2> <h3>' . ucwords($position["city"]) . ', ' . $position["state"] .' </h3>');
								}
							else if(empty($_POST["service"]))
								{
									print('<h2>'. ucwords($position["service_type"]) .'</h2>');
								}
								
		        			print("	<p>" . $position["description"] .' <strong> <h4>'. $position["price"] .'</h4> </strong> </p>
					        <p>
					        	<a href="vendor.php?u=' . $position["user_id"] . '"><img style="width: 28%;" src="../img/contact.png"></a> 
					        </p>
					    </div>
			    </div>
			</div>
		
		');
		
		
	}
?>
		
