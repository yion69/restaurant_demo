<?php 
    // require __DIR__ . './__config.php';  
    require 'C:\xampp\htdocs\C0S_108_Assignment\Controller\__config.class.php';
    enum RequestType {
        case FOODITEM;
        case USER;
    }

    class DataBase extends Connection_Localhost {

        public function __construct() {
            parent::__construct();
        }

        public function dbConncectStatus () {
            if($this->_connection){return "yes this works";}
            return "I have bad news";
        }   
        public function router (RequestType $request, $method) {
            switch($request) {
                case RequestType::FOODITEM:
                    // header("location: ../../Controller/__foodItem.php?method=$method&table=fooditems");
                    
                    break;
                
                case RequestType::USER: 
                    header("location: ./__user.php?method=$method");
                    break;

                default:
                    header("location: ../pages/Error/error404.php");
                    break;
            }
        }
    }
?>  