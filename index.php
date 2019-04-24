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
        <Section class="section">
            <div class="tider">
                <h2>Välkommen</h2>
                <p class="opptider"><i>Öppetider:</p>
                <p>Mån-Fre:12:00-21:00<br/>
                Lör-Sön:12:00-19:30</i></p>
            </div>
          <a href="bokning.php"><img class="bord" src="bilder/bord.jpg" alt="bokning" title="Gå till bordsbokning"/></a>
          <a href="mat.php"><img class="mat" src="bilder/mat.jpg" alt="rätter" title="Gå till maträtter"/></a>
             <?php    
                    $dbc = mysqli_connect("localhost","root","","thai");
                    $query = "SELECT * FROM recension";

                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);

                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="recensioner_container">
                            <table class="recension">
                                <tr><td class="rec_name">Name:<?php echo $row['name']; ?></td></tr>
                                <tr><td class="rec_mail">Mail:<?php echo $row['mail']; ?></td>
                                <tr><td class="rec_recension"><?php echo $row['recension']; ?></td></tr>
                            </table>                 
                        </div>
                <?php
                        }
                    ?>            
        </Section>
         <?php
                include("templates/footer.php"); 
            ?>
    </body>