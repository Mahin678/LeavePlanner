<?php
    include "./database.php"; 
    if(  isset($_POST['leave_type'], $_POST['description'], $_POST['start_date'], $_POST['end_date']) &&
    $_POST['leave_type'] !== '' &&
    $_POST['description'] !== '' &&
    $_POST['start_date'] !== '' &&
    $_POST['end_date'] !== '') {
        $db = new DatabaseTest();
        $db->set_application_by_employee(
            $username,
            $_POST['leave_type'],
            $_POST['description'],
            $position,
            $_POST['start_date'],
            $_POST['end_date'],
            'application',
        );
        $_SESSION['application_submitted'] = true;
    } else {
        echo "You are not provide enough data";
    }
?>