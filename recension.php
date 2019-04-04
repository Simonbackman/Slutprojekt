<?php
if(
    isset($_GET['name']) &&
    isset($_GET['mail']) &&
    isset($_GET['message'])
    
  ){
     
$dbc_recension = mysqli_connect("localhost","root","","recension");
    
$name = $_GET['name'];
$mail = $_GET['mail'];
$message = $_GET['message'];
    
$query = "INSERT INTO recension (id,name,mail,recension) VALUES ('$id','$name','$mail','$message');";
mysqli_query($dbc_recension,$query);

}
header("location:contact.php");
// echo mysqli_error($dbc_recension);
?>