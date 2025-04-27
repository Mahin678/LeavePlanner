<?php 
    if(isset($_SESSION['is_admin'])) {
        $admin = $_SESSION['is_admin'] == "admin";
    }
    if(isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    }
    if(isset($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }
    if(isset($_SESSION['designation'])) {
        $designation = $_SESSION['designation'];
    }
?>