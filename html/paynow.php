<?php

session_start();

$order_id = $_GET['order_id'];
$user_id=0;
//$_SESSION["userid"] ;
$price=0.00;

//host
$servername = "localhost";
//username
$username = "root";
//password
$password = "";
//db
$dbname = "online_fitness_trainer";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    throw new Exception('Connection failed:' . $conn->connect_error);
}

$updatesql = "UPDATE ORDER_DETAILS SET IS_PAID = 'Y' WHERE ORDER_DETAILS_ID='$order_id'";
         
if ($conn->query($updatesql) === TRUE) {
    header("Location: viewcart.php"); 
    exit();
}else{    
    $msg = array("Error: <br>" . $conn->error);
}

print_r($msg);

$conn->close();


?>