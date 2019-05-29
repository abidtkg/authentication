<?php
session_start();

	if (isset($_POST['login'])) {
		// include database
		include 'db-config.php';

		$userid = mysqli_real_escape_string($conn, $_POST['userid']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		//error handeller start here

		//if input data empty retun to the login page again
		if (empty($userid) || empty($pwd)) {
			# data is empty that's why sending to login page again
			header("Location: ../index.php?nullinput");
			exit();
		}else{
			// search the users phone or email for veryfing login
			$sql = "SELECT * FROM users WHERE email='$userid' OR phone='$userid'";

			// get the all users data
			$result = mysqli_query($conn, $sql);

			//now we fetch the rows
			$rowCheck = mysqli_num_rows($result);

			// we got the row, now if there is more then 0 rows that's mean it have 1 user otherwise don't have
			if ($rowCheck < 1) {
				// we don't have any users
				header("Location: ../index.php");
				exit();
			}else{
				if ($row = mysqli_fetch_assoc($result)) {
					 // now we check the password
					$checkPwd = password_verify($pwd, $row['pwd']);
					if ($checkPwd == false) {
						# password did not mathced
						header("Location: ../index.php?passError");
						exit();
					}elseif ($checkPwd == true) {
						# password matched now session start
						$_SESSION['id'] =$row['id'];
						$_SESSION['fristName'] = $row['fristName'];
						$_SESSION['lastName'] = $orw['lastName'];
						$_SESSION['email'] = $orw['email'];
						$_SESSION['phone'] = $orw['phone'];

						//session start succssfully thats mean user logged in
						header("Location: ../dashboard.php");
						exit();
					}
				}
			}
		}
	}else{
		// not came here by pressed button
		header("Location: ../index.php");
		exit();
	}
?>