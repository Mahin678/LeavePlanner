
<?php
    $type = array(
        'employee',
        'new',
        'admin'
    );

    if(($_SERVER["REQUEST_METHOD"] == "POST") &&  in_array($_POST['type'], $type) ) {

        $name   =  isset($_POST['name']) ? $_POST['name'] : 'Mahin Tazuar';
        $email  =  isset($_POST['email']) ? $_POST['email'] : false;
        $type   =  isset($_POST['type']) ? $_POST['type'] : false;

        if($name && strlen($name) > 0 && $email && strlen($email) > 0 && $type && strlen($type) > 0) {
            session_unset();
            $_SESSION['is_admin']    = $type;
            $_SESSION['email']       = $email;
            $_SESSION['name']        = $name;
            $_SESSION['designation'] = 'Software Developer';
            header('Location: dashboard.php');
        }
    }
?>