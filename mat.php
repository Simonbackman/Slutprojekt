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
            <?php
                include("templates/nav.php"); 
            ?>
        <Section id="section_dishes">
            
            <form action="" method="GET">
                <input type="text" name="search">
                <input type="submit" value="Sök">
            </form>
                <?php
                    $dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM dishes";

                    if(isset($_GET['search'])){
                            $search = $_GET['search'];
                            $query = "SELECT * FROM dishes WHERE name LIKE '%$search%'";
                    }
            
                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);

                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="food_container">
                            <p class="food_name"><?php echo $row['name']; ?></p>
                            <p class="food_id"><?php echo $row['id']; ?></p>
                            <img class="food_img" src="bilder/<?php echo $row['img'];?>"/>
                            <p class="food_price"><?php echo $row['price']; ?>kr</p>
                            
                             <?php 
                          for($i = 0 ; $i < $row['laktos']; $i++){
                              ?>
                            <img class="milk" src="bilder/milk.jpg" alt="laktos" title="Laktos"/>
                            <?php
                          }
                            ?> 
                             <?php 
                          for($i = 0 ; $i < $row['gluten']; $i++){
                              ?>
                            <img class="gluten" src="bilder/gluten.jpg" alt="gluten" title="Gluten"/>
                            <?php
                          }
                            ?>
                              <?php 
                          for($i = 0 ; $i < $row['notter']; $i++){
                              ?>
                            <img class="notter" src="bilder/notter.png" alt="nötter" title="Nötter"/>
                            <?php
                          }
                            ?>
                            <br/>
                            <?php 
                          for($i = 0 ; $i < $row['spicy']; $i++){
                              ?>
                            <img class="chili" src="bilder/chili.png" alt="Chili" title="Chili"/>
                            <?php
                          }
                            ?> 
                        </div>
                <?php
                        }
                    ?>            
        </Section>
         <?php
                include("templates/footer.php"); 
            ?>
    </body>