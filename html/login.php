<?php require_once("php/config.php"); ?>
<?php

	//check submission
	if(isset($_POST['submit'])){

		$errors = array();

		//check if the username & password has benn entered
		if(!isset($_POST['username']) || strlen(trim($_POST['username'])) < 1){
			$errors[] = 'incorrect username';
		}

		if(!isset($_POST['password']) || strlen(trim($_POST['password'])) < 1 ){
			$errors[] = 'incorrect password';
		}

		//check errors in the form
		if(empty($errors)){

				//save username & password//

				$username        = mysqli_real_escape_string($config, $_POST['username']);
				$password        = mysqli_real_escape_string($config, $_POST['password']);
				$hashed_password = shal($password);

				//db query

				$query = "SELECT * FROM userdata
							WHERE email  = '{$username}'
							AND password = '{$hashed_password}'";

				$result_set = mysqli_query($config, $qurery);

				if($result_set){
					// if qu success


					if(mysql_num_rows($result_set) == 1){
						//valid user
						//give rediection to 
						header('Location:'Profile.html'');
					}else{
						$errors[] = 'Invalid Username / Password';
						//incorrect username & pass


					}
				}else{
					$errors[] = 'Database query failed';
					}
			}
		}
		//display errors	
?>