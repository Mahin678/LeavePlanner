
<?php

    $type = array(
        'employee',
        'new',
        'admin'
    );
    include "./database.php";
      function generateUsername($username) {
            // Convert to lowercase
            $username = strtolower($username);
            
            // Remove any character that is not a letter, number, or space
            $username = preg_replace("/[^a-z0-9\s]/", "", $username);
            
            // Replace spaces with underscores
            $username = str_replace(" ", "_", $username);
            
            // Append a random 4-digit number (or more if needed)
            $randomNumber = rand(1000, 9999);
            
            return $username . $randomNumber;
        }
    


    if(($_SERVER["REQUEST_METHOD"] == "POST") &&  $_POST['type'] == "new" ) {
        session_unset();
        $name   =  isset($_POST['name']) ? $_POST['name'] : 'Mahin Tazuar';
        $email  =  isset($_POST['email']) ? $_POST['email'] : false;
        $password   =  isset($_POST['password']) ? $_POST['password'] : false;
        $user_type   =  isset($_POST['type']) ? $_POST['type'] : false;
        $position   =  isset($_POST['position']) ? $_POST['position'] : 'software dev';

        if(
            $name && strlen($name) > 0 && 
            $email && strlen($email) > 0 && 
            $position && strlen($position) > 0 && 
            $password && strlen ($password) > 0 && 
            $user_type && strlen($user_type) > 0) {
            $_SESSION['is_admin']    = $user_type;
            $_SESSION['email']       = $email;
            $_SESSION['name']        = $name;
            $_SESSION['designation'] = $position;
            $_SESSION['user_type'] = "admin";
            
            $username = generateUsername($name);

            $db = new DatabaseTest();
            if($db->set_new_employee (
                $name, 
                $username, 
                $email, 
                $password, 
                $position,
                $user_type
                )
            ) {
                $_POST['type'] = array();
                echo "Inserted successfully";
            } else {
                $_POST['type'] = array();
            }
            echo "working new world";
        }
    } else if(isset($_POST['email']) && isset($_POST['password'])) {
        $db = new DatabaseTest();
        $user = $db->get_user_login($_POST['email'], $_POST['password']);
        if($user) {
            session_unset();
            $_SESSION['email']   =  $user['email'];
            $_SESSION['name']        = $user['name'];
            $_SESSION['position'] = $user['position'];
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['username'] = $user['username'];
            header('Location: dashboard.php');
        } else {
            session_unset();
            echo "Password Not Matched";
        } 
    }
?>