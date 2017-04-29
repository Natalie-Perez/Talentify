<?php
	foreach ($services as $service)
	{	  
		
		
			print('
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
				<a href="my_services.php?u=' . $service["id"] . '"><img id="remove" src="../img/remove.png"></a> 
						<div class="caption left">
							<h2> '. $service["service_type"] .'</h2>
							 <h4> '. ucwords($service["city"]) .', ' . $service["state"] . ', '. $service["zipcode"] .'</h4>	
								<p>' . $service["description"] .' <strong> <h4>'. $service["price"] .' </h4> </strong> </p>
					        
					    </div>
			    </div>
			</div>
		');
		
	}
?>
