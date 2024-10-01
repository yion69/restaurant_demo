<?php
    require_once __DIR__ . "/__config.class.php";

    class FoodItem extends Connection_Localhost {
        private $request_method, $table_foodItem;
        
        public function __construct() {
            parent::__construct();
            // $this -> request_method = ;
            $this -> table_foodItem = "food_items";
        }

        public function getFoodItems($request) {
            
            $query = null;
            if(is_null($request) || $request == ""){
                throw new Exception("Request Method NULL");
            };
            
            try {
                switch ($request) {
                    case 'all':
                        $query = "SELECT * FROM " . $this -> table_foodItem;
                        break;
                    
                    case "relevance":
                        $query = "SELECT * FROM " . $this -> table_foodItem . " ORDER BY food_orderCount DESC";
                        break;
    
                    case "rating":
                        $query = "SELECT * FROM " . $this -> table_foodItem . " ORDER BY food_rating DESC";
                        break;   
                    
                    case "arrival":
                        $query = "SELECT * FROM " . $this -> table_foodItem . " ORDER BY created_at ASC";
                        break;
    
                    default:
                        throw new Exception('ERR: Switch Case Error');
                        break;
                };
                
                $con = mysqli_query($this->_connection, $query) or die();
                
                if (!$con) {
                    throw new Exception(mysqli_error($this->_connection));
                }
                header('Content-Type: application/json');
                $response = [];
                while($result = mysqli_fetch_assoc($con)) {
                    array_push($response, $result);
                }
                echo json_encode($response);
                exit();

            } catch (mysqli_sql_exception $err) {
                echo "ERR:Cannot connect to database for fetching data <br>".$err;
                header("location: ../pages/Error/ErrorDB.php?error_code=$err");
                exit();
            } catch (Exception $err) {
                echo "ERR:Exception Error <br>".$err;
                exit();
            }
        }

        public function insertFoodItem (
                                        $food_id,
                                        $food_name,
                                        $food_price,
                                        $food_category,
                                        $food_rating, 
                                        $food_preparationTime, 
                                        $food_orderCount, 
                                        $food_description, 
                                        $food_photo
            ) {
            try {
                if(!$this->_connection){
                    throw new Exception();
                }
                $stmt = $this->_connection->prepare(
                    "INSERT INTO food_items (
                                                food_id, 
                                                food_name, 
                                                food_price, 
                                                food_category, 
                                                food_rating, 
                                                food_preparationTime, 
                                                food_orderCount, 
                                                food_description, 
                                                food_photo) 
                                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param(
                    "ssdsddiss", $food_id, $food_name, $food_price, $food_category, $food_rating, $food_preparationTime, $food_orderCount, $food_description, $food_photo);
                $stmt->execute();
                $stmt->close();
                $this->_connection->close();

            } catch (Exception $e) {
                header("location: ../pages/Error/ErrorDB.php?error_code=$e");
                exit();
            }
        }
        public function checkFoodItem ($foodID) {
            try {
                if(!$this->_connection){
                    throw new Exception();
                }
                $query = "SELECT * FROM food_items where food_id='$foodID'";
                $request = mysqli_query($this->_connection, $query);
                if(mysqli_num_rows($request) <= 0){
                    echo json_encode(["response" => false]);
                    exit;
                }
                echo json_encode(["response" => true, "data" => $request->fetch_assoc()]);
                exit;
            } catch (Exception $e) {
                header("location: ../pages/Error/ErrorDB.php?error_code=$e");
                echo $e;
                exit();
            }
        }

        public function deleteFoodItem ($foodID) {
            try {
                if(!$this->_connection){
                    throw new Exception();
                }
                    $stmt = $this->_connection->prepare(
                        "DELETE FROM food_items where food_id='$foodID'");
                    $stmt->execute();
                $stmt->close();
                $this->_connection->close();

            } catch (Exception $e) {
                header("location: ../pages/Error/ErrorDB.php?error_code=$e");
                echo $e;
                exit();
            }
        }
        public function updateFoodItem(
            $food_id,
            $food_name,
            $food_price,
            $food_category,
            $food_rating,
            $food_preparationTime,
            $food_orderCount,
            $food_description,
            $food_photo
        ) {
            try {
                if (!$this->_connection) {
                    throw new Exception("Database connection error");
                }

                $stmt = $this->_connection->prepare(
                    "UPDATE food_items SET 
                    food_name = ?, 
                    food_price = ?, 
                    food_category = ?, 
                    food_rating = ?, 
                    food_preparationTime = ?, 
                    food_orderCount = ?, 
                    food_description = ?, 
                    food_photo = ? 
                WHERE food_id = ?"
                );

                $stmt->bind_param(
                    "sdsddisss",
                    $food_name,
                    $food_price,
                    $food_category,
                    $food_rating,
                    $food_preparationTime,
                    $food_orderCount,
                    $food_description,
                    $food_photo,
                    $food_id
                );

                $stmt->execute();

                if ($stmt->affected_rows === 0) {
                    echo json_encode(["response" => false]);
                    exit;
                }

                $stmt->close();
                $this->_connection->close();
                
                echo json_encode(["response" => true]);
                exit;
            } catch (Exception $e) {
                header("location: ../pages/Error/ErrorDB.php?error_code=" . urlencode($e->getMessage()));
                echo $e;
                exit();
            }
        }
    }

    $request_method = isset($_POST['method']) ? $_POST['method'] : null;
    $food = new FoodItem();
    if($request_method == "all") {
        $food -> getFoodItems("all");
    }
    if($request_method == "relevance") {
        $food -> getFoodItems("relevance");
    }
    if($request_method == "rating"){
        $food -> getFoodItems('rating');
    }
    if($request_method == "arrival"){
        $food -> getFoodItems('arrival');
    }
    if($request_method == "insert") {
        try {
            
            define("FOOD_ID", isset($_POST['foodID']) ? $_POST['foodID'] : null);
            define("FOOD_NAME", isset($_POST['foodName']) ? $_POST['foodName'] : null);
            define("FOOD_PRICE", isset($_POST['foodPrice']) ? $_POST['foodPrice'] : null);
            define("FOOD_CATEGORY", isset($_POST['foodCategory']) ? $_POST['foodCategory'] : null);
            define("FOOD_RATING", isset($_POST['foodRating']) ? $_POST['foodRating'] : null);
            define("FOOD_PREPARATION", isset($_POST['foodPreparationTime']) ? $_POST['foodPreparationTime'] : null);
            define("FOOD_ORDER", isset($_POST['foodOrderCount']) ? $_POST['foodOrderCount'] : null);
            define("FOOD_DESCRIPTION", isset($_POST['foodDescription']) ? $_POST['foodDescription'] : null);
            define("FOOD_PHOTO", isset($_POST['foodPhoto']) ? $_POST['foodPhoto'] : null);

            $food -> insertFoodItem(
                FOOD_ID, FOOD_NAME, FOOD_PRICE, FOOD_CATEGORY,FOOD_RATING,FOOD_PREPARATION, FOOD_ORDER, FOOD_DESCRIPTION, FOOD_PHOTO
            );
        } catch (Exception $e) {
            header("location: ../pages/Error/ErrorDB.php?error_code=$e");
            exit();
        }
    }
    if($request_method == "delete") {
        $itemid = isset($_POST['foodID']) ? $_POST['foodID'] : null;
        $food->deleteFoodItem($itemid);
    }
    if($request_method == "check") {
        $itemid = isset($_POST['foodID']) ? $_POST['foodID'] : null;
        $food->checkFoodItem($itemid);
    }
    if($request_method == "update") {
            define("FOOD_ID", isset($_POST["id"]) ? $_POST["id"] : null);
            define("FOOD_NAME", isset($_POST["name"]) ? $_POST["name"] : null);
            define("FOOD_PRICE", isset($_POST["price"]) ? $_POST["price"] : null);
            define("FOOD_CATEGORY", isset($_POST["category"]) ? $_POST["category"] : null);
            define("FOOD_RATING", isset($_POST["rating"]) ? $_POST["rating"] : null);
            define("FOOD_PREPARATION", isset($_POST["time"]) ? $_POST["time"] : null);
            define("FOOD_ORDER", isset($_POST["order"]) ? $_POST["order"] : null);
            define("FOOD_DESCRIPTION", isset($_POST["description"]) ? $_POST["description"] : null);
            define("FOOD_PHOTO", isset($_POST["photo"]) ? $_POST["photo"] : null);

            $food->updateFoodItem(
                FOOD_ID,FOOD_NAME,FOOD_PRICE,FOOD_CATEGORY,FOOD_RATING,FOOD_PREPARATION,FOOD_ORDER,FOOD_DESCRIPTION,FOOD_PHOTO
            );
            exit;
    }
?>
