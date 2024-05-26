<?php 
    class DatabaseTest {
        public $host        = DB_HOST;
        public $user        = DB_USER;
        public $password    =  DB_PASS;

        public $link;
        public $error;
        // public function __construct() {
        //     $this->connectDb();
        // }

        // private function connectDb() {
        //     $this->link = mysqli_connect($this->host, $this->user, $this->password);
        //     if(!$this->link) {
        //         $this->error = mysqli_connect_error() ;
        //         return false;
        //     }
        //     return true;
        // }

        // // get user data 
        // public function getUserData($query) {
        //     $result = $this->link->query($query) or die ($this->link->error.__LINE__);
        //     if($result->num_rows > 0) {
        //         return $result;
        //     } else {
        //         return false;
        //     }
        // }
    }
?>