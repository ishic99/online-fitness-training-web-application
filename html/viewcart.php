<html>
<?php session_start(); ?>
<head>
	<title>Future Fitness Home</title>
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
    <link rel="stylesheet" type="text/css" href="../styles/equipment.css">
    
    <link rel="stylesheet" type="text/css" href="../styles/viewcart.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<img class="img-fluid" src="../images/logo.png" width="600" height="250">

	<hr>

	<!--Start of menue bar-->
	<!--Main Menue bar-->

	<div class="m1">
		<ul class="m2">
			<li class="list1">
				<div class="activeHome"><a class="menu" href="#">Home</a></div>
			</li>

			<div class="list1">
				<li class="list1"><a class="menu" href="Registration.html">Register</a>

					<div class="droplist">

					</div>

				</li>

			</div>


			<li class="list1"><a class="menu" href="#">Login</a></li>
			<li class="list1"><a class="menu" href="Contactus.html">Contact Us</a></li>
			<li class="list1"><a class="menu" href="#">Profile</a></li>
		</ul>


		<!--Sub Menue(Cart,Profile and Search-bar)-->

		<div class="cart">

			<a class="cart1" href="cart.html"><i class="fas fa-shopping-cart fa-2x"></i></a>

		</div>

		<div class="profile">

			<div class="dropboxprof">

				<div class="profile1"><i class="fas fa-user-circle fa-2x"></i></div>

				<div class="droplistprof">

					<a href="#">Sign In</a>
					<a href="Registration.html">Sign Up</a>

				</div>

			</div>

		</div>


		<div class="search-bar">

			<form action="action.php">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>

		</div>

	</div>

	<!--!end of Sub Menue(Cart,Profile and Search-bar)-->

	<!--!end of menue bar-->

	<br><br>
	</div>
	<div class="sidebar">

		<a href="#">Suppliments</a>
		<a href="#">Vitamins</a>
		<a href="#">Equipments</a>
		<a href="#">Shedules</a>



	</div>
	<div class="icon-bar">
		<a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook"></i></a>
		<a href="https://twitter.com/login" class="twitter"><i class="fa fa-twitter"></i></a>
		<a href="https://www.google.com/intl/si/gmail/about/" class="google"><i class="fa fa-google"></i></a>
		<a href="https://www.linkedin.com/uas/login" class="linkedin"><i class="fa fa-linkedin"></i></a>
		<a href="https://www.youtube.com/" class="youtube"><i class="fa fa-youtube"></i></a>
	</div>
	</br>
	<div class="header">

		<h1>EQUIPMENTS</h1>

	</div>

	<hr>

	<!--- shopping card 1-->

	<div class="row">

    <section>
        <!--for demo wrap-->
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                <th>ID</th>
                <th>PRODUCT NAME</th>
                <th>CATEGOREY</th>
                <th>QUANTITY</th>
                <th>AMOUNT</th>
                <th></th>
                </tr>
            </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <?php 

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
                $sql = "SELECT *,p.type as TYPE,P.name as PRODUCT_NAME FROM order_details as o INNER join product as p on o.PRODUCT_ID = p.product_id where IS_PAID =1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each equipment
                    while($row = $result->fetch_assoc()) {?>
                        <tr>
                            <td><?php $row["p.product_id"] ?></td>
                            <td><?php $row["PRODUCT_NAME"] ?></td>
                            <td><?php $row["TYPE"] ?></td>
                            <td><?php $row["QUANITITY"] ?></td>
                            <td>$.<?php $row["AMOUNT"] ?></td>
                            <td>
                                <a class="pay-button" href="">pay now</a>
                                <a class="pay-button" href="">remove</a>
                            </td>
                        </tr>
                    <?php } 
                    
                }?>    
            </tbody>
            </table>
        </div>
    </section>

	
		</br>
	</div>

	<br/>
	<br/>

	<!-- <a class="button" href="next equipment.html">Next page &raquo;</a> -->

	<hr>


	</div>
	<hr>

	<marquee><b>
			<h2>
				<font color="#088A29">Future Fitness... More than just a GYM... </font>
			</h2>
	</marquee>
	<hr>

	<!--footer begin-->

	<footer>
		<h2>
			<center>FOLLOW US</center>
		</h2>
		<div class="socialmedia">
			<a class="socialmedia1" href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>
			<a class="socialmedia1" href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
			<a class="socialmedia1" href="https://twitter.com/login"><i class="fab fa-twitter-square fa-2x"></i></a>
			<a class="socialmedia1" href="https://www.google.com/intl/si/gmail/about/#"><i
					class="fab fa-google-plus-square fa-2x"></i></i></a>
			<a class="socialmedia1" href="https://www.whatsapp.com"><i class="fab fa-whatsapp-square fa-2x"></i></a>


		</div>
		<div class="paymentmethods">
			<img src="../images/visa-glossy.png" alt="Visa" hspace="5" vspace="5" border="0" />
			<img src="../images/mastercard-glossy.png" alt="Mastercard" hspace="5" vspace="5" border="0" />
			<img src="../images/americanexpress-glossy.png" alt="American Express" hspace="5" vspace="5" border="0" />
			<img src="../images/discover-glossy.png" alt="Discover" hspace="5" vspace="5" border="0" />


		</div>
	</footer>
	<h5 align="center">
		<font color="black">Copyright 2020 © futuerfitness.com . All Rights Reserved.</font>
	</h5>
	<!--footer End-->

</body>

</html>
