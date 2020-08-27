<?php
			
		require_once('../dbconn.php');

		// check if email is already taken
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email_check']) && $_POST['email_check'] == 1) {

			// validate email

			$email = mysqli_escape_string($conn, $_POST['email']);

			$sqlcheck = "SELECT email FROM users WHERE email = '$email' ";

			$checkResult = $conn->query($sqlcheck);

			// check if email already taken
			if($checkResult->num_rows > 0) {
				echo "Sorry! email has already taken. Please try another.";
			}
		}


		// save records into the database
		elseif($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save']) && $_POST['save'] == 1) {

			$email 		= 		$_POST['email'];
			$password   = 		$_POST['password'];
			$location   =		$_POST['location'];
			$save 		= 		$_POST['save'];

			$password   =        md5($password);

			// insert into table

			$sql = "INSERT INTO users(email, password, location) VALUES ('$email', '$password', '$location') ";

			$result = $conn->query($sql);
			
			if($result) {
				echo "<div class='alert alert-success alert-dismissible'> 
					<button class='close' type='button' data-dismiss='alert'>×</button>
					Registration has completed successfully. Please Login
				</div>";
			}

			else {
				echo "<div class='alert alert-danger alert-dismissible'>
				<button type='button' class='close' data-dismiss='alert'> × </button>
				Whoops! some error encountered. Please try again.";
			}
		}	

?>