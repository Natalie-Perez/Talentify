<?php


    // configuration
    require("../includes/config.php");
    
        $rows = CS50::query("SELECT * FROM services WHERE user_id = ? ", $_SESSION["id"]);
        if($rows == false )
        {
            apologize("You haven't posted any services yet");
        }
        foreach ($rows as $row)
        {
    
            $services[] = 
            [
                "id" => $row["id"],
                "user_id" => $row["user_id"],
                "city" => ucwords($row["city"]),
                "state" => $row["state"],
                "zipcode" => $row["zipcode"],
                "service_type" => ucwords($row["service_type"]),
                "price" => "$" . number_format($row["price"],2),
                "description" => $row["description"]
            ];
       
        }
        
        // Delete the service from my services table
        if(!empty($_GET["u"]))
        {
      	$remove = CS50::query("DELETE FROM services WHERE id = ?", $_GET["u"]);
      	redirect("my_services.php");
        }
    
    // render portfolio
    render("my_services_print.php", ["title" => "Search Results", "services" => $services]);
    // redirect("/");
?>
