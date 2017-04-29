<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("post_form.php", ["title" => "Post"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["city"]))
        {
            apologize("You must provide your city.");
        }
         else if($_POST["state"] === "invalid")
        {
            apologize("You must select a state.");
        }
        else if (empty($_POST["zipcode"]))
        {
            apologize("You must provide your zipcode.");
        }
        else if (!preg_match('/^\d{5}$/', $_POST["zipcode"]))
        {
            apologize("You must enter your 5 digit zipcode");
        }
        else if ($_POST["service"] === "invalid")
        {
            apologize("You must provide type the of service you offer");
        }
        else if (empty($_POST["price"]))
        {
            apologize("If this service is offered for free please note that");
        }
         else if (!ctype_digit($_POST["price"]))
        {
            apologize("Invalid price");
        }
        
         else if (empty($_POST["description"]))
        {
            apologize("Please describe the service you're offering.");
        }

            //insert
            CS50::query("INSERT INTO services (user_id, city, state, zipcode, service_type, price, description ) VALUES(?, ?, ?, ?, ?, ?, ?)", $_SESSION["id"], $_POST["city"], $_POST["state"], $_POST["zipcode"], $_POST["service"], $_POST["price"], $_POST["description"] );
            $id = $rows[0]["id"];

            // send to search
            redirect("index.php");
        // }

    }
    
    // else render form
    render("post_form.php", ["title" => "Post"]);

?>