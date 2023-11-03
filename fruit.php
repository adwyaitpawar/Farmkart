<!DOCTYPE html>
<html>

<head>
    <title>Fruit</title>
    <style>
        <?php include "explore.css" ?>
    </style>

<?php require_once('header.php'); ?>

    <div class="offer-heading">
        <h1>Our Products</h1>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "farmkartdb";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $limit = 20;    


        if (isset($_GET["page"])) {    
            $page_number  = $_GET["page"];    
        }   else {    
            $page_number=1;
        }       


        $initial_page = ($page_number-1) * $limit;       


        $getQuery = "SELECT * FROM `products` WHERE category='fruit' LIMIT $initial_page, $limit";     

        $result = mysqli_query ($conn, $getQuery); ?>

                <div class="products">
                <?php
               while ($row = mysqli_fetch_array($result))
               {
                    ?>
                    <form method="post" action="add_to_cart.php">
                        <div class="product">
                            <div class="img-div">
                                <img src="<?php echo $row["image_link"] ?>" alt="Image">
                            </div>

                            <div class="tag-name">
                                <?php if ($row["quantity"] > 0) { ?>
                                    <i class="fas fa-shopping-cart"></i>
                                    <button type="submit" name="add">Add To Cart</button>
                                    <input type="hidden" name="p_id" value="<?php echo $row["id"] ?>">
                                    <input type="hidden" name="p_name" value="<?php echo $row["name"] ?>">
                                    <input type="hidden" name="p_image" value="<?php echo $row["image_link"] ?>">
                                    <input type="hidden" name="p_price" value="<?php echo $row["price"] ?>">
                                <?php } else { ?>
                                    <span style="cursor: default;">Out Of Stock</span>
                                <?php } ?>
                            </div>
                            <div class="name">
                                <p><?php echo $row["name"] ?></p>
                                <p><?php echo "Rs. " . $row["price"] ?></p>
                            </div>
                        </div>
                    </form>
                    <?php
               } ?>
               </div>
            <div class="items">
               
            <?php

            $connection = mysqli_connect($servername, $username, $password, $dbname);
            $query = "SELECT * FROM `products` WHERE category='fruit'";

            $result = mysqli_query($connection, $query);

            if ($result)
            {
                $total_rows = mysqli_num_rows($result);
                mysqli_free_result($result);
            }    

            $total_pages = ceil($total_rows / $limit);     

            $pageURL = "";             

            if($page_number>=2){   

                echo "<a href='Fruit.php?page=".($page_number-1)."'>  Prev </a>";   

            }                          

            for ($i=1; $i<=$total_pages; $i++) {   

                if ($i == $page_number) {   
                    $pageURL .= "<a class = 'active' href='Fruit.php?page=" .$i."'>".$i." </a>";   
                }               

                else  {   
                    $pageURL .= "<a href='Fruit.php?page=".$i."'>".$i." </a>";     
                }   

            };     

            echo $pageURL;    

            if($page_number<$total_pages){   

                echo "<a href='Fruit.php?page=".($page_number+1)."'>  Next </a>";   

            } ?>  
            </div>   
            <div class="inline">   
                <input id="page" type="number" min="1" style="height: 34px;" max="<?php echo $total_pages?>" placeholder="<?php echo $page_number."/".$total_pages; ?>" required>   
                <button style="height: 34px;" onClick="go2Page();">Go</button>   
            </div>    
            
    <?php require_once('footer.php'); ?>
    
<script>

    function go2Page()   
    {   
        var page = document.getElementById("page").value;   

        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   

        window.location.href = 'Fruit.php?page='+page;   
    }   
</script>
 
