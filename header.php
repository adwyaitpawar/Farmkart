<style>
    <?php include "header.css" ?>
</style>

<script src="https://kit.fontawesome.com/2cf05c34d2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="topnav">
        <a class="active" href="Explore.php"><img src="images/logonew.png" class="logo"></a>
        <div class="user-dropdown">
            <a href="#"><i class="fas fa-user"></i></a>
            <div class="user-dropdown-content">
                <a href="profile.php">Your Account</a>
                <a href="Order_history.php">Your Orders</a>
                <a href="Contact_Form.php">Contact Us</a>
                <a href="logout.php">Log Out</a>
            </div>
        </div>
        <a style="pointer-events: none;">|</a>
        <a href="Cart.php"><i class="fas fa-shopping-cart"></i></a>
        <form role="search" action="search_result.php" method="get">
            <button type="submit" class="search-button"><a href="#"><i class="fas fa-search"></i></a></button>
            <input type="search" placeholder="Search..." name="search_text" required>
        </form>
    </div>
    <div class="bottom-nav">
        <a href="Explore.php" class="home-nav">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Seeds <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
            <div class="second-level-dropdown">
                    <button class="dropbtn">Flower Seeds <i class="fa fa-caret-right"></i></button>
                    <div class="dropdown-content second-dropdown-content">
                        <a href="Flower.php">Flower's Hybrid Seeds</a>
                        <a href="Flower.php">Petunia Garden Mixed Flower Seeds</a>
                        <a href="Flower.php">GoldSmith/SFlowers</a>
                    </div>
                </div>
                <div class="second-level-dropdown">
                    <button class="dropbtn">Vegetable Seeds <i class="fa fa-caret-right"></i></button>
                    <div class="dropdown-content second-dropdown-content">
                        <a href="Seeds.php">Vegetable's Hybrid Seeds</a>
                        <a href="Seeds.php">Hybrid Papaya Seeds</a>
                        <a href="Seeds.php">Leafy Veggies</a>
                        <a href="Seeds.php">Exotic Vegetable Seeds</a>
                        <a href="Seeds.php">Microgreen Seeds</a>
                    </div>
                </div>
                <a href="Fruit.php">Fruit Seeds</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Plant Protection <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content">
                <a href="Pest.php">Pesticides</a>
                <a href="Pest.php">Insecticides</a>
                <a href="Pest.php">Water Soluble Fertilizers</a>
                <a href="Pest.php">Organic Products</a>
                <a href="Pest.php">Bactericides</a>
            </div>
        </div>
        <a href="Fruit.php">Fruit Seeds</a>
        <a href="Tools.php">Tools and Machinery</a>
    </div>
