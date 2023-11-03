<html>

<head>
    <title>Log in</title>
    <style>
        <?php include "register.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="Home.php"><img src="images/logonew.png" alt="Farmkart" width="170px"></a>
        <a href="Register.php">Register</a>
        <a style="pointer-events: none;">|</a>
        <a href="Home.php">Home</a>
    </div>
    <div class="heading">
        <h1>Farmkart</h1>
        <h2>Register to Buy Farming Essentials at Best Price.</h2>
    </div>
    <div class="box">
        <form method="post" action="login_script.php">
            <div class="form-content form-div">
                <h3>Enter the following details: </h3>
                <label>Email Address: </label><br>
                <input type="email" size="40px" name="email" autocomplete="on" required><br>
                <label>Password: </label><br>
                <input type="password" size="40px" name="pass" required><br>
                <label>Enter Captcha: </label><br>
                <input type="text" size="20px" name="captcha" required>
                <img src="captcha.php" alt="Captcha">
            </div>
            <center>
                <?php if (isset($_GET["imessage"])) { ?>
                        <p style="margin: 20px 0 0; color: red;">Invalid email or password!</p>
                    <?php } else if (isset($_GET["cmessage"])) { ?>
                        <p style="margin: 20px 0 0; color: red;">Invalid Captcha!</p>
                    <?php } ?>
                <button type="submit" class="login-button">Log in</button>
            </center>
        </form>
        <p class="para-2">New to Farmkart? <a href="Register.php">Create an account</a>.</p>
    </div>

<?php require_once('footer.php'); ?>