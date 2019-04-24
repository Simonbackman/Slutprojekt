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
            
            <h2>Kontakta oss</h2>
            <h1 class="thai_contact">Thai Tanic</h1>
            <p class="tel_mail"><a href="0312156284">Tel:0312156284</a><br/>
            <a href="mailto:thai_tanic@email.com">thai_tanic@email.com</a></p>
            <p class="tel_mail">411 37 Göteborg</p>
            <p class="tel_mail">kronhusgatan 9</p>
            
            <img class="kronhus" src="bilder/kronhusgatan.jpg"/>    
            <iframe class="map" src="https://www.google.com/maps/d/u/0/embed?mid=1S4VB-mL12MfRlPY5giQZrxCsdfjnYLxw"></iframe>
            <br/><br/><br/><br/><br/><br/><br/><br/><br/>   
            
            <h1>Skriv din recension här </h1>
            <form action="recension.php" method="GET">
                <input type="text" name="name" placeholder="Full name" > <br/>
                <input type="email" name="mail" placeholder="Mail address"><br/>
                <textarea type="text" name="message" placeholder="message"></textarea><br/>
                <input type="submit" name="Submit" value="Submit"/>
                <input type="reset" name="reset" value="reset"/>
            </form>
            
            

        </Section>
        <?php
                include("templates/footer.php"); 
            ?>
    </body>