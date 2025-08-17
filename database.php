<?php
include "./config.php";
class DatabaseTest
{
    public $host        = DB_HOST;
    public $user        = DB_USER;
    public $password    =  DB_PASS;
    public $db_name     =  DB_NAME;
    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDb();
    }
    private function connectDb()
    {
        $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        if (!$this->link) {
            $this->error = mysqli_connect_error();
            return false;
        }
        return true;
    }

    // get user data 
    public function getUserData($query)
    {
        $result = $this->link->query($query) or die($this->link->error . __LINE__);
        // if($result->num_rows > 0) {
        return $result;
        // } else {
        // return false;
        // }
    }

    public function set_new_employee($name,  $username,  $email, $password, $position, $user_type)
    {
        $stmt = $this->link->prepare("INSERT INTO employee ( name, username, email, password, position, user_type) VALUES ( ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $this->link->error);
        }
        $stmt->bind_param( "ssssss", $name,  $username,  $email, $password, $position, $user_type);
        $success = $stmt->execute();
        if (!$success) {
            echo "Execute failed: " . $stmt->error . "<br>";
        }

        $stmt->close();
        return $success;
    }

    public function get_user_login($email, $password) {
        $stmt = $this->link->prepare("SELECT * FROM employee WHERE email = ?");
        if (!$stmt) {
            die("Prepare failed: " . $this->link->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        $user = $result->fetch_assoc();
        $stmt->close();
        // Check if user exists and password matches
        if ($user && $user['password'] == $password) {
            return $user; // return user data
        } else {
            return false;
        }
    }

    public function set_application_by_employee($username,  $leave_type, $description, $position, $start_date, $end_date, $status)
    {
        $stmt = $this->link->prepare("INSERT INTO employee_leave_info ( username, leave_type, description, position, start_date, end_date, status) VALUES ( ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $this->link->error);
        }
        $stmt->bind_param( "sssssss", $username,  $leave_type,  $description, $position, $start_date, $end_date, $status);
        $success = $stmt->execute();
        if (!$success) {
            echo "Execute failed: " . $stmt->error . "<br>";
        }

        $stmt->close();
        return $success;
    }

    public function get_leave_by_employee($username)
{
    $stmt = $this->link->prepare("SELECT * FROM employee_leave_info WHERE username = ?");
    if (!$stmt) {
        die("Prepare failed: " . $this->link->error);
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    $leaves = [];
    while ($row = $result->fetch_assoc()) {
        $leaves[] = $row;
    }

    $stmt->close();

    if (!empty($leaves)) {
        return [
            'status' => 'success',
            'data'   => $leaves
        ];
    } else {
        return [
            'status' => 'not_found',
            'data'   => []
        ];
    }
}

}
