<?php

    // configuration
    require("../includes/config.php"); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // allow for sorting of listings (from http://stackoverflow.com/questions/9387113/php-sorting-a-list-using-a-drop-down-menu?rq=1)
        
        $sort = $_POST["order"]!="choose"?$_POST["order"]:"time";
        $rows = query("SELECT name, quantity, price, details, phone, time FROM listings ORDER BY ".$sort." ASC");
        
        // render buy listings display
        render("buy_display.php", ["title" => "Buy", "rows" => $rows]);
    }
    
    else
    {
        // sort by most recent first 
        $rows = query("SELECT name, quantity, price, details, phone, time FROM listings ORDER BY time ASC");
        
        // render buy listings display
        render("buy_display.php", ["title" => "Buy", "rows" => $rows]);
    }
    


?>
