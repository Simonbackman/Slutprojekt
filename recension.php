<?php
        //Kollar om allt är med 
    if(
        isset($_GET['name']) &&
        isset($_GET['mail']) &&
        isset($_GET['message'])
      )
    {
        //Connectar till databasen
    $dbc_recension = mysqli_connect("localhost","siba@siba.kronhus.tk","nomis8899","siba");
    mysqli_query($dbc_recension,$query,"SET NAMES utf8");

    $name = mysqli_real_escape_string($dbc_recension, $_GET['name']);
    $mail = mysqli_real_escape_string($dbc_recension, $_GET['mail']);
    $message = mysqli_real_escape_string($dbc_recension, $_GET['message']);
        //lägger in informationen i databasen
    $query = "INSERT INTO recension (name,mail,recension) VALUES ('$name','$mail','$message')";
    mysqli_query($dbc_recension,$query);
    }
    header("location:contact.php");
    // echo mysqli_error($dbc_recension);
?>