<?php

       include_once 'config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<style>

</style>
<title>Supplement Details</title>
<link rel="stylesheet" type="text/css" href="../styles/styles.css">
<link rel="stylesheet" type="text/css" href="../styles/additem.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<center>
<img src="../images/logo.png" width="600" height="250">
</center>
<hr>

<!--Start of menue bar-->
<!--Main Menue bar-->

<div class="m1">
<ul class="m2">
<li class="list1"><div class="menu"><a class="menu" href="Home.html">Home</a></div></li>

<div class= "list1">
<li class="list1"><a class="menu" href="Registration.html">Register</a>

<div class = "droplist">

</div>

</li>

</div>


<li class="list1"><a class="menu" href="#">Login</a></li>
<li class="list1"><a class="menu" href="Contactus.html">Contact Us</a></li>
<li class="list1"><a class="menu" href="#">Profile</a></li>
</ul>


<!--Sub Menue(Cart,Profile and Search-bar)-->

<div class="cart">

<a class="cart1" href="#"><i class="fas fa-shopping-cart fa-2x"></i></a>

</div>

<div class="profile">

<div class= "dropboxprof">

<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

<div class = "droplistprof">

<a href="#">Sign In</a>
<a href="Registration.html">Sign Up</a>

</div>

</div>

</div>
</div>
<br><br>
<!--end of Sub Menue(Cart,Profile and Search-bar)-->

<!--end of menue bar-->
<table width="100%">
			<tr>
				<th align="center"><h1>Supplement Product List</h1></th>
			</tr>
			<tr>
				<th><button class="button1" onclick="window.location.href='Supplementadd.html'">Add Supplement</button>
            <tr>
                <td width="80%">
                        <table border = "1" width = "100%" height="200%">
                                <tr><center><h4>
                                    <td><center><h4>PRODUCT NO</center></h4></td>
                                    <td><center><h4>PRODUCT ID</center></h4></td>
                                    <td><center><h4>MODEL</center></h4></td>
                                    <td><center><h4>NAME </center></h4></td>
                                    <td><center><h4>PRICE</center></h4></td>
                                    <td><center><h4>QUANTITY</center></h4></td>
                                   
                                </tr>
			<?php
		 $sql = "select * from supplement";
		 $result = $conn->query($sql);
		 
		 if($result->num_rows>0)
		 {
			while($row = $result->fetch_assoc())
			{
				echo"<tr><td>".$row["product_no"]."</td><td>".$row["id"]."</td><td>".$row["modl"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["qty"]."</td></tr>";
			}
		 }
		 else{
			 echo "0 results";
		 }
		 echo "</table>";
		 $conn->close();
         ?>
<br><br>
<hr>
<marquee><b><h2><font color="#088A29">Future Fitness... More than just a GYM... </font></h2></marquee>
<hr>

<!--footer begin-->

<footer>
<h2><center>FOLLOW US</center></h2>
<div class="socialmedia">
<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i class="fab fa-google-plus-square fa-2x"></i></i></a>
<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>

</div>
<div class="paymentmethods" >
    <img src="../images/visa-glossy.png" alt="Visa" hspace="5" vspace="5" border="0" />
    <img src="../images/mastercard-glossy.png" alt="Mastercard" hspace="5" vspace="5" border="0" />
    <img src="../images/americanexpress-glossy.png" alt="American Express" hspace="5" vspace="5" border="0" />
    <img src="../images/discover-glossy.png" alt="Discover" hspace="5" vspace="5" border="0" />

    
</div>
</footer>
<h5 align="center"><font color="black">Copyright 2020 &#169 futuerfitness.com . All Rights Reserved.</font></h5>
<!--footer End-->

</body>
</html>