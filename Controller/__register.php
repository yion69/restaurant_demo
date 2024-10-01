<?php
    require_once "./__config.class.php";
    class Register extends Connection_Localhost {
        private $id, $username, $password, $table;
        protected $first_name, $last_name, $email, $telephone;

        public function __construct($user, $pass, $first, $last, $mail, $tele) {
            parent::__construct();
            $this -> username = $user;
            $this -> password = $pass;
            $this -> first_name = $first;
            $this -> last_name = $last;
            $this -> email = $mail;
            $this -> telephone = $tele;
            $this -> table = "users";
        }

        public function autoID () {
            $query = "SELECT * FROM $this->table";
            $row = mysqli_num_rows(mysqli_query($this->_connection, $query));
            echo "U".str_pad($row,3,"0",STR_PAD_LEFT);
        }

        public function dataInput () {
            try {
                if(!$this -> _connection){
                    throw new Exception();
                }
                $query = "INSERT INTO $this->table values()";
            } catch (Exception $e) {
                echo $e;
                exit();
            }
        }
    }
    $con = new Connection_Localhost();
    $reg = new Register("username", "password", "Thuta", "Naing", "thuta@gmail.com", "095190175");

    $reg -> autoID();
?>