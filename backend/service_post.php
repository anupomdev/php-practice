<?php
session_start();
require_once '../database.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $icon = $_POST['icon'];
                $insert  =  "INSERT INTO services (title,summary,icon) VALUES ('$title','$summary','$icon')";
                
                if (mysqli_query($db , $insert)) {
                    echo 'connected';
                }
                else {
                    echo 'error';
                }
}

?>