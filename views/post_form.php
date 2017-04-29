<div class="container">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
            	<div class="panel panel-default">
            		<div class="panel-heading">
    			    	<h3 class="panel-title">Post a service</h3>
			 		</div>
			 		<div class="panel-body">
                        <form action="post.php" method="post">
                            <fieldset>
                                 <div>
                                     <div class="col-md-4">
                                        <input class="form-control form-group" name="city" placeholder="Enter your city" type="text"/>
                                    </div>
                                    <div class="col-md-4">
                                    <select class="form-control form-group" name="state">
                                        <option value="invalid">Select your state</option>
                                    	<option value="AL">Alabama</option>
                                    	<option value="AK">Alaska</option>
                                    	<option value="AZ">Arizona</option>
                                    	<option value="AR">Arkansas</option>
                                    	<option value="CA">California</option>
                                    	<option value="CO">Colorado</option>
                                    	<option value="CT">Connecticut</option>
                                    	<option value="DE">Delaware</option>
                                    	<option value="DC">District Of Columbia</option>
                                    	<option value="FL">Florida</option>
                                    	<option value="GA">Georgia</option>
                                    	<option value="HI">Hawaii</option>
                                    	<option value="ID">Idaho</option>
                                    	<option value="IL">Illinois</option>
                                    	<option value="IN">Indiana</option>
                                    	<option value="IA">Iowa</option>
                                    	<option value="KS">Kansas</option>
                                    	<option value="KY">Kentucky</option>
                                    	<option value="LA">Louisiana</option>
                                    	<option value="ME">Maine</option>
                                    	<option value="MD">Maryland</option>
                                    	<option value="MA">Massachusetts</option>
                                    	<option value="MI">Michigan</option>
                                    	<option value="MN">Minnesota</option>
                                    	<option value="MS">Mississippi</option>
                                    	<option value="MO">Missouri</option>
                                    	<option value="MT">Montana</option>
                                    	<option value="NE">Nebraska</option>
                                    	<option value="NV">Nevada</option>
                                    	<option value="NH">New Hampshire</option>
                                    	<option value="NJ">New Jersey</option>
                                    	<option value="NM">New Mexico</option>
                                    	<option value="NY">New York</option>
                                    	<option value="NC">North Carolina</option>
                                    	<option value="ND">North Dakota</option>
                                    	<option value="OH">Ohio</option>
                                    	<option value="OK">Oklahoma</option>
                                    	<option value="OR">Oregon</option>
                                    	<option value="PA">Pennsylvania</option>
                                    	<option value="RI">Rhode Island</option>
                                    	<option value="SC">South Carolina</option>
                                    	<option value="SD">South Dakota</option>
                                    	<option value="TN">Tennessee</option>
                                    	<option value="TX">Texas</option>
                                    	<option value="UT">Utah</option>
                                    	<option value="VT">Vermont</option>
                                    	<option value="VA">Virginia</option>
                                    	<option value="WA">Washington</option>
                                    	<option value="WV">West Virginia</option>
                                    	<option value="WI">Wisconsin</option>
                                    	<option value="WY">Wyoming</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control form-group" name="zipcode" placeholder="Enter your zipcode" type="text"/>
                                </div>
                                <div class="col-md-6">
                                    <select class="form-control form-group" name="service">
                                          <option value="invalid">Select the service you offer</option>
                                          <option value="beauty">Beauty</option>
                                          <option value="computer">Computer</option>
                                          <option value="creative">Creative</option>
                                          <option value="household">Household</option>
                                          <option value="labor">Labor</option>
                                          <option value="legal">Legal</option>
                                          <option value="lessons">Lessons</option>
                                          <option value="pet">Pet</option>
                                          <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <input class="form-control form-group" name="price" placeholder="Price" type="text"/> </div>
                                <div class="col-md-12">
                                    <textarea class="form-control form-group" name="description" placeholder="Describe your service" rows="4" cols="50" type="text"></textarea></textarea> </div>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" value="Post" class="btn btn-info btn-block">
                            </div>
                        </fieldset>
                    </form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>