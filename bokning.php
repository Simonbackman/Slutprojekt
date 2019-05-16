<?php session_start() ?>
<!DOCTYPE html>
    <lang="sv"/>
	<head>	
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    </head>
    
    <body>
            <div class="error_msg">
                <?php
                    // OM DET FINNS ERROR MESSAGE
                    if(isset($_SESSION['error_msg'])){
                    // Skriv ut error_msg
                    echo $_SESSION['error_msg'] . "<br>";
                    // TAR BORT ERROR_MSG
                    unset($_SESSION['error_msg']);
                        }
                ?>
            </div>
        <header class="header">
            <h1>Thai Tanic</h1>
        </header>
            <?php
                include("templates/nav.php"); 
            ?>
        <Section class="section_boking">
                
            <div class="boking_container">
                    <h2>Boka Bord</h2>
                <form id="reservation" action="reservation.php" method="GET">
                    <input class="inputbox" type="name" name="name" placeholder="Name" Required /><br/>    
                    <input class="inputbox" type="tel" name="phone" placeholder="Telefonnummer" Required /><br/>
                    <input class="inputbox" type="number" name="antal" placeholder="Antal Personer" Required /><br/>
                    <label>Datum</label><br/> 
                    <input class="inputbox" type="date" name="date" Required /><br/>
                    <label>Tid</label><br/>
                    <input class="inputbox" type="time" name="time" Required /><br/>
                        <div>
                          <select name="bordnr" form="reservation">
                            <option value="0">Välj Bord:</option>
                            <option value="1">1</option><option value="2">2</option>
                            <option value="3">3</option><option value="4">4</option>
                            <option value="5">5</option><option value="6">6</option>
                            <option value="7">7</option><option value="8">8</option>
                            <option value="9">9</option><option value="10">10</option>
                            <option value="11">11</option><option value="12">12</option>
                          </select>
                        </div>
                    <input class="send" type="submit" name="submit"/>    
                    <input class="send" type="reset" name="resert"/>
                </form>
            </div>
        </Section>
         <?php
                include("templates/footer.php"); 
            ?>
    </body>