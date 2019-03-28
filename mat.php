<!DOCTYPE html>
    <lang="sv"/>
	<head>	
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css"/>
    </head>
    <body>
        <header class="header">
            <h1>Thai Tanic</h1>
        </header>
        <nav>
            <a href="index.php"><div class="nav_item">Startsida</div></a>
            <a href="mat.php"><div class="nav_item">Maträtter</div></a>
            <a href="bokning.php"><div class="nav_item">Bokning</div></a>
            <a href="contact.php"><div class="nav_item">Kontakta oss</div></a>
        </nav>
        <Section class="section">
            
                <?php
    
                    $dbc = mysqli_connect("localhost","root","","food");

                    $query = "SELECT * FROM dishes";

                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);

                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="food_container">
                            <img class="food_img" src="bilder/<?php echo $row['img'];?>"/>
                            <p class="food_name"><?php echo $row['name']; ?></p>
                            <p class="food_price"><?php echo $row['price']; ?>kr</p>
                            <p class="food_laktos"><?php echo $row['laktos']; ?></p>
                            <p class="food_gluten"><?php echo $row['gluten']; ?></p>
                            <p class="food_notter"><?php echo $row['notter']; ?></p>
                            <p class="food_spicy"><?php echo $row['spicy']; ?></p>
                        </div>
                <?php
                }
            ?>
        </Section>
    </body>
    <footer class="footer">
        <p>Copyright © 2019 Thai Tanic AB. Alla rättigheter reserverade.<br/> Org.nummer: 565432181-32159 </p> 
    </footer>