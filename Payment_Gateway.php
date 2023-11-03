<!DOCTYPE html>
<html>

<head>
    <title>Payment Gateway</title>
    <style>
        <?php include "payment_gateway.css" ?>
    </style>

<?php require_once('header.php'); ?>

    <div class="payment-div">
        <h1 id="heading">Checkout</h1>
        <div class="container">
            <form action="payment.php" method="post">
                <div class="row">
                    <div class="col-50">
                        <h3>Billing Address</h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fullname" placeholder="Your Name" required>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="Your Email" required>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="Your Address" required>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Your City" required>

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" placeholder="Your State" required>
                            </div>
                            <div class="col-50">
                                <label for="zip">Pincode</label>
                                <input type="text" id="zip" name="zip" placeholder="Pincode" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Payment</h3>
                        <label for="fname">Accepted Cards</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="ccnum">Credit card number</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
                        <label for="expmonth">Exp Month</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="Exp. Month" required>
                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Exp Year</label>
                                <input type="text" id="expyear" name="expyear" placeholder="Exp. Year" required>
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="CVV Num" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-50">
                                <label for="captcha">Captcha</label>
                                <input type="text" id="expyear" name="captcha" placeholder="Enter Captcha" required>
                            </div>
                            <div class="col-50">
                                <img src="captcha.php" alt="Captcha">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <?php if (isset($_GET["cmessage"])) { ?>
                        <p style="margin: 20px 0 0; color: red;text-align: center;margin-bottom: 30px;">Invalid Captcha!</p>
                    <?php } ?>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
            </form>
        </div>
    </div>
    
<?php require_once('footer.php'); ?>