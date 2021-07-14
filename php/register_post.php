<?php
session_start();
require_once 'database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $_SESSION['namevalue'] = $name;
    $_SESSION['emailvalue'] = $email;
    $_SESSION['phonevalue'] = $phone;
    $_SESSION['passwordvalue'] = $password;

    if (empty($name)) {
        $_SESSION['name'] = "please enter your name";
        header("location:index.php");
    } 
    elseif (empty($email)) {
        $_SESSION['email'] = "please enter your email";
        header("location:index.php");
    }
    elseif (empty($phone)) {
        $_SESSION['phone'] = "please enter your phone";
        header("location:index.php");
    }
     elseif (empty($password)) {
        $_SESSION['password'] = "please enter your password";
        header("location:index.php");
    }
     else {
        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);

        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $_SESSION['namevalid'] = "please enter a valid name";
            header("location:index.php");
        }
         elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['emailvalid'] = "please enter a valid email";
            header("location:index.php");     
        }
         elseif ( !$uppercase & !$lowercase || strlen($password) < 7  ) {
            $_SESSION['passwordvalid'] = "please enter a valid password";
            header("location:index.php");
        }
         else {

               $selcount = "SELECT count(*) as total FROM anupom WHERE email = '$email' ";
               $sq = mysqli_query($db , $selcount);
               $assoc = mysqli_fetch_assoc($sq);

             if ($assoc['total'] > 0) {
                 $_SESSION['emailvalid'] = "THIS EMAIL ALREADY EXIST";
                 header("location:index.php");
             }
             else{
                    // insert database code
                $pass = password_hash($password , PASSWORD_DEFAULT);

                $insert  =  "INSERT INTO anupom(name,email,phone,password) VALUES ('$name','$email','$phone','$pass')";
                
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