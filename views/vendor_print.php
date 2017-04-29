<form action="vendor.php" method="post">
	<div class="container">
    <div class="jumbotron jumbotron-sm" style="background-color:#339966;margin-top:2%;color:white;">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h2" style="margin-top:-2%">
                    Contact Vendor
                </h1>
            </div>
        </div>
    </div>
</div>

		<?php
		foreach ($contacts as $contact)
		{
		print('<div class="row">
        <div class="col-sm-6">
            <div class="well">
            	<h3 style="line-height:20%;"><i class="glyphicon glyphicon-user" style="line-height:6%;color:#339966"></i> Name: </h3>
                <p style="margin-top:6%;line-height:35%">' . ucwords($contact["name"]) . '</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="glyphicon glyphicon-phone-alt" style="line-height:6%;color:#339966"></i> Phone: </h3>
                <p style="margin-top:6%;line-height:35%">' . $contact["phone"] . '</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="glyphicon glyphicon-envelope" style="line-height:6%;color:#339966"></i> Email Address:</h3>
                <p style="margin-top:6%;line-height:35%">' . ucwords($contact["email"]) . '</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="	glyphicon glyphicon-home" style="line-height:6%;color:#339966"></i> Location:</h3>               
                <p style="margin-top:6%;line-height:35%">' . $contact["address"] . ', '. $contact["state"] .', '. $contact["zipcode"] . '</p>
                <br />
                <br />
                <h3 style="line-height:20%;"><i class="glyphicon glyphicon-info-sign" style="line-height:6%;color:#339966"></i> More info:</h3>
                <p style="margin-top:6%;line-height:35%"> ' . ucwords($contact["gender"]) . ', '. ucwords($contact["language"]) . '</p>
            </div>
        </div>'); 
		}
        ?>
        <div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.7871931321697!2d-80.19234158469371!3d25.77759171423324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b69faa51d149%3A0x125a97627c728fa9!2sThe+Idea+Center!5e0!3m2!1sen!2sus!4v1493239492511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>        </div>
    </div>
</div>

	<div class="panel panel-default">
    	<div class="panel-heading" role="tab" id="headingTwo">
      		<h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Other Services
        		</a>
      		</h4>
   		</div>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		    <div class="panel-body">
	        	    <table id="other_services" class="table">
						<?php
							print("<tr>");
								print("<th>Service Type</th>");
								print("<th>City</th>");
								print("<th>State</th>");
								print("<th>Zipcode</th>");
								print("<th>Price</th>");
								print("<th>Description</th>");
							print("</tr>");
								  
							foreach ($services as $service)
							{
								
								print("<tr>");
								print("<td>" . ucwords($service["service_type"]) . "</td>");
								print("<td>" . ucwords($service["city"]) . "</td>");
								print("<td>" . $service["state"] . "</td>");
								print("<td>" . $service["zipcode"] . "</td>");
								print("<td>" . $service["price"] . "</td>");
								print("<td>" . $service["description"] . "</td>");
								print("</tr>");
							}
							 
						?>
					</table>	
	        	
		    </div>
	    </div>
  	</div>
</form>