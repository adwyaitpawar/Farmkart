<?php

$productid = val($_POST["p_id"]);   
$productname = val($_POST["p_name"]);   
$productimage = val($_POST["p_image"]);   
$productprice = val($_POST["p_price"]);   

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

$query = "SELECT * FROM cart";

$result = mysqli_query ($conn, $query);
$found = 0;

while ($row = mysqli_fetch_array($result)){
    if ($row["id"]==$productid) {
        $quan = $row["quantity"] + 1;
        $upsql = "UPDATE `cart` SET `quantity` = $quan WHERE `cart`.`id` = $productid";
        $found = 1;
        if ($conn->query($upsql) === TRUE) {
            header("location:Explore.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if ($found == 0) {
    
    $sql = "INSERT INTO cart (id, name, image_link, quantity, price)
    VALUES ('$productid', '$productname','$productimage','1','$productprice')";
    
    if ($conn->query($sql) === TRUE) {
        header("location:Explore.php");
    } else {
        echo "Error: " . $conn->error;
    }
}


$conn->close();
?>