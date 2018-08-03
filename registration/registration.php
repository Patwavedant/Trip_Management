<?php
if(isset($_REQUEST['Message']))
{
    echo $_REQUEST['Message'];
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="../icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="../css/icon-font.min.css">

       
        <link rel="stylesheet" type="text/css" href="../css/util.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>

    <body>
        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" name="registration" id="registration" action="registrationAction.php" method="post">
                    <span class="contact100-form-title">
                        Register
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Name is required" required>
                        <input class="input100" type="text" id="name" name="name" placeholder="Name">
                        <label class="label-input100" for="name">
                            <span class="lnr lnr-user"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz" required>
                        <input class="input100" type="email" id="email" name="email" placeholder="Email">
                        <label class="label-input100" for="email">
                            <span class="lnr lnr-envelope"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required" required>
                        <input class="input100" type="tel" pattern="^\d{10}$" required id="mobile" name="mobile" placeholder="Phone">
                        <label class="label-input100" for="phone">
                            <span class="lnr lnr-phone-handset"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required" required>
                        <input class="input100" type="password" pattern=".{6,}" title="Six or more characters" id="password" name="password" placeholder="Password">
                        <label class="label-input100" for="password">
                            <span class="lnr lnr-keyboard"></span>
                        </label>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Phone is required" required>
                        <input class="input100" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                        <label class="label-input100" for="confirmPassword">
                            <span class="lnr lnr-keyboard"></span>
                        </label>
                    </div>
                    <div class="container-contact100-form-btn">
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button type="submit" name="register" id="register" class="contact100-form-btn">Register</button>
                        </div>
                        <div class="wrap-contact100-form-btn">
                            <div class="contact100-form-bgbtn"></div>
                            <button type="button" name="home" id="home" onclick="window.location.href='../index.php'" class="contact100-form-btn">Home</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
       
       <script src="../js/main.js"></script>
        
    </body>

    </html>
