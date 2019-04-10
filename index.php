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
            <div class="tider">
                <h2>Välkommen</h2>
                <p class="opptider"><i>Öppetider:</p>
                <p>Mån-Fre:12:00-21:00<br/>
                Lör-Sön:12:00-19:30</i></p>
            </div>
          <a href="bokning.php"><img class="bord" src="bilder/bord.jpg" alt="bokning"/></a>
          <a href="mat.php"><img class="mat" src="bilder/mat.jpg" alt="rätter"/></a>

            
             <?php
    
                    $dbc = mysqli_connect("localhost","root","","recension");
                    $query = "SELECT * FROM recension";

                   
            
                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);

                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="recensioner_container">
                            <p class="rec_name">Name:<?php echo $row['name']; ?></p>
                            <p class="rec_mail">Mail:<?php echo $row['mail']; ?></p>
                            <p class="rec_recension"><?php echo $row['recension']; ?></p>
                        </div>
                <?php
                        }
                    ?>            

        </Section>
    </body>
    <footer class="footer">
        <p>Copyright © 2019 Thai Tanic AB. Alla rättigheter reserverade.<br/> Org.nummer: 565432181-32159 </p> 
    </footer>