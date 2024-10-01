<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR404</title>
</head>
<body>
 <?php 
    $error = isset($_POST["error_code"]) ? $_POST["error_code"] : null;
    
    echo $error;
?>   
</body>
</html>