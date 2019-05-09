<?php session_start()?>
<!doctype html>
    <lang="sv"/>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"/>
    </head>
    <body>
        <header class="header">
            <h1>AdminPanel</h1>
        </header>
            <nav class="admin_nav">
                <a href="index.php"><div class="admin_nav_item"><i class="fas fa-home"></i> Startsida</div></a>
            </nav>
        <section class="admin_section">
            <div class="input_food">
                <h3>Lägg till nya maträtter</h3>
            
                <form action="infofood.php" id="mat" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Namn" ><br/>
                    <input type="numbers" name="price" placeholder="Pris"><br/>
                        <div>
                            <select name="laktos" form="mat">
                                <option value="-1">Laktos</option>
                                <option value="0">0</option>
                                <option value="1">1</option>                       
                            </select>
                            <select name="gluten" form="mat">
                                <option value="-1">Gluten</option>
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                            <select name="notter" form="mat">
                                <option value="-1">Nötter</option>
                                <option value="0">0</option>
                                <option value="1">1</option>                        
                            </select>
                            <select name="spicy" form="mat">
                                <option value="-1">Stark Skala</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>                       
                            </select>  
                        </div>
                    <input type="file" name="img" id="img"><br/>
                    <input type="submit" name="Submit" value="Submit"/>
                    <input type="reset" name="reset" value="reset"/>
                </form>
            </div>
             <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            <?php    
                include("inforeservation.php");
            ?>
        </section>
    </body>