<?php
    include_once 'config.php';
?>

<?php
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $age = $_POST['age'];
     $user_name = $_POST['username'];
     $email = $_POST['email'];
     $phone_number = $_POST['number'];
	 $password = $_POST['password'];

     $duplicate_1 = mysqli_query($conn,"select * from userdata where email='$email' ");
     $duplicate_2 = mysqli_query($conn,"select * from userdata where phone_number='$phone_number' ");
     $duplicate_3 = mysqli_query($conn,"select * from userdata where user_name='$user_name' ");

     if(mysqli_num_rows($duplicate_1)>0)
     {
         echo "E-mail is already exists";
     }
     elseif(mysqli_num_rows($duplicate_2)>0)
     {
        echo "Phone Number is already exists";
     }
     elseif(mysqli_num_rows($duplicate_3)>0)
     {
        echo "User Name is already exists";
     }
     else
     {

     $sql= "insert into userdata(user_id,firstName,lastName,age,user_name,email,phone_number,password)values('','$firstname','$lastname','$age','$user_name','$email','$phone_number','$password')"; 

     if(mysqli_query($conn,$sql))
     {
         header("Location:Userlogin.html");    
     }
     else
     {
         echo "<script> alert ('error')</script>";
     }
    }
    mysqli_close($conn); 

?>