<html>

<head>
	<title>Future Fitness Home</title>
	<link rel="stylesheet" type="text/css" href="../styles/home.css">
	<link rel="stylesheet" type="text/css" href="../styles/equipment.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<img class="img-fluid" src="/images/logo.png" width="600" height="250">

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

		<ul>
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
			$sql = "select * from product where type ='EQUP'";
			$result = $conn->query($sql);
        
        	if ($result->num_rows > 0) {
				// output data of each equipment
				while($row = $result->fetch_assoc()) {?>
					<li>
						<div class="card">
							<input type="hidden" value="<?php echo $row["product_id"] ?>">
							<img src="assets/img/<?php echo $row["image_name"] ?>">
		
							<div class="card-header">
								<p class="card-title"><?php echo $row["name"] ?></p>
							</div>
							
							<div class="card-content">
								<p class="card-txt"><span>$</span><?php echo $row["price"] ?></p>
							</div>
			
							<div class="card-action">
								<ul>
									<li>
										<a class="card-button" href="/gym/addtocartfunction.php?product_id=<?php echo $row["product_id"] ?>"><i class="fas fa-shopping-bag"></i></a>
									</li>
									<li>
										<a class="card-button " href="/gym/product.php?product_id=<?php echo $row["product_id"] ?>"><i class="fas fa-eye"></i></a>
									</li>
		
								</ul>
								
								
							</div>
							
			
						</div>
					</li>
				<?php }
					
				?> 
		
			<?php } 
			?>


			
		</ul>
		<!-- <div class="Column1">
			
		</div>


		<div class="Column1">
			<div class="card1">
				<img src="assets/img/eq2.png" width="180px" height="180px">
				</br>

				<b>
					<font size="4px" face="cursive">InFlight Multi Prone Leg Ext / Leg Curl Machine</font>
				</b>
				</br>
				<font size="4px" color="red">Price = $2,495.00</font>

				</br>
				<a class="cardbutton" href="https://thefitnessstore.com/#">ADD TO CART</a>

				</br>
				<a class="cardbutton1"
					href="https://thefitnessstore.com/collections/latest-arrivals/products/inflight-multi-prone-leg-ext-leg-curl-machine">About
					equipment</a>

			</div>
		</div>


		<div class="Column1">
			<div class="card1">
				<img src="assets/img/eq3.png" width="200px" height="200px">
				</br>

				<b>
					<font size="4px" face="cursive">InFlight Fitness Chin Dip Assist Machine</font>
				</b>
				</br>
				<font size="4px" color="red">Price = $3,095.00</font>

				</br>
				<a class="cardbutton" href="https://thefitnessstore.com/#">ADD TO CART</a>

				</br>
				<a class="cardbutton1"
					href="https://thefitnessstore.com/collections/latest-arrivals/products/inflight-fitness-chin-dip-assist-machine">About
					equipment</a>

			</div>
		</div> -->
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
		<font color="black">Copyright 2020 ?? futuerfitness.com . All Rights Reserved.</font>
	</h5>
	<!--footer End-->

</body>

</html>
