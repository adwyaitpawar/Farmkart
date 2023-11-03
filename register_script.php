<?php

$fname = val($_POST["fname"]);  
$lname = val($_POST["lname"]);  
$date = val($_POST["date"]);  
$gender = val($_POST["gender"]);  
$phone = val($_POST["code"]) . " " . val($_POST["phno"]);  
$address = val($_POST["stname"]) . " " . val($_POST["arname"]);
$city = val($_POST["city"]);  
$state = val($_POST["state"]);  
$pcode = val($_POST["pin"]);  
$country = val($_POST["country"]);  
$email = val($_POST["email"]);  
$passwrd = val($_POST["pass"]);  
$cpasswrd = val($_POST["c-pass"]);  

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

$sql = "INSERT INTO users (fname, lname, gender, date, phone, address, city, state, pincode, country, email, password)
VALUES ('$fname','$lname','$gender','$date','$phone', '$address', '$city', '$state', '$pcode', '$country','$email', '$passwrd')";

if ($passwrd != $cpasswrd) {
	header("location:Register.php?emessage='passnotmatch'");
} elseif (!preg_match('/^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $passwrd)) {
	header("location:Register.php?imessage='invalid'");
} else {
	if ($conn->query($sql) === TRUE) {
		header("location:Login.php");
	} else {
		echo "Error: " . $conn->error;
	}
}

$conn->close();
?>