<?php
    include_once 'config.php';
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$questiontype = $_POST['questiontype'];
$question = $_POST['question'];

$sql= "insert into askvitamin(question_no,name,email,questiontype,question)values('','$name','$email','$questiontype','$question')"; 

     if(mysqli_query($conn,$sql))
     {
         header("Location:Vitamin.html");    
     }
     else
     {
         echo "<script> alert ('error')</script>";
     }
    
    mysqli_close($conn); 

?>


