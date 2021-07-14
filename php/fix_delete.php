<?php 

	require_once 'database.php';

	$id = $_GET['id'];

	$delete = "DELETE FROM anupom WHERE id = '$id' ";

	$q = mysqli_query($db, $delete);

		if ($q) {
			header('location:trash_user.php');
		}
		else{
			echo 'nai';
		}





?>