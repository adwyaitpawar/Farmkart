<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmkartdb";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "TRUNCATE TABLE `Farmkartdb`.`cart`";
        if ($conn->query($sql) === TRUE) {

            header("location:Cart.php");
        }
?>