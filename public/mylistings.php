<?php

    // configuration
    require("../includes/config.php"); 
    
    // query the db for listings
    $rows = query("SELECT name, quantity, price, details, phone, time FROM listings WHERE id = ?", $_SESSION["id"]);
     
    // render my listings display
    render("mylistings_display.php", ["title" => "My Listings", "rows" => $rows]);


?>
