<?php
session_start();
require_once '../database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $year = $_POST['year'];
    $progress = $_POST['progress'];
                $insert  =  "INSERT INTO education (title,year,progress) VALUES ('$title','$year','$progress')";
                
                if (mysqli_query($db , $insert)) {
                    echo 'connected';
                }
                else {
                    echo 'error';
                }
}

?>