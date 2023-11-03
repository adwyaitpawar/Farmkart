<html>

<head>
    <title>Register</title>
    <style>
        <?php include "register.css" ?>
    </style>
    <script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="Home.php"><img src="images/logonew.png" alt="Farmkart" width="170px"></a>
        <a href="Login.php">Login</a>
        <a style="pointer-events: none;">|</a>
        <a href="Home.php">Home</a>
    </div>
    </div>
    <div class="heading">
        <h1>Farmkart</h1>
        <h2>Register to Buy Farming Essentials at Best Price.</h2>
    </div>
    <div class="box">
        <form method="post" action="register_script.php">
            <div class="form-content">
                <h3>Enter the following details: </h3>
                <p class="warning">* All fields are required!</p>
                <fieldset>
                    <legend>Personal Details</legend>
                    <label for="fname">First Name: </label><br>
                    <input name="fname" placeholder="e.g. Shivansh" size="40px"><br>
                    <label for="lname">Last Name: </label><br>
                    <input name="lname" placeholder="e.g. Mishra" size="40px"><br>
                    <label for="date">Date of Birth: </label><br>
                    <input type="date" name="date"><br>
                    <label for="gender">Gender: </label><br>

                    <span class="inp">
                        <input type="radio" id="male" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="female">
                        <label for="female">Female</label>
                    </span><br>
                </fieldset>
                <fieldset>
                    <legend>Contact Details</legend>
                    <label for="pnum">Phone Number: </label><br>
                    <select id="code" name="code">
                        <option value="+91">+91 IND</option>
                        <option value="+1">+1 USA</option>
                        <option value="+32">+32 BEL</option>
                        <option value="+92">+92 PAK</option>
                        <option value="+93">+93 AFG </option>
                        <option value="+54">+54 ARG</option>
                        <option value="+2">+2 ALAS</option>
                        <option value="+3">+3 ALB</option>
                    </select>
                    <input type="tel" style="margin: 7px;" name="phno" placeholder="9876543210"><br>
                    <label for="stname">Street Name:</label>
                    <input type="text" name="stname" maxlength="50"><br><br>
                    <label for="Arname">Area Name:</label>
                    <input type="text" name="arname" maxlength="50"><br><br>
                    <label for="city">City:</label>
                    <input type="text" name="city" maxlength="15"><br><br>
                    <label for="State">State:</label>
                    <select name="state">
                        <option value="-1">Select</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                    </select><br><br>
                    <label for="pincode">Pincode:</label>
                    <input type="text" name="pin" pattern="[0-9]{6}" maxlength="6"><br>
                    <label for="country">Country:</label>
                    <select name="country">
                        <option value="india">India</option>
                        <option value="usa">USA</option>
                        <option value="china">China</option>
                        <option value="japan">Japan</option>
                        <option value="brazil">Brazil</option>
                        <option value="africa">Africa</option>
                        <option value="ireland">Ireland</option>
                        <option value="australia">Australia</option>
                        <option value="england">England</option>
                        <option value="pakistan">Pakistan</option>
                        <option value="nepal">Nepal</option>
                        <option value="bhutan">Bhutan</option>
                        <option value="uk">UK</option>
                        <option value="korea">Korea</option>
                        <option value="bangladesh">Bangladesh</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="srilanka">Sri Lanka</option>
                    </select>
                </fieldset>
                <fieldset>
                    <legend>Login Details</legend>
                    <label>Email Address: </label><br>
                    <input type="email" id="em" placeholder="e.g. xyz@abc.com" size="40px" autocomplete="on"
                        name="email"><br>
                    <label>Password: </label><br>
                    <input type="password" size="40px" name="pass" id="psw"><br>
                    <label> Confirm Password: </label><br>
                    <input type="password" size="40px" name="c-pass" id="c-psw"><br>
                    <span class="warning">* Must contain at least one uppercase, lowercase, digit, special character and
                        min 8 characters</span><br>
                </fieldset>

            </div>
            <center>
                <?php if (isset($_GET["emessage"])) { ?>
                        <p style="margin: 0; color: red;">Passwords do not match!</p>
                <?php } elseif (isset($_GET["imessage"])) { ?>
                        <p style="margin: 0; color: red;">Invalid Password!</p>
                <?php } ?><br>
                <button type="submit">Submit</button><br>
                <button type="reset">Reset</button>
            </center>
        </form>
        <p class="para-1">By clicking the submit button, you agree to our <a href="#">Terms and Condition</a> and <a
                href="#">Policy Privacy.</a></p>
        <p class="para-2">Already have an account? <a href="Login.php">Log in</a>.</p>
    </div>
    
<?php require_once('footer.php'); ?>