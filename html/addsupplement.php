<?php

       include_once 'config.php';
?>

<?php
       $id= $_POST["id"];
	   $modl= $_POST["modl"];
       $name= $_POST["name"];
	   $price= $_POST["price"];
	   $qty= $_POST["qty"];

       $sql = "insert into supplement(product_no,id,modl,name,price,qty) values('','$id','$modl','$name','$price','$qty')";
	   
	  if(mysqli_query($conn,$sql))
	  {
		   header("Location:Supplementdetails.php");
	  }
      else
	  {
		  echo "<script>alert ('Error in inserting Records')</script>";
	  }
		  
		  mysqli_close($conn);
?>