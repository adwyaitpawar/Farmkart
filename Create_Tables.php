<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "farmkartdb";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE `farmkartdb`.`users` 
( `id` INT NOT NULL AUTO_INCREMENT ,
 `fname` VARCHAR(20) NOT NULL , 
 `lname` VARCHAR(20) NOT NULL , 
 `gender` VARCHAR(6) NOT NULL , 
 `date` DATE NOT NULL , 
 `phone` VARCHAR(15) NOT NULL , 
 `address` VARCHAR(50) NOT NULL , 
 `city` VARCHAR(20) NOT NULL , 
 `state` VARCHAR(20) NOT NULL , 
 `pincode` VARCHAR(6) NOT NULL , 
 `country` VARCHAR(20) NOT NULL , 
 `email` VARCHAR(30) NOT NULL , 
 `password` VARCHAR(30) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = MyISAM";

$sql2 = "CREATE TABLE `farmkartdb`.`products`
 ( `id` INT NOT NULL AUTO_INCREMENT , 
 `name` VARCHAR(50) NOT NULL , 
 `price` DOUBLE NOT NULL , 
 `image_link` VARCHAR(200) NOT NULL , 
 `season` VARCHAR(20) NOT NULL , 
 `quantity` INT NOT NULL , 
 `category` VARCHAR(10) NOT NULL , 
 PRIMARY KEY (`id`)) ENGINE = MyISAM";

$sql3 = "CREATE TABLE `farmkartdb`.`cart` 
 ( `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image_link` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)) ENGINE=MyISAM";

$sql4 = "CREATE TABLE `farmkartdb`.`order history` ( `name` VARCHAR(50) NOT NULL , `image_link` VARCHAR(200) NOT NULL , `order_id` VARCHAR(7) NOT NULL , `quantity` INT NOT NULL , `date` DATE NOT NULL , `price` DOUBLE NOT NULL ) ENGINE = MyISAM";
$sql5 = "CREATE TABLE `farmkartdb`.`card details` ( `id` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `address` VARCHAR(50) NOT NULL , `city` VARCHAR(20) NOT NULL , `state` VARCHAR(20) NOT NULL , `pincode` VARCHAR(6) NOT NULL , `card_number` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
$sql6 = "CREATE TABLE `farmkartdb`.`contact form` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `email` VARCHAR(50) NOT NULL , `subject` VARCHAR(50) NOT NULL , `query` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM";
$sql7 = "CREATE TABLE `farmkartdb`.`user_curr` (`id` INT NOT NULL AUTO_INCREMENT ,  `fname` VARCHAR(30) NOT NULL , `lname` VARCHAR(30) NOT NULL , `gender` VARCHAR(6) NOT NULL , `phone` VARCHAR(15) NOT NULL , `address` VARCHAR(100) NOT NULL , `email` VARCHAR(40) NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;";

$sql = "INSERT INTO products (name, price, image_link, season, quantity, category) 
           VALUES ('Yellow Marigold Seeds','450', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img53.jpg?raw=true', 'winter', '150','flower'),
          ('Orange Marigold Seeds','380', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img54.jpg?raw=true', 'winter', '150','flower'),
          ('White Marigold Seeds','510', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img55.jpg?raw=true', 'winter', '150','flower'),
          ('Double Dwarf Mix Seeds','540', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img56.jpg?raw=true', 'rainy', '150','flower'),
          ('Salvia Saint Fire Seeds','320', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img57.jpg?raw=true', 'winter', '0','flower'),
          ('Sweet Sultan Mix Seeds','740', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img58.jpg?raw=true', 'rainy', '150','flower'),
          ('Sweet Alyssum White Seeds','100', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img59.jpg?raw=true', 'spring', '0','flower'),
          ('Insect Killer', '900', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/pest2.jpg?raw=true', 'Null', '50', 'pest'),
          ('Brush Cutter 3700','9000', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img1.jpg?raw=true', 'Null', '20', 'tools'),
          ('Multi Tool Brush cutter','11000', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img2.jpg?raw=true', 'Null', '10', 'tools'),
          ('Telescopic Wire Rake','900', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img3.jpg?raw=true', 'Null', '10', 'tools'),
          ('Agrimate Professional secateur','1000', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img4.jpg?raw=true', 'Null', '20', 'tools'),
          ('Fork','400', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img5.jpg?raw=true', 'Null', '20', 'tools'),
          ('Transplanter','920', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img6.jpg?raw=true', 'Null', '20', 'tools'),
          ('Lawn mower 54','9499', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img7.jpg?raw=true', 'Null', '10', 'tools'),
          ('Hedge Trimmer','1750', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img8.jpg?raw=true', 'Null', '5', 'tools'),
          ('Gas Chainsaw','3450', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img9.jpg?raw=true', 'Null', '10', 'tools'),
          ('Agrimate Hedge shear','650', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img10.jpg?raw=true', 'Null', '0', 'tools'),
          ('Round Straw Baler','11850', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img11.jpg?raw=true', 'Null', '15', 'tools'),
          ('High Presser Washer','1800', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img12.jpg?raw=true', 'Null', '10', 'tools'),
          ('Water Pump','2150', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img13.jpg?raw=true', 'Null', '20', 'tools'),
          ('Automatic Sprayer','4540', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img14.jpg?raw=true', 'Null', '20', 'tools'),
          ('Long Mellon Seeds','120', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img15.jpg?raw=true', 'spring', '150', 'seeds'),
          ('Carrot Seeds','90', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img16.jpg?raw=true', 'spring', '150', 'seeds'),
          ('Chilli Seeds','110', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img17.jpg?raw=true', 'summer', '0', 'seeds'),
          ('Yellow Pumpkin Seeds','190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img18.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Spinach Seeds','110', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img19.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Chinese Cabbage Seeds','245', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img20.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Bottle Gourd Seeds','192', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img21.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Red Raddish seeds','210', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img22.jpg?raw=true', 'summer', '150', 'seeds'),
          ('Brocolli seeds','408', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img23.jpg?raw=true', 'summer', '150', 'seeds'),
          ('Cucumber Seeds','89', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img24.jpg?raw=true', 'summer', '150', 'seeds'),
          ('SpringOnion Seeds','90', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img25.jpg?raw=true', 'winter', '0', 'seeds'),
          ('Capsicum Seeds','190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img26.jpg?raw=true', 'summer', '150', 'seeds'),
          ('Cabbage Seeds','180', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img27.jpg?raw=true', 'spring', '150', 'seeds'),
          ('Turnip Seeds','143', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img28.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Lavender Seeds','202', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img29.jpg?raw=true', 'summer', '150', 'flower'),
          ('Strawberry Seeds','230', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img30.jpg?raw=true', 'spring', '150', 'seeds'),
          ('Fennel Seeds', '190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img31.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Lemon Basil Seeds', '200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img32.jpg?raw=true','summer','0', 'seeds'),
          ('Parsley Seeds', '100', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img33.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Sunflower Seeds','180', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img34.jpg?raw=true', 'summer', '150', 'flower'),
          ('Antirrhinum Seeds', '190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img35.jpg?raw=true', 'rainy', '0', 'flower'),
          ('Poppy Seeds', '1500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img36.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Guava Seeds' ,'90', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img37.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Black Cardamom Seeds', '300', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img38.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Mint Seeds', '290', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img39.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Beetroot Seeds' ,'230', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img40.jpg?raw=true', 'summer', '150', 'seeds'),
          ('Amaranthus Green Seeds' ,'290', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img41.jpg?raw=true','summer', '150', 'seeds'),
          ('Tinda Seeds' ,'400', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img42.jpg?raw=true', 'winter', '150', 'seeds'),
          ('Sponge Gourd seeds' ,'230', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img43.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Sweet Corn Seeds', '250', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img44.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Ridge Gourd Lufa Seeds', '240', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img45.jpg?raw=true', 'rainy', '150', 'seeds'),
          ('Coriander Seeds' ,'430', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img46.jpg?raw=true', 'summer', '150', 'seeds'),
          ('Lettuce Seeds', '620', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img47.jpg?raw=true', 'spring', '150', 'seeds'),
          ('WaterMelon Seeds', '250', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img48.jpg?raw=true', 'summer', '150', 'fruit'),
          ('Pappaya Seeds', '350', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img49.jpg?raw=true', 'winter', '150', 'fruit'),
          ('Muskmelon Seeds', '300', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img50.jpg?raw=true', 'winter', '0', 'fruit'),
          ('Helichrysum Song Mix Seeds','700', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img51.jpg?raw=true', 'summer', '150', 'flower'),
          ('Mesembryanthemum Mix seeds', '420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img52.jpg?raw=true', 'winter', '150', 'flower'),
          ('Fenugreek Seeds','315', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img60.jpg?raw=true', 'rainy', '150','seeds'),
          ('Black Carrot Seeds','420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img61.jpg?raw=true', 'winter', '150','seeds'),
          ('Red Cabbage Seeds','300', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img62.jpg?raw=true', 'winter', '150','seeds'),
          ('Iceland Poppy Seeds','400', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img63.jpg?raw=true', 'rainy', '150','flower'),
          ('Celosia Cristata Seeds','500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img64.jpg?raw=true', 'spring', '150','flower'),
          ('Lupin Pixie Seeds','320', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img65.jpg?raw=true', 'summer', '0','flower'),
          ('French Marigold orange seeds','420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img66.jpg?raw=true', 'winter', '150','flower'),
          ('Zinnia Orange seeds','320', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img67.jpg?raw=true', 'summer', '150','flower'),
          ('Amaranthus Pygmy Torch Seeds','320', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img68.jpg?raw=true', 'summer', '150','flower'),
          ('Aster duchess Formula Mix Seeds','340', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img69.jpg?raw=true', 'spring', '150','flower'),
          ('Gaillardia Aristata Tokajer Seeds','310', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img70.jpg?raw=true', 'spring', '0','flower'),
          ('Dahlia Seeds','240', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img71.jpg?raw=true', 'spring', '150','flower'),
          ('Dimorphotheca Pluviali Seeds','420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img72.jpg?raw=true', 'winter', '150','flower'),
          ('Daisy Seeds','430', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img73.jpg?raw=true', 'winter', '150','flower'),
          ('Schizanthus Angel Wings Seeds','340', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img74.jpg?raw=true', 'spring', '150','flower'),
          ('Vinca Red Cherry Dwarf Seeds','420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img75.jpg?raw=true', 'summer', '150','flower'),
          ('Vinca Dwarf White Seeds','290', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img76.jpg?raw=true', 'summer', '150','flower'),
          ('Zinnia Dahlia Mix seeds','310', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img77.jpg?raw=true', 'spring', '150','flower'),
          ('Indian Shirley Poppy Mix Seeds','330', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img78.jpg?raw=true', 'winter', '150','flower'),
          ('French Marigold Red Seeds','420', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img79.jpg?raw=true', 'spring', '0','flower'),
          ('Candituft Ebress Alba Seeds','190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img80.jpg?raw=true', 'summer', '150','flower'),
          ('Blueberry Seeds','700', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img81.jpeg?raw=true', 'rainy', '150','fruit'),
          ('Apple Seeds','290', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img82.jpeg?raw=true', 'spring', '150','fruit'),
          ('Mango Seeds','220', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img83.jpg?raw=true', 'summer', '150','fruit'),
          ('Banana Seeds','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img84.jpeg?raw=true', 'rainy', '150','fruit'),
          ('Orange Seeds','190', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img85.jpeg?raw=true', 'rainy', '150','fruit'),
          ('Kiwi Seeds','450', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img86.jpg?raw=true', 'spring', '150','fruit'),
          ('Black Grapes seeds','320', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img87.jpg?raw=true', 'rainy', '150','fruit'),
          ('Green Grapes seeds','290', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img88.png?raw=true', 'rainy', '0','fruit'),
          ('Red Cherry Seeds','800', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img89.jpg?raw=true', 'summer', '150','fruit'),
          ('Watermelon Seeds','100', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img90.jpg?raw=true', 'summer', '150','fruit'),
          ('Muskmelon Seeds','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img91.jpeg?raw=true', 'winter', '150','fruit'),
          ('Papaya Seeds','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img92.jpg?raw=true', 'rainy', '150','fruit'),
          ('Guava Seeds','250', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img93.jpg?raw=true', 'rainy', '150','fruit'),
          ('Asian Plum Seeds','500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img94.jpg?raw=true', 'summer', '150','fruit'),
          ('Cranberry Seeds','700', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img95.jpg?raw=true', 'rainy', '150','fruit'),
          ('Pineapple Seeds','220', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img96.jpeg?raw=true', 'Null', '150','fruit'),
          ('Bioenchancer','410', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img97.jpg?raw=true', 'Null', '150','pest'),
          ('Suruga Pesticide','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img98.png?raw=true', 'Null', '150','pest'),
          ('Konatsu Pesticide','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img99.png?raw=true', 'Null', '150','pest'),
          ('Komugi (Pyriproxyfen 10% EC)','390', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/img100.jpg?raw=true', 'Null', '0','pest'),
          ('Rotator Blower','31500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/1.jpg?raw=true', 'Null', '15','tools'),
          ('Lawn Mower LC 18','11500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/2.jpg?raw=true', 'Null', '15','tools'),
          ('Hedge Trimmer HC 280XP','42300', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/3.jpg?raw=true', 'Null', '15','tools'),
          ('135 Mark II Gas Chainsaw','23400', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/4.jpg?raw=true', 'Null', '15','tools'),
          ('Radish Seeds','150', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/seed1.jpg?raw=true', 'rainy', '150','seeds'),
          ('Bitter Gourd Seeds','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/seed2.jpg?raw=true', 'rainy', '150','seeds'),
          ('Tomato Seeds','100' ,'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/seed3.jpg?raw=true', 'winter', '150','seeds'),
          ('LadyFinger Seeds','150', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/seed4.jpg?raw=true', 'Null', '150','seeds'),
          ('Acetosol','500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/2.jpg?raw=true', 'Null', '150','pest'),
          ('Phosphosol','1500', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/phosphosol.jpg?raw=true', 'Null', '150','pest'),
          ('Potashsol','900', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/potashsol.jpg?raw=true', 'Null', '150','pest'),
          ('Manure','200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/manure.jpg?raw=true', 'Null', '150','pest'),
          ('Fork','1200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/fork.jpg?raw=true', 'Null', '150','tools'),
          ('Trowel','900', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/trowel.jpg?raw=true', 'Null', '0','tools'),
          ('Agrimate Bypass Pruner','1100', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/agrimate-floral-bypass-pruner.jpg?raw=true', 'Null', '150','tools'),
          ('Agrimate Forged Steel','1200', 'https://github.com/GaganGoyal-1/AgriKart/blob/master/images/agrimate-professional-pruner-carbon-forged-steel.jpg?raw=true', 'Null', '150','tools') ";
          
 

if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE && $conn->query($sql7) === TRUE && $conn->query($sql) === TRUE) {
  echo "Tables created successfully and data entered";
} else {
  echo "Error creating tables or entering data: " . $conn->error;
}

$conn->close();
?>
