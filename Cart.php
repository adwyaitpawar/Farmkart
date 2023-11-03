<!DOCTYPE html>
<html>

<head>
    <title>Cart</title>
    <style>
        <?php include "cart.css" ?>
    </style>

<?php require_once('header.php');

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmkartdb";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $subtotal = 0;
        $getQuery = "SELECT * FROM `cart`";     
        $result = mysqli_query ($conn, $getQuery); ?>

  <div class="cart-container">
    <div class="cart-div">
      <div class="header">
        <h3 class="heading">Shopping Cart</h3>
        <div class="action">
        <form action="removeall.php" >
          <button type="submit" class="remove" style="color: red">Remove all</button>
        </form>
        </div>
      </div>

      <?php if (mysqli_num_rows($result)) { ?>
        
        <div class="container">
          <section id="cart">
          <?php
          while ($row = mysqli_fetch_array($result)) { 
                  
            $pid = $row["id"];
            $sql = "SELECT * FROM products WHERE id = $pid";
            $res = mysqli_query ($conn, $sql);
            while ($prod = mysqli_fetch_array($res)) {
              $pquan = $prod["quantity"];
            } ?>
            <article class="product">
              <header>
                <a><img src="<?php echo $row["image_link"] ?>" alt="crop" /></a>
              </header>
  
              <div class="content">
                <h1><?php echo $row["name"] ?></h1>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
                numquam quis perspiciatis ea ad omnis provident laborum dolore in
                atque.
              </div>
  
              <div class="footer-content">
                <?php $quan = $row["quantity"];
                $price = $row["price"];
                $totalprice = $price * $quan; 
                $subtotal += $totalprice; ?>
                <form method="post" action="">
                  <button type="submit" name="minusButton" class="qt-minus">-</button>
                  <input type="hidden" name="id-Value" value="<?php echo $pid ?>">
                  <input type="hidden" name="quan-Value" value="<?php echo $quan ?>">
                </form>
                <span class="qt"><?php echo $quan ?></span>
                <form method="post" action="">
                  <button type="submit" name="plusButton" class="qt-plus">+</button>
                  <input type="hidden" name="id-value" value="<?php echo $pid ?>">
                  <input type="hidden" name="quan-value" value="<?php echo $quan ?>">
                  <input type="hidden" name="pquan-value" value="<?php echo $pquan ?>">
                </form>
                <h2 class="full-price"><?php echo "Rs. " . $totalprice ?></h2>
  
                <h2 class="price"><?php echo "Rs. " . $price ?></h2>
              </div>
              <div class="buttons">
                <form method="post" action="">
                  <div style="top: 8px" class="delete">
                    <button type="submit" name="deleteButton"><i class="fas fa-trash-alt icon-large"></i></button>
                    <input type="hidden" name="idValue" value="<?php echo $pid ?>">
                  </div>
                </form>
                <div style="top: 60px" class="save">
                  <i class="fas fa-star icon-large"></i>
                </div>
              </div>
            </article>
            <?php } ?>
          </section>
        </div>
      <?php } else { ?>
        <h2 class="cart-empty">No Items found!</h2>
      <?php }

      if (isset($_POST["deleteButton"])) {
        $pid = $_POST['idValue'];
        $deleteQuery = "DELETE FROM `cart` WHERE `id` = $pid";
        if ($conn->query($deleteQuery) === TRUE) {
          echo("<script>location.href = 'Cart.php';</script>");
        } else {
          echo "Error: " . $conn->error;
        }
      }
      if (isset($_POST["minusButton"]) && $_POST['quan-Value']>1) {
        $pid = $_POST['id-Value'];
        $qty = $_POST['quan-Value'];
        $qty = $qty - 1;
        $minusQuery = "UPDATE `cart` SET `quantity` = $qty WHERE `cart`.`id` = $pid";
        $result = $conn->query($minusQuery);
        if ($result) {
          echo("<script>location.href = 'Cart.php';</script>");
        } else {
          echo "Error: " . $conn->error;
        }
      }
      if (isset($_POST["plusButton"]) && $_POST['quan-value'] < $_POST['pquan-value']) {
        $pid = $_POST['id-value'];
        $qty = $_POST['quan-value'];
        $qty = $qty + 1;
        $plusQuery = "UPDATE `cart` SET `quantity` = $qty WHERE `cart`.`id` = $pid";
        $result = $conn->query($plusQuery);
        if ($result) {
          echo("<script>location.href = 'Cart.php';</script>");
        } else {
          echo "Error: " . $conn->error;
        }
      }
      ?>

      <div id="site-footer">
        <div class="container clearfix">
          <div style="float: left;">
            <h2 class="subtotal">Subtotal: Rs<span id="subtt"> <?php echo $subtotal ?></span></h2>
            <h3 class="tax">Taxes (5%): Rs<span id="tax"> <?php echo ($subtotal * 0.05) ?></span></h3>
            <h3 class="shipping">Shipping: Rs<span id="ship"> 100</span></h3>
          </div>

          <div style="float: right;">
            <h1 class="total">Total: Rs<span id="tot"> <?php echo ($subtotal + $subtotal * 0.05) . " (Shipping Extra)" ?></span></h1>
            <?php if ($subtotal) { ?>
              <a class="btn" href="Payment_Gateway.php">Checkout</a>
              <?php } else { ?>
                <a class="btn" href="">Checkout</a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php require_once('footer.php'); ?>