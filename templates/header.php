<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>


        <?php if (isset($title)): ?>
            <title>HY Tix: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>HY Tix</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts1.js"></script>

        
        <!-- check if user is logged in -->
        <?php if (isset($_SESSION["id"])) { ?>
         
        <!-- display bootstrap navbar -->
        <nav class="navbar navbar-default" role="navigation">
        
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="/"> <img style="max-width:100px; margin-top: -7px;" src="../img/logo.png"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li <?=echoActiveClassIfRequestMatches("")?>>
                        <a href="/">Home<span class="sr-only">(current)</span></a></li>
                    <li <?=echoActiveClassIfRequestMatches("buy")?>>
                        <a href="buy.php">Buy<span class="sr-only">(current)</span></a></li>
                    <li <?=echoActiveClassIfRequestMatches("sell")?>>
                        <a href="sell.php">Sell<span class="sr-only">(current)</span></a></li>
                  </ul>
                  
                      <ul class="nav navbar-nav navbar-right">
                        <ul class="nav navbar-nav">
                        <li <?=echoActiveClassIfRequestMatches("mylistings")?>>
                            <a href="mylistings.php">My Listings<span class="sr-only">(current)</span></a></li>
                        <li <?=echoActiveClassIfRequestMatches("delete")?>>
                            <a href="delete.php">Delete<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> User <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="password.php">Change password</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php">Log Out</a></li>
                          </ul>
                        </li>
                    </ul>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        <?php } ?>
        
        <!-- implement active class check for bootstrap nav bar -->
        <?php 

        function echoActiveClassIfRequestMatches($requestUri)
        {
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active"';
        }
        ?>
                   

    
    </head>

    <body>

        <div class="container">
            
            <!-- check if user not logged in -->
            
            <?php if (!isset($_SESSION["id"])) { ?>    
            <div id="top">
                <a href="/"><img alt="HY Tix" src="/img/logo.png"/></a>
            </div>
            <?php } ?>
            <br/>
            
            

            
            <div id="middle">
