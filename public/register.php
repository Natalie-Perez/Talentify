<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["username"]))
        {
            apologize("You must provide your username.");
        }
        else if (empty($_POST["password"]))
        {
            apologize("You must provide your password.");
        }
        else if (empty($_POST["confirmation"]))
        {
            apologize("You must confirm your password.");
        }
        //validate that passwords match
        else if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("Password does not match. Please re-enter password.");
        }
         else if (empty($_POST["name"]))
        {
            apologize("You must provide your name.");
        }
        else if (!preg_match("/^[a-zA-Z ]*$/",$_POST["name"])) 
        {
           apologize("Only letters and white space allowed"); 
        }
        else if (empty($_POST["phone"]))
        {
            apologize("You must enter your phone.");
        }
        else if(!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST["phone"])) 
        {
            apologize("You entered an invalid phone number.");
        }
        else if (empty($_POST["email"]))
        {
            apologize("You must enter your email address.");
        }
        else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
        {
            apologize("You entered an invalid email format.");
        }
        else if (empty($_POST["zipcode"]))
        {
            apologize("You must enter your zipcode.");
        }
        else if (!preg_match('/^\d{5}$/', $_POST["zipcode"]))
        {
            apologize("You must enter your 5 digit zipcode");
        }
        else if (empty($_POST["zipcode"]))
        {
            apologize("You must enter your zipcode.");
        }
        else if($_POST["state"] === "invalid")
        {
            apologize("You must select a state.");
        }
        else if(empty($_POST["gender"]))
        {
            apologize("Please select your gender.");
        }
        else if($_POST["language"] === "invalid")
        {
            apologize("Please select your language.");
        }
        
        // query database and for user, if username exists then return error
        if (( CS50::query("INSERT IGNORE INTO users (username, hash, name, phone, email, address, state, zipcode, gender, language) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)" 
        ,$_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT),$_POST["name"], $_POST["phone"], $_POST["email"], $_POST["address"], $_POST["state"], $_POST["zipcode"], $_POST["gender"], $_POST["language"] ) ) == false )
        {
            apologize("Username already exists.");
        }
        // else insert new user
        else 
        {
            //insert
            $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $_POST["username"];

            
            // send to index
            redirect("post.php");
        }

    }
    
    // else render form
    render("register_form.php", ["title" => "Register"]);

?>