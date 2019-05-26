<?php
session_start(); 
// Kollar om allt är med
if(
    isset($_GET['name']) &&
    isset($_GET['phone']) &&
    isset($_GET['antal']) &&
    isset($_GET['date']) &&
    isset($_GET['time']) &&
    isset($_GET['bordnr']) 
  ){
    // kontaktar databasen
$dbc_reservation = mysqli_connect("localhost","siba@siba.kronhus.tk","nomis8899","siba");
    
$name = mysqli_real_escape_string($dbc_reservation, $_GET['name']);
$phone = mysqli_real_escape_string($dbc_reservation, $_GET['phone']);
$antal = mysqli_real_escape_string($dbc_reservation, $_GET['antal']);
$date = $_GET['date'];
$time = mysqli_real_escape_string($dbc_reservation, $_GET['time']);
$bordnr = $_GET['bordnr'];
    //Lägger in informationen i tabelen
$query = "INSERT INTO reservation (name,phone,antal,date,time,bordnr) VALUES ('$name','$phone','$antal','$date','$time','$bordnr');";
    // kollar om det fungerade annars visar error msg
    if(mysqli_query($dbc_reservation,$query)){
        // SKICKAS TILL INDEX
        header("Location: bokning.php");
    }else{ // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        $_SESSION['error_msg'] = "Bord upptaget!";
        header("Location: bokning.php");
    }
}
else{ // FELAKTIG DATA FRÅN $_POST
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: bokning.php");
}
?>