    <?php
        $target_dir = "bilder/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if($check !== false) {
            echo "Filen är en bild - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "filen är inte en bild.";
            $uploadOk = 0;
        }
    }
    if (file_exists($target_file)) {
        echo "Bilden finns redan .";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Bilden är för stor.";
        $uploadOk = 0;
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
        echo "Bara jpg och png bilder.";
        $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Bilden blev inte uppladad .";
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {
            echo "Det gick inte att ladda up bilden.";
        }
    }
    if(
        isset($_POST['name']) &&
        isset($_POST['price']) &&
        isset($_POST['laktos']) &&
        isset($_POST['gluten']) &&
        isset($_POST['notter']) &&
        isset($_POST['spicy']) &&
        isset($_POST['img']) 
      ){

    $dbc_dishes = mysqli_connect("localhost","root","","thai");

    $name = $_POST['name'];
    $price = $_POST['price'];
    $laktos = $_POST['laktos'];
    $gluten= $_POST['gluten'];
    $notter = $_POST['notter'];
    $spicy = $_POST['spicy'];
    $img = $_POST['img'];

    $query = "INSERT INTO dishes (id,name,price,laktos,gluten,notter,spicy,img) VALUES ('$id','$name','$price','$laktos','$gluten','$notter','$spicy','$img');";
    mysqli_query($dbc_dishes,$query);
    }

    header("location:admin.php");
     echo mysqli_error($dbc_recension);
    ?>