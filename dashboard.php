<?php 
	if (isset($_SESSION['id'])) {
		include 'pages/dash.php';
		exit();
	}else{
		header("Location: index.php");
		exit();
	}
?>