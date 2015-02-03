<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via POST 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // ensure passwords aren't blank
        if (empty($_POST["old"]) || empty($_POST["new"]) == true) 
	    {
		    apologize("Please fill out all fields.");
	    }
	    if ($_POST["new"] !== $_POST["confirmation"])
	    {
		    apologize("Please make sure your new passwords match.");
	    }
	  
	    
	    // check if old password is correct
	    
	    $rows = query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
        $row = $rows[0];
       
	    if (crypt($_POST["old"], $row["hash"]) != $row["hash"])
        {
            apologize("Your old password is incorrect.");
        }
       
        else
        {
            $replace = query("UPDATE users SET hash = ? WHERE id = ?", crypt($_POST["new"]), $_SESSION["id"]);
        }
	
        // redirect to password display
        render("password_display.php", ["title" => "Password Changed"]);
    }
    
    else
    {
        // else render password form
        render("password_form.php", ["title" => "Change Password"]);
    }

?>
