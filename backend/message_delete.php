<?php
session_start();
require_once '../database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // print_r($_POST);
        // $name = $_POST['name'];
        // $email = $_POST['email'];
        // $phone = $_POST['phone'];
foreach ($_POST['msg_id'] as $key => $users_id) {

        $update = "UPDATE contacts SET deleted = 2 WHERE id = '$users_id' ";
        $iq = mysqli_query($db, $update);
        
        if ($iq) {
            header("Location:messages.php");
        }
    }



}

?>