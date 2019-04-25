<!doctype html>
    <lang="sv"/>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" type="text/css" href="css.css"/>
    </head>
    <body>
        <header class="header">
            <h1>AdminPanel</h1>
        </header>
            <nav class="admin_nav">
                <a href="index.php"><div class="nav_item">Startsida</div></a>
                <a href="#"><div class="nav_item">Bokningar</div></a>
                <a href="#"><div class="nav_item">Lägg tll rätter</div></a>
            </nav>
        <section class="admin_section">
            
            <form id="mat"action="infofood.php" method="GET">
                <input type="text" name="name" placeholder="Namn" > <br/>
                <input type="numbers" name="price" placeholder="Pris"><br/>
                
                <div>
                    <select name="laktos" form="mat">
                        <option value="100">Laktos</option>
                        <option value="0">0</option>
                        <option value="1">1</option>                       
                    </select>
                    <select name="gluten" form="mat">
                        <option value="100">Gluten</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <select name="notter" form="mat">
                       <option value="100">Nötter</option>
                        <option value="0">0</option>
                        <option value="1">1</option>                        
                    </select>
                    <select name="spicy" form="mat">
                        <option value="100">Stark Skala</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>                       
                    </select>  
                    
                </div>
                <input type="text" name="img" placeholder="Bild">
                <input type="submit" name="Submit" value="Submit"/>
                <input type="reset" name="reset" value="reset"/>
            </form>
            
        </section>
    </body>


 