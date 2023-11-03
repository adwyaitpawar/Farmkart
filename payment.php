<?php

$fname = val($_POST["fullname"]);      
$email = val($_POST["email"]);  
$address = val($_POST["address"]);
$city = val($_POST["city"]);  
$state = val($_POST["state"]);  
$pcode = val($_POST["zip"]);  
$number = val($_POST["cardnumber"]);

function val($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmkartdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `card details` (`fname`, `email`, `address`, `city`, `state`, `pincode`, `card_number`) 
        VALUES ('$fname', '$email', '$address', '$city', '$state', '$pcode', '$number')";

$sql1 = "SELECT * FROM cart";
session_start();
$captcha = $_POST["captcha"];

    if (($_SESSION['CODE']==$captcha)) {

        $result = mysqli_query ($conn, $sql1);
        while ($row = mysqli_fetch_array($result))
        {
            $oname = $row["name"];
            $oimage = $row["image_link"];
            $oid = "#" . rand(100000,999999);
            $oquan = $row["quantity"];
            $odate = date("Y-m-d");
            $oprice = $row["price"] * $oquan;

            $sql2 = "INSERT INTO `order history`(`name`, `image_link`, `order_id`, `quantity`, `date`, `price`) VALUES ('$oname','$oimage','$oid','$oquan','$odate','$oprice')";    
            if (!($conn->query($sql2) === TRUE)) {
                echo "Error: " . $conn->error;
            }
        }

        $sql3 = "TRUNCATE TABLE `farmkartdb`.`cart`";

        if ($conn->query($sql) === TRUE && $conn->query($sql3) === TRUE) {

            header("location:Explore.php");
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        header("location:Payment_Gateway.php?cmessage='invalid'");
    }

$conn->close();
?>