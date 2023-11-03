<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <style>
        <?php include "profile.css"?>
    </style>

<?php require_once('header.php');

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmkartdb";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $sql = "SELECT * FROM `user_curr`";
        $result = mysqli_query ($conn, $sql);
        if($result){
        while ($row = mysqli_fetch_array($result))
        {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $gender= ucfirst($row["gender"]);
            $phone = $row["phone"];
            $address = $row["address"];
            $email = $row["email"];
            $username=strtolower($fname."_".$lname);
        }}
        
        ?>   
    <form action="logout.php">
        <center>
            <div class="profile" >
                <div class="offer-heading">
                    <h1>PROFILE</h1>
                </div>
                <?php if($gender=="Male"){?>
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" height="150px" width="150px" style="border-radius: 50%; border:3px solid grey;"><?php } else{?>
                <img src="https://bootdey.com/img/Content/avatar/avatar3.png" height="150px" width="150px" style="border-radius: 50%; border:3px solid grey;"><?php } ?>
                <table>
                    <tr class="head">
                        <td> Personal Information</td>
                    </tr>
                    <tr>
                        <td><span>Name<span></td>
                        <td><div class="value"> <?php echo $fname." ".$lname ?></div></td>
                    </tr>
                    <tr>
                        <td><span>Username<span></td>
                        <td><div class="value"> <?php echo $username ?></div></td>
                    </tr>
                    <tr>
                        <td><span>Website<span></td>
                        <td><div class="value">www.Farmkart.com</div></td>
                    </tr>
                    <tr>
                        <td>
                            &nbsp;
                        </td>    
                    </tr>
                    <tr class="head">
                        <td> Private Information</td>
                    </tr>
                    <tr>
                        <td><span>Email<span></td>
                        <td><div class="value"> <?php echo $email?></div></td>
                    </tr>
                    <tr>
                        <td><span>Phone<span></td>
                        <td><div class="value"> <?php echo $phone ?></div></td>
                    </tr>
                    <tr>
                        <td><span>Gender<span></td>
                        <td><div class="value"><?php echo $gender ?></div></td>
                    </tr>
                </table> 
                <button type="submit" value="LogOut">LogOut</button>
            </div>
        </center>
    </form>

<?php require_once('footer.php'); ?>