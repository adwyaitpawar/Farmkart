<?php

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

if (!empty($_POST['email']) && !empty($_POST['pass'])) {
    session_start();
    $email = val($_POST["email"]);  
    $passwrd = val($_POST["pass"]);
    $captcha = $_POST["captcha"];
    
    $sql = "SELECT * FROM users WHERE Email='$email' AND Password='$passwrd'";
    $result = mysqli_query ($conn, $sql);

    if ($_SESSION['CODE']==$captcha) {
        if(mysqli_num_rows($result) != 0){
            while ($row = mysqli_fetch_array($result))
            {
                $fname = $row["fname"];
                $lname = $row["lname"];
                $gender= $row["gender"];
                $phone = $row["phone"];
                $address = $row["address"].",".$row["city"].",".$row["state"].",".$row["pincode"];
                $email = $row["email"];
                $sql2 = "INSERT INTO `user_curr` (`fname`, `lname`, `gender`, `phone`, `address`, `email`) 
                VALUES ('$fname', '$lname', '$gender', '$phone', '$address', '$email')";   
                if (!(mysqli_query($conn,$sql2) === TRUE)) {
                    echo "Error: " . $conn->error;
                }
            }
            $sql3 = "TRUNCATE TABLE `farmkartdb`.`cart`";
            $sql4 = "TRUNCATE TABLE `farmkartdb`.`order history`";
            if (($conn->query($sql3) === TRUE) && ($conn->query($sql4) === TRUE)) {
                header("location:Explore.php");
            } else {
                echo "Error: " . $conn->error;
            }
        }
        else {
            header("location:Login.php?imessage='invalid'");
        }
    } else {
        header("location:Login.php?cmessage='invalid'");
    }
} else {
    echo "All fields are required!";
}

$conn->close();
?>
