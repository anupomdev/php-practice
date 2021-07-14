<?php 

	require_once 'database.php';
	$id = $_GET['id'];

	$user_update = "UPDATE anupom SET status = 1 where id = $id";

	$q = mysqli_query($db, $user_update);

		if ($q) {
			header('location:trash_user.php');
		}
		else{
			echo 'nai';
		}





?>