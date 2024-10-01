<?php 

    require_once __DIR__ . "/__config.class.php";

    $_hostname = "localhost";
    $db_username = "root";
    $db_password = "";
    $_databaseName = "good_food";
    $_port = "3306";
    $_connection = new mysqli(
                    $_hostname, 
                    $db_username,
                    $db_password,
                    $_databaseName,
                    $_port);

    if($_SERVER['REQUEST_METHOD'] === "GET") {
        $total_items_query = "SELECT COUNT(*) as count FROM food_items";
        $total_items_result = mysqli_query($_connection,$total_items_query);
        $total_items = $total_items_result->fetch_assoc()['count'];
        $total_pages = ceil($total_items / 6);

        header('Content-Type: application/json');
        echo json_encode([
            "total_pages" => $total_pages,
            "total_items" => $total_items
        ]);
        exit;
    }

    if($_SERVER['REQUEST_METHOD'] === "POST") {
        $page = isset($_POST['page']) ? $_POST['page'] : null;
        $limit = 6;   
        $offset = $page * 6;
    
        $query = "SELECT * FROM food_items LIMIT $limit OFFSET $offset";
        $result = mysqli_query($_connection, $query) or die();
        $items = $result->fetch_all(MYSQLI_ASSOC);
        
        $newPage = $page+1;
        echo json_encode([
            "page" => "../Items/index.php?page=$newPage",
            "items" => $items,
        ]);
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>