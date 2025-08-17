<?php 

    if(isset($_SESSION['user_type'])) {
        $admin =  $_SESSION['user_type'] == "admin";
    }
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    if(isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }
    if(isset($_SESSION['position'])) {
        $position = $_SESSION['position'];
    }
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
    }
    
?>