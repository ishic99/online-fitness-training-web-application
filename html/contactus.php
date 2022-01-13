<?php
    include_once 'config.php';
?>

<?php
$email = $_POST['email'];
$email2 = $_POST['email2'];
$message = $_POST['message'];

$sql= "insert into form(message_no,email,email2,message)values('','$email','$email2','$message')"; 

     if(mysqli_query($conn,$sql))
     {
         header("Location:Home.html");    
     }
     else
     {
         echo "<script> alert ('error')</script>";
     }
    
    mysqli_close($conn); 

?>
