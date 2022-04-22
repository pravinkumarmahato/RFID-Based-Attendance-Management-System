<?php
    $conn = mysqli_connect("localhost", "root", "", "rfid_attendence_system") or die(mysqli_error($conn));
    if(!isset($_SESSION)){
        session_start();
    }
?>