<?php
session_start();
require_once 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $_SESSION['namevalue'] = $name;
    $_SESSION['emailvalue'] = $email;
    $_SESSION['phonevalue'] = $phone;

    if (empty($name)) {
        $_SESSION['name'] = "please enter your name";
        header("location:user-edit.php?id=".$user_id);
    } 
    elseif (empty($email)) {
        $_SESSION['email'] = "please enter your email";
        header("location:user-edit.php?id=".$user_id);
    }
    elseif (empty($phone)) {
        $_SESSION['phone'] = "please enter your phone";
        header("location:user-edit.php?id=".$user_id);
    }
     else {
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $_SESSION['namevalid'] = "please enter a valid name";
            header("location:user-edit.php?id=".$user_id);
        }
         elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailvalid'] = "please enter a valid email";
            header("location:user-edit.php?id=".$user_id);     
        }
         else {


               $selcount = "SELECT count(*) as total FROM anupom WHERE email = '$email' ";
               $sq = mysqli_query($db , $selcount);
               $assoc = mysqli_fetch_assoc($sq);

             if ($assoc['total'] > 1) {
                 $_SESSION['emailvalid'] = "THIS EMAIL ALREADY EXIST";
                 header("location:user-edit.php?id=".$user_id);
             }
             else{
        
                $insert  =  " UPDATE anupom SET name = '$name' , email = '$email' , phone = '$phone' WHERE id = '$user_id'";
                
                if (mysqli_query($db , $insert)) {
                    echo 'connected';
                }
                else {
                    echo 'error';
                }
             }
            
        }

    }

} else {
    echo 'not';
}

?>