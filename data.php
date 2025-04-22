<?php 
    if(isset($_SESSION['is_admin'])) {
        $admin = $_SESSION['is_admin'];
    }
    if(isset($_SESSION['email'])) {
        $admin = $_SESSION['email'];
    }
    if(isset($_SESSION['name'])) {
        $admin = $_SESSION['name'];
    }
    if(isset($_SESSION['designation'])) {
        $admin = $_SESSION['designation'];
    }
?>