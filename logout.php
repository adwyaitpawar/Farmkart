<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Farmkartdb";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "TRUNCATE TABLE `Farmkartdb`.`user_curr`";
        if ($conn->query($sql) === TRUE) {

            header("location:Home.php");
        }
?>