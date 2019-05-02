<?php
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
    
$query = "INSERT INTO reservation (id,name,phone,antal,date,time,bordnr) VALUES ('$id','$name','$phone','$antal','$date','$time','$bordnr');";
mysqli_query($dbc_reservation,$query);

}
else{
     $_SESSION['error_msg'] = "Felaktig information";
    header("Location: bokning.php");
    
}
header("location:bokning.php");
 echo mysqli_error($dbc_reservation);
?>