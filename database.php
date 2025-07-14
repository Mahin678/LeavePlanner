<?php 
    include "./config.php";
    class DatabaseTest {
        public $host        = DB_HOST;
        public $user        = DB_USER;
        public $password    =  DB_PASS;
        public $db_name     =  DB_NAME;
        public $link;
        public $error;

        public function __construct() {
            $this->connectDb();
        }
        private function connectDb() {
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
            if(!$this->link) {
                $this->error = mysqli_connect_error() ;
                return false;
            }
            return true;
        }

        // get user data 
        public function getUserData($query) {
            $result = $this->link->query($query) or die ($this->link->error.__LINE__);
            // if($result->num_rows > 0) {
                return $result;
            // } else {
                // return false;
            // }
        }
        public function inNewEmployee($query) {
            $result = $this->link->query($query) or die ($this->link->error.__LINE__);
            if($result) {
                return $result;   
            } else {
                    return false;
            }
        }
    } 
?>