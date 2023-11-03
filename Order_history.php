<!DOCTYPE html>
<html>

<head>
    <title>Order History</title>
    <style>
        <?php include "order_history.css" ?>
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

    $getQuery = "SELECT * FROM `order history`";     

    $result = mysqli_query($conn, $getQuery);
    $rows = mysqli_num_rows($result); ?> 
    
    <div class="orders-div"> <?php
    if ($rows) { ?>
        <legend>Your Orders</legend>
        <table class="orders-table">
            <thead>
                <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-center">Order ID</td>
                    <td class="text-center">Qty</td>
                    <td class="text-center">Status</td>
                    <td class="text-center">Date Added</td>
                    <td class="text-right">Total</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td class="text-center">
                        <img width="120" class="img-thumbnail" src="<?php echo $row['image_link'] ?>">
                    </td>
                    <td class="text-left"><?php echo $row["name"] ?></td>
                    <td class="text-center"><?php echo $row["order_id"] ?></td>
                    <td class="text-center"><?php echo $row["quantity"] ?></td>
                    <td class="text-center">Shipped</td>
                    <td class="text-center"><?php echo $row["date"] ?></td>
                    <td class="text-right">Rs. <?php echo $row["price"] ?></td>
                    <td class="text-center"><a class="btn" title="" data-toggle="tooltip" href=""><i class="fa fa-reply"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <h2>No Orders found!</h2>
    <?php } ?> 
    </div> 

<?php require_once('footer.php'); ?>