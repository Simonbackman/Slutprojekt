    <?php //connecting till databasesn 
        $dbc_dishes = mysqli_connect("localhost","siba@siba.kronhus.tk","nomis8899","siba");
        $target_dir = "bilder/";
        $uploadOk = 1;

        // väljre bild fil ändelse 
        $file_extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
        
        $query = "SELECT MAX(id) FROM dishes";
        $max_id = mysqli_fetch_array(mysqli_query($dbc_dishes,$query))[0];
        $_FILES["img"]["name"] = "dish" . $max_id .".". $file_extension;
        //väljer vilka bild typer som får laddas upp 
        if($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg" ) {
            echo "Bara jpg och png bilder.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0) {
            echo "Bilden blev inte uppladad .";
        } else {
            $target = "bilder/" . basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target)) {
            //echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
            //echo "Det gick inte att ladda up bilden.";
        }
        }
        if( //Kollar om allt är med 
            isset($_POST['name']) &&
            isset($_POST['price']) &&
            isset($_POST['laktos']) &&
            isset($_POST['gluten']) &&
            isset($_POST['notter']) &&
            isset($_POST['spicy']) &&
            isset($_FILES['img']['name']) 
          ){

            //ändrar value namnet 
        $name = mysqli_real_escape_string($dbc_dishes, $_POST['name']);
        $price = mysqli_real_escape_string($dbc_dishes, $_POST['price']);
        $laktos = $_POST['laktos'];
        $gluten= $_POST['gluten'];
        $notter = $_POST['notter'];
        $spicy = $_POST['spicy'];
        $img = $_FILES['img']['name'];
            //Lägger in informationen i databasen 
        $query = "INSERT INTO dishes (name,price,laktos,gluten,notter,spicy,img) VALUES ('$name','$price','$laktos','$gluten','$notter','$spicy','$img');";
        mysqli_query($dbc_dishes,$query);
        }
        header("location:admin.php");
    ?>