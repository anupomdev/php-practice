<?php 

	require_once 'database.php';

	$id = $_GET['id'];

	$user_update = " UPDATE anupom SET status = 2 where id = $id ";

	// $delete = "DELETE FROM anupom WHERE id = '$id' ";

	$q = mysqli_query($db, $user_update);

		if ($q) {
			header('location:user_details.php');
		}
		else{
			echo 'nai';
		}




?>