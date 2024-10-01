<?php 
    session_start();
    unset($_SESSION["order"]);
    unset($_SESSION["cart"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Food</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./app.js" type="module" defer></script>
</head>

<body>
    <section class="flex-center h-dvh w-full bg-zinc-900 font-golden text-zinc-100">
        <h3 class="text-9xl">Thank you for using our service</h3>
    </section>
    <script>
        setTimeout(() => {
            window.location.href = "../MainPageV2/index.php";
        }, 5000);
    </script>
</body>

</html>