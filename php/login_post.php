<?php
session_start();
require_once 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $selcount = "SELECT count(*) as total , id , name , email , password FROM anupom WHERE email = '$email' ";
    $sq = mysqli_query($db , $selcount);
    $assoc = mysqli_fetch_assoc($sq);


    if ($assoc['total'] > 0) {
        $hash = $assoc['password'];
        if (password_verify($password , $hash)) {
            $_SESSION['users_id'] = $assoc['id'];
            $_SESSION['email'] = $assoc['email'];
            $_SESSION['name'] = $assoc['name'];
            header('Location:backend/dashboard.php');
        }
        else {
           echo "not found";
        }
    }
    else{
        header('Location:login.php');
    }
}

?>