<?php

    require_once __DIR__ . "/__config.class.php";
    
    session_start();

    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = [];
    }

    $foodID = isset($_POST['food_id']) ? $_POST['food_id'] : null;
    $request_method = isset($_POST['method']) ? $_POST['method'] : null;
    
    if($request_method == "insert") {

        foreach ($_SESSION["cart"] as $item) {
            if ($item['food_id'] === $foodID) {
                echo json_encode(["item_exists" => true]);
                exit;
            }
        }

        $con = new Connection_Localhost();
        $query = "SELECT * FROM food_items where food_id='$foodID' ";
        $request = mysqli_query($con->getConnection(), $query);
    
        if(!$request) {
            http_response_code(400);
            echo json_encode(["error" => "request not okay"]);
            exit;
        }
    
        $result = $request->fetch_array(MYSQLI_ASSOC);
        $_SESSION["cart"] = array_merge($_SESSION["cart"], [$result]);
        echo json_encode(["data" => $result]);
        session_write_close();
        exit;
    }

    if($request_method == "clear") {
        $_SESSION["cart"] = [];
        echo json_encode(["response" => "cleared"]);
        exit;
    }
?>