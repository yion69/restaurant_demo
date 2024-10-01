<?php
    class Connection_Localhost {
        protected $_connection;

        public function __construct() {
            $this -> _connection = $this -> getConnection();
        }
        public function getConnection () {  
            $_hostname = "localhost";
            $db_username = "root";
            $db_password = "";
            $_databaseName = "good_food";
            $_port = "3306";
            try {

                $_connection = new mysqli(
                                $_hostname, 
                                $db_username,
                                $db_password,
                                $_databaseName,
                                $_port);

                if ($_connection->connect_error) {
                    throw new Exception(mysqli_error($_connection));
                };
                return $_connection;
            } catch (mysqli_sql_exception $err) {

                echo "MySQL error i guess $err";
                exit();

            } catch (Exception $err) {

                echo "Exception Error $err";
                exit();

            };
        }
    }
?>