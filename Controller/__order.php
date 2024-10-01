<?php
    
    session_start();

    unset($_SESSION["order"]);

    $food_list = file_get_contents("php://input");
    $food_order = json_decode($food_list, true);
    $_SESSION["order"] = $food_order;
    
    echo json_encode($food_order);
    exit;
?>