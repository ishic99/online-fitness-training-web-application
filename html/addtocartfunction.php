<?php

session_start();

$prduct_id = $_GET['product_id'];
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

if (!empty($prduct_id)) {
    $productsql = "SELECT * FROM product where product_id = '$prduct_id'; ";
    $rs = $conn->query($productsql);
    
    if ($rs->num_rows > 0) {
        while($row = $rs->fetch_assoc()) {
            $price = $row["price"];
        }
    }else{
        $msg = array('Product could not found.');
    }
}


$insertsql = "INSERT INTO ORDER_DETAILS (PRODUCT_ID,USER_ID,QUANITITY,AMOUNT,IS_PAID) VALUES ($prduct_id,$user_id, 1, '$price', 'N')";
         
if ($conn->query($insertsql) === TRUE) {
    $last_id = $conn->insert_id;

    header("Location: viewcart.php"); 
    exit();
}else{    
    $msg = array("Error: <br>" . $conn->error);
}

print_r($msg);

$conn->close();


?>