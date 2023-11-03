<!DOCTYPE html>
<html>

<head>
    <title>Search Result</title>
    <style>
        <?php include "explore.css" ?>
    </style>

<?php require_once('header.php'); ?>

<?php

$dbhost = 'localhost';
$dbname = 'farmkartdb';
$dbuser = 'root';
$dbpass = '';

try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connection error :" . $exception->getMessage();
} ?>

<div class="page-banner">
    <div class="offer-heading">
        <h1>
            <?php
            $search_text = strip_tags($_REQUEST['search_text']);
            echo "Search By: '" . $search_text . "'";
            ?>
        </h1>
    </div>
</div>

<div class="products">
    <?php
    $search_text = '%' . $search_text . '%';

    $statement = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? or category LIKE ?");
    $statement->execute(array($search_text, $search_text));
    $total_rows = $statement->rowCount();

    $targetpage = "search_result.php?search_text=" . $_REQUEST['search_text'];   
    $limit = 20;                                
    if (isset($_GET["page"])) {    
        $page_number  = $_GET["page"];    
    }   else {    
        $page_number=1;
    }       


    $initial_page = ($page_number-1) * $limit; 


    $statement = $pdo->prepare("SELECT * FROM products WHERE name LIKE ? or category LIKE ? LIMIT $initial_page,$limit");
    $statement->execute(array($search_text, $search_text));
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
    $total_pages = ceil($total_rows / $limit);      

    if (!$total_pages){ ?>
        <h2 class="no-search-result">No result found!</h2>
    <?php }
    else {
        foreach ($result as $row) { ?>
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
        }
        ?>
        <div class="items">
            <?php
                $pageURL = "";             

                if($page_number>=2){   
        
                    echo "<a href='$targetpage&page=".($page_number-1)."'>  Prev </a>";   
        
                }                          
        
                for ($i=1; $i<=$total_pages; $i++) {   
        
                    if ($i == $page_number) {   
                        $pageURL .= "<a class = 'active' href='$targetpage&page=" .$i."'>".$i." </a>";   
                    }               
        
                    else  {   
                        $pageURL .= "<a href='$targetpage&page=".$i."'>".$i." </a>";     
                    }   
                };     
        
                echo $pageURL;    
        
                if($page_number<$total_pages){   
                    echo "<a href='$targetpage&page=".($page_number+1)."'>  Next </a>";   
                }
            ?>
        </div>
    <?php
    }
    ?>
</div>

<?php require_once('footer.php'); ?>