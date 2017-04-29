<?php

    // configuration
    require("../includes/config.php");
    
        $rows = CS50::query("SELECT id, name, phone, email, address, state, zipcode, gender, language FROM users WHERE id = ? ", $_GET["u"]);
        $others = CS50::query("SELECT * FROM services WHERE user_id = ? ", $_GET["u"]);
    
    
        foreach ($rows as $row)
        {
    
            $contacts[] = 
            [
                "name" => $row["name"],
                "phone" => $row["phone"],
                "email" => $row["email"],
                "address" => $row["address"],
                "state" => $row["state"],
                "zipcode" => $row["zipcode"],
                "gender" => $row["gender"],
                "language" => $row["language"]
            ];
       
        }
        
        foreach ($others as $other)
        {
    
            $services[] = 
            [
                "user_id" => $other["user_id"],
                "city" => ucwords($other["city"]),
                "state" => ucwords($other["state"]),
                "zipcode" => $other["zipcode"],
                "service_type" => ucwords($other["service_type"]),
                "price" => "$" . number_format($other["price"],2),
                "description" => $other["description"]
            ];
       
        }
        
       
    
    render("vendor_print.php", ["title" => "Search Results", "contacts" => $contacts, "services" => $services]);
?>