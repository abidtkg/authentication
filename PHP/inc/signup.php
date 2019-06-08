<?php
	if (isset($_POST['submit'])) {
		// include the database
		include_once 'db-config.php';

		# for security reason only
		$fristName = mysqli_real_escape_string($conn, $_POST['fristName']);
		$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		// error handeller start

		//if there any emty fields it will return sign up page again
		if (empty($fristName) || empty($lastName) || empty($email) || empty($phone) || empty($pwd)) {
			// here is something empty that's why we are sending user to sign up page again
			header("Location: ../create.php?nullValue");
			exit();
		}else{
				// database row number check
			$sql = "SELECT * FROM users WHERE phone='$phone' OR email='$email'";
			$result = mysqli_query($conn, $sql);
			$rowCheck = mysqli_num_rows($result);

			# we got the row numbers, if the row is getter then 0 that's mean it already used 
			# beacuse we need empty with is not use before
			if ($rowCheck > 0) {

				// we got more then 0 row thats why returning to sign up page
				header("Location: ../create.php?phoneORpasswordAlreadyUsed");
				exit();
			}else{

				// we have the plain text password now hash it
				$hasedPwd = password_hash($pwd, PASSWORD_DEFAULT);

				//now we can insert into the data into the database

				$sql = "INSERT INTO users (fristName, lastName, email, phone, pwd) VALUES ('$fristName', '$lastName', '$email', '$phone', '$hasedPwd');";

				//query the data into database
				mysqli_query($conn, $sql);

				//return to the login page
				header("Location: ../index.php?accountCreateSuccess");
				exit();

			}
		}
	}else{
		header("Location: ../index.php");
	}
?>