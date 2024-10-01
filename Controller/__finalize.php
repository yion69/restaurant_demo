<?php 
    require_once __DIR__ . "/__config.class.php";

    session_start();

    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
    $location = isset($_POST['location']) ? $_POST['location'] : null;
    $amount = isset($_POST['amount']) ? $_POST['amount'] : null;
    $order = "";
    foreach ($_SESSION["order"]["food_order"] as $key => $value) {
        $order .= $value["food_name"]." | ".$value["food_count"];
    }

    $_SESSION["final"] = [
        "name" => $name,
        "phone" => $phone,
        "location" => $location,
        "amount" => $amount,
        "order" => $order
    ];
    $con = new Connection_Localhost();
    $conn = $con->getConnection();

    $stmt = $conn->prepare("INSERT INTO orders (customer_name, customer_telephone, customer_location, customer_order, customer_amount) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $phone, $location, $order, $amount);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    exit;
?>