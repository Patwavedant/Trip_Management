<?php
$message = '';
if(isset($_REQUEST['Message']))
{
    $message = $_REQUEST['Message'];
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Sign In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="../icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <!--===============================================================================================-->
    </head>

    <body>
   
        <div class="container-contact100">
            <div class="wrap-contact100">            
                <form class="contact100-form validate-form" name="login" id="login" action="loginAction.php" method="post">
                    <span class="contact100-form-title">
                        Sign In
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" type="email" id="email" name="email" placeholder="Email" >
                        <label class="label-input100" for="email">
                            <span class="lnr lnr-envelope"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required">
                        <input class="input100" type="password" id="password" name="password" placeholder="Password" >
                        <label class="label-input100" for="password">
                            <span class="lnr lnr-keyboard"></span>
                        </label>
                    </div>
                    
                    <div style="color: white"><?php echo $message; ?></div>
                    
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button type="submit" name="signin" id="signin" class="contact100-form-btn">Sign In</button>
                        </div>
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button type="button" name="home" id="home" onclick="window.location.href='../index.php'" class="contact100-form-btn">Home</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
        
        <div id="dropDownSelect1"></div>

        <script src="../js/jquery-3.2.1.min.js"></script>

        <script src="../js/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>

    </body>

    </html>
