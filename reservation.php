<?php
session_start();
if(
    isset($_GET['name']) &&
    isset($_GET['phone']) &&
    isset($_GET['antal']) &&
    isset($_GET['date']) &&
    isset($_GET['time']) &&
    isset($_GET['bordnr']) 
  ){
     
$dbc_reservation = mysqli_connect("localhost","root","","thai");
    
$name = $_GET['name'];
$phone = $_GET['phone'];
$antal = $_GET['antal'];
$date = $_GET['date'];
$time = $_GET['time'];
$bordnr = $_GET['bordnr'];
    
$query = "INSERT INTO reservation (name,phone,antal,date,time,bordnr) VALUES ('$name','$phone','$antal','$date','$time','$bordnr');";

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

<!--

else{
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location:bokning.php");
    
}
    header("location:bokning.php");
    echo mysqli_error($dbc_reservation);
?>