<?php
if(
    isset($_GET['name']) &&
    isset($_GET['price']) &&
    isset($_GET['laktos']) &&
    isset($_GET['gluten']) &&
    isset($_GET['notter']) &&
    isset($_GET['spicy']) &&
    isset($_GET['img']) 
    
  ){
     
$dbc_dishes = mysqli_connect("localhost","root","","thai");
    
$name = $_GET['name'];
$price = $_GET['price'];
$laktos = $_GET['laktos'];
$gluten= $_GET['gluten'];
$notter = $_GET['notter'];
$spicy = $_GET['spicy'];
$img = $_GET['img'];
    
$query = "INSERT INTO dishes (id,name,price,laktos,gluten,notter,spicy,img) VALUES ('$id','$name','$price','$laktos','$gluten','$notter','$spicy','$img');";
mysqli_query($dbc_dishes,$query);

}
header("location:admin.php");
 echo mysqli_error($dbc_recension);
?>