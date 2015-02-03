<?php

    // configuration
    require("../includes/config.php"); 
    
    // if form submit
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    
        // delete from listings
        $deletelisting = query("DELETE FROM listings WHERE id = ? AND time = ?", $_SESSION["id"], htmlspecialchars($_POST["deleteselect"]));
        
        // render delete display
        render("delete_display.php", ["title" => "Delete Successful"]);
 
    }  

    else 
    {
        // get current events
        $rows = query("SELECT time FROM listings WHERE id = ?", $_SESSION["id"]);;
        
        // render delete 
        render("delete_form.php", ["title" => "Delete", "rows" => $rows]);
    }
?>
