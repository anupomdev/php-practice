<?php
session_start();
require_once '../database.php';

$users_id = $_SESSION['users_id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $image = $_FILES['image']['name'];

    $explode = explode("." , $image);
    $ext = end($explode);
    $allow_format = ['png' , "jpg" , "gif" , "jpeg" , 'JPG' , 'PNG'];

    if (in_array($ext, $allow_format)) {
        if ($_FILES['image']['size'] < 500000000) {
            $images_str = strtolower(str_replace(" " , "-",$name ));
            $image_name = $images_str.'-'.$users_id.'.'.$ext;
            $select = "SELECT * FROM anupom WHERE id = $users_id";
            $q = mysqli_query($db, $select);
            $assoc = mysqli_fetch_assoc($q);

            if (file_exists('upload/'.$assoc['images'])) {
                unlink('upload/'.$assoc['images']);
            }
            $img_localtion = 'upload/'.$image_name;
            move_uploaded_file($_FILES['image']['tmp_name'] ,$img_localtion );

            $update = "UPDATE anupom SET name = '$name' , email = '$email' , phone = '$phone' , images = '$image_name' WHERE id = '$users_id' ";

            $iq = mysqli_query($db, $update);
            
            if ($iq) {
                header("Location:profile.php");
            }
        }
        else{
            echo "jhamela";
        }
    }

    else{
        echo "NOT OK";
    }
}

?>