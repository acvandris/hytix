<?php
    
    // configuration
    require("../includes/config.php");
    
    
    // else if user reached page via POST (as by submitting a form via POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if all fields provided
        if (empty($_POST["name"]) || empty($_POST["quantity"]) || empty($_POST["price"]) || empty($_POST["details"]) || empty($_POST["phone"]))
        {
            apologize("Please fill out all fields.");
            exit;
        }
        
        // add to listings
        $adder = query("INSERT INTO listings (name, quantity, price, details, phone, id) VALUES (?, ?, ?, ?, ?, ?)", htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["quantity"]), htmlspecialchars($_POST["price"]), htmlspecialchars($_POST["details"]), htmlspecialchars($_POST["phone"]), $_SESSION["id"]);

        // render sell display
        render("sell_display.php", ["title" => "Sell Success!"]);

    }
    else
    {
        // render sell form
        render("sell_form.php", ["title" => "Sell"]);
    }
    
        
    





?>
