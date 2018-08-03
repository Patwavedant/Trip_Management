<?php

if(isset($_REQUEST['Message']))
{
    echo $_REQUEST['Message'];
}
?>
    <!DOCTYPE HTML>
    <html>

    <head>
        <meta charset="utf-8">
        <title>Rise - Trip Manager</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300,100' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>

    <body>
        <div class="header">    
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="main-title text-center">
                            <h2>Rise Trip Manager</h2>
                            <p>Plan your trip<br>Keep all your travel plans in one place, access it anywhere and on any device, that too free</p>
                            <div>&nbsp;</div>
                            <a href="registration/registration.php" class="subscribe-tag page-scroll">Sign Up</a>
                            <a href="registration/login.php" class="subscribe-tag page-scroll">Sign In</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" id="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center footer-line">
                        <p>2018 &copy; <a target="_blank" href="http://www.learnatrise.in/">RISE</a> | Designed By Vedant Patwa | <a target="_blank" href="http://www.rishabhsoft.com/">Rishabh Software</a></p>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    </body>

    </html>
