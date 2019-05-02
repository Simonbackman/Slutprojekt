    <?php
        $dbc_dishes = mysqli_connect("localhost","root","","thai");
        $target_dir = "bilder/";
        $uploadOk = 1;

        // Get image file extension
        $file_extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);

        $query = "SELECT MAX(id) FROM dishes";
        $max_id = mysqli_fetch_array(mysqli_query($dbc_dishes,$query))[0];
        $_FILES["img"]["name"] = "dish" . $max_id .".". $file_extension;



       
   
/*
    if ($_FILES["img"]["size"] > 500000) {
        echo "Bilden är för stor.";
        $uploadOk = 0;
    }
*/
    if($file_extension != "jpg" && $file_extension != "png" && $file_extension != "jpeg" ) {
        echo "Bara jpg och png bilder.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Bilden blev inte uppladad .";
    } else {
        $target = "bilder/" . basename($_FILES["img"]["name"]);
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target)) {
//            echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
//            echo "Det gick inte att ladda up bilden.";
        }
    }
    if(
        isset($_POST['name']) &&
        isset($_POST['price']) &&
        isset($_POST['laktos']) &&
        isset($_POST['gluten']) &&
        isset($_POST['notter']) &&
        isset($_POST['spicy']) &&
        isset($_FILES['img']['name']) 
      ){


    $name = $_POST['name'];
    $price = $_POST['price'];
    $laktos = $_POST['laktos'];
    $gluten= $_POST['gluten'];
    $notter = $_POST['notter'];
    $spicy = $_POST['spicy'];
    $img = $_FILES['img']['name'];

    $query = "INSERT INTO dishes (name,price,laktos,gluten,notter,spicy,img) VALUES ('$name','$price','$laktos','$gluten','$notter','$spicy','$img');";
    mysqli_query($dbc_dishes,$query);
    }

    header("location:admin.php");
    ?>