<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-8 col-sm-offset-2 col-md-offset-2">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Register</h3>
			 			</div>
			 			<div class="panel-body">
                        <form action="register.php" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                        <input class="form-control" name="name" placeholder="Full Name" type="text"/>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                        <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text"/>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<div class="row">
			    				<div class="col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control " placeholder="Password">
			    					</div>
			    				</div>
			    				<div class="col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="confirmation" id="password_confirmation" class="form-control " placeholder="Confirm Password">
			    					</div>
			    				</div>
                            </div>
                            <div class="row">
			    				<div class="col-md-6">
			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control " placeholder="Email Address">
			    			</div>
			    			    </div>
			    			    <div class="col-md-6">
			    			<div class="form-group">
                                <input autocomplete="off" autofocus class="form-control" name="phone" placeholder="123-456-7890" type="text"/>
			    			</div>
			    			</div>
			    			</div>
			    			<div>
			    			<div class="form-group col-xs-4 col-sm-4 col-md-4">
                                <input class="form-control" name="address" placeholder="Full Address or City" type="text"/>
			    			</div>
			    			<div class="form-group col-xs-4 col-sm-4 col-md-4">
                                <select class="form-control" name="state">
                                    <option value="invalid">Select state</option>
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
                            <div class="form-group col-xs-4 col-sm-4 col-md-4">
                                <input class="form-control" name="zipcode" placeholder="Zipcode" type="text"/>
                            </div>
			    			
                            </div>
                            
                            <div class="row col-md-12">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    					 <input type="radio" name="gender" value="male"> Male </input>
                                     <input type="radio" name="gender" value="female"> Female</input>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
                                        <select class="form-control sm" name="language">
                                              <option value="invalid">Select your language</option>
                                              <option value="english">English</option>
                                              <option value="spanish">Spanish</option>
                                              <option value="other">Other</option>
                                        </select>			    					
                                    </div>
			    				</div>
                            
                            
                            
			    			
			    			
			    			<div class="col-md-4 col-md-offset-4">
			    			<input type="submit" value="Register" class="btn btn-info btn-block">
			    		</div>
			    		</div>
			    		</form>
			    		
			    	<p class="col-md-12"> <br>
                        or <a href="login.php">log in</a> if you are already registered.
                    </p>
			    	
	    		
    		</div>
    	</div>
    </div>
</div>
</div>