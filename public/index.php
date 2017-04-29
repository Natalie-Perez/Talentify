<?php

    // configuration
    require("../includes/config.php");
    
   
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("search_form.php", ["title" => "Search"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["city"]) && empty($_POST["service"]) && empty($_POST["state"]))
        {
            apologize("You must choose a field.");
        }
        
        else if(!empty($_POST["city"]))
        {
            if (!preg_match("/^[a-zA-Z ]*$/",$_POST["city"]))
            {
              apologize("You must enter a valid city"); 
            }
        }


        //create if statements and query for each situation, if a user entered both city and service and if only city or only service
        if(!empty($_POST["city"]) && !empty($_POST["service"]) && empty($_POST["state"]))
        {
            $rows = CS50::query("SELECT * FROM services WHERE city = ? AND service_type = ?", $_POST["city"], $_POST["service"]);
        }
        
        else if(!empty($_POST["service"]) && empty($_POST["city"]) && empty($_POST["state"]))
			{
				$rows = CS50::query("SELECT * FROM services WHERE service_type = ?", $_POST["service"]);
			}
			
		else if(empty($_POST["service"]) && !empty($_POST["city"]) && empty($_POST["state"]))
			{
				$rows = CS50::query("SELECT * FROM services WHERE city = ?", $_POST["city"]);
			}
			
		else if(empty($_POST["service"]) && !empty($_POST["city"]) && !empty($_POST["state"]))
			{
				$rows = CS50::query("SELECT * FROM services WHERE city = ? AND state = ?", $_POST["city"], $_POST["state"]);
			}
			
		else if(empty($_POST["service"]) && empty($_POST["city"]) && !empty($_POST["state"]))
			{
				$rows = CS50::query("SELECT * FROM services WHERE state = ?", $_POST["state"]);
			}
	
		else if(!empty($_POST["service"]) && !empty($_POST["city"]) && !empty($_POST["state"]))
			{
			    $rows = CS50::query("SELECT * FROM services WHERE service_type = ? AND city = ? AND state = ?", $_POST["service"], $_POST["city"], $_POST["state"]);
			}
			
		else if(!empty($_POST["service"]) && empty($_POST["city"]) && !empty($_POST["state"]))
			{
				$rows = CS50::query("SELECT * FROM services WHERE service_type = ? AND state = ?", $_POST["service"], $_POST["state"]);
			}
    }
        
        if($rows == false)
        {
            apologize("The service you were looking for is not available at the moment.");
        }
        
        foreach ($rows as $row)
        {
    
            $positions[] = 
            [
                "id" => $row["id"],
                "user_id" => $row["user_id"],
                "city" => $row["city"],
                "state" => $row["state"],
                "zipcode" => $row["zipcode"],
                "service_type" => $row["service_type"],
                "price" => "$" . number_format($row["price"],2),
                "description" => $row["description"]
            ];
       
        }

    render("search_print.php", ["title" => "Search Results", "positions" => $positions]);
?>