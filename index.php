<!DOCTYPE html>
    <lang="sv"/>
	<head>	
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
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
            
                <div class="mat_bord">
                <!--<a href="bokning.php">--><img class="bord" src="bilder/bord.jpg" alt="bokning" title="Gå till bordsbokning"/></a>
                <!--<a href="mat.php">--><img class="mat" src="bilder/mat.jpg" alt="rätter" title="Gå till maträtter"/></a>
                </div>
            <?php    
                   include ("showrecension.php");
            ?>            
            <?php
                include("templates/footer.php"); 
            ?>
        </Section>
    </body>