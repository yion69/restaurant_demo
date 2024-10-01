<?php 
    require_once __DIR__ . "/__config.class.php";

    class Authentication extends Connection_Localhost {
        protected $tablename, $method;
        private $username, $password;

        public function __construct($user, $pass, $med) {
            parent::__construct();
            $this -> username = $user;
            $this -> password = $pass;
            $this -> method = $med;
            $this -> tablename = "users";
        }
        
        
        public function checkUser () {
            header('Content-Type: application/json');
            $response = null;
            try{
                if(!$this->_connection){
                    throw new Exception();
                }
                
                $query = "SELECT * FROM users where user_username='$this->username' and user_password='$this->password' ";
                $result = mysqli_query($this->_connection, $query) or die();
                
                if(mysqli_num_rows($result) <= 0) {
                    $response = json_encode(["exists" => false]);
                    
                } else {
                    $response = json_encode(["exists" => true]);
                }
                echo $response;
                exit;
            } catch (Exception $e) {
                echo $e;
                exit();
            }
        }

        public function authenticate () {
            try{
                if(!$this -> _connection) {
                    throw new Exception();
                }   
 
                $query = "SELECT * FROM $this->tablename WHERE user_username='$this->username' AND user_password='$this->password'";
                $result = mysqli_query($this->_connection, $query);
 
                if($result->fetch_array() == 0){
                    echo $this->username." | ".$this->password;
                    header("location: ../pages/Login/index.php");
                }

                foreach ($result as $key => $value) {
                    if(
                        $value["user_username"] === $this->username && 
                        $value["user_password"] === $this->password && 
                        $value["user_type"] === "admin") {
                        header("location: ../pages/Admin/index.php");
                    }
                    if(
                        $value["user_username"] === $this->username && 
                        $value["user_password"] === $this->password && 
                        $value["user_type"] === "user") {
                        header("location: ../pages/MainPageV2/index.php");
                    }
                }
            } catch(Exception $err) {
                echo $err;
                
                exit();
            }
        }
    }

    $obj_username = isset($_POST["username"]) ? $_POST["username"] : null;
    $obj_password = isset($_POST["password"]) ? $_POST["password"] : null;
    $obj_method = isset($_POST["method"]) ? $_POST["method"] : null;
   
    $login_username = isset($_GET["username"]) ? $_GET["username"] : null;
    $login_password = isset($_GET["password"]) ? $_GET["password"] : null;
    $login_method = isset($_GET["method"]) ? $_GET["method"] : null;

    $conn = new Connection_Localhost();
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $userObj = new Authentication($obj_username, $obj_password, $obj_method);
        $userObj -> checkUser();
    }
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $userObj = new Authentication($login_username, $login_password, $login_method);
        $userObj -> authenticate(); 
        exit;
    }

    header("location: ../Error/error404.php");
    exit;
?>