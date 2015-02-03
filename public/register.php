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
        // validate username and password
        if (empty($_POST["username"]) || empty($_POST["password"]) == true) 
	    {
		    apologize("Please enter a username and password.");
	    }
	    if ($_POST["password"] !== $_POST["confirmation"])
	    {
		    apologize("Please make sure your passwords match.");
	    }
	    
	    
	    // add username to db and check if already exists
	    $result = query("INSERT INTO users (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
	    if ($result === false)
        {
            apologize("Username already exists.");
        }
	
	    // login user
	    $rows = query("SELECT LAST_INSERT_ID() AS id");
	    $id = $rows[0]["id"];

	    $_SESSION["id"] = $id;

        // redirect to home
        redirect("/");
    }

?>
