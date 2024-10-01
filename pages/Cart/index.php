<?php
session_start();
if(!isset($_SESSION["cart"])){
    $_SESSION["cart"] = [];
}

$item_count = $_SESSION["cart"] ? count($_SESSION['cart']) : 0;
$order_subTotal = 0;
foreach ($_SESSION["cart"] as $key => $value) {
    $order_subTotal += $value["food_price"];
}
$order_fees = $item_count === 0 ? 0 : 2000;
$order_total = $order_subTotal + $order_fees;
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

    <nav class="grid grid-cols-[20%,60%,20%] w-full h-20 lg:px-10 font-golden border-b border-zinc-400">

        <div class="flex-center size-full">
            <a class="flex items-center justify-center md:justify-start size-full lg:px-4" href="../Items/?page=1">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left">
                    <path d="m15 18-6-6 6-6" />
                </svg>
            </a>
        </div>
        <div class="flex-center h-full w-full">
            <img class="w-16 h-16" src="../../assets/brand.png">
            <div class="flex flex-col">
                <h2 class="text-2xl">Buon cibo</h2>
                <span class="text-base">Good Food</span>
            </div>
        </div>
        <div class="flex-center md:justify-end px-4 relative">
            <span class="absolute bottom-3 right-4 md:right-9 lg:right-3 flex-center 
                         w-6 h-6 lg:w-6 lg:h-6 rounded-full bg-zinc-800 font-front text-zinc-100"><?php echo $item_count? $item_count : 0 ?></span>
            <svg xmlns="http://www.w3.org/2000/svg" class="size-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag">
                <path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z" />
                <path d="M3 6h18" />
                <path d="M16 10a4 4 0 0 1-8 0" />
            </svg>
        </div>

    </nav>

    <section class="container grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[60%,40%] 
                    grid-rows-[60%,40%] md:grid-rows-[70%,30%] lg:grid-rows-1
                    h-dvh w-full mx-auto pt-4 pb-2">

        <div class="grid grid-flow-row auto-rows-max p-4 gap-2 overflow-y-auto">
            <?php
            foreach ($_SESSION["cart"] as $key => $value) {
                
                $item_id = $value["food_id"] ? $value["food_id"] : "default_id";
                $item_name = $value["food_name"] ? $value["food_name"] : "default_name";
                $item_price = $value["food_price"] ? $value["food_price"] : "default_price";

                echo
                '<div class="grid grid-cols-2 h-32 md:h-40 rounded-md">
                <div class="flex-center size-full"> 
                    <img src="../../assets/food-items/Entree/pngegg(11).png" alt="" class="item-image w-fit md:w-2/3 h-fit object-cover">
                </div>  
                <div class="item-container flex flex-col items-end justify-center px-4 py-2 gap-2 font-front">
                    <h3 class="item-name text-lg md:text-3xl w-full md:pe-10 text-end">'.$item_name.'</h3>
                    <p class="item-price text-lg md:text-xl w-full md:pe-10 text-end">'.$item_price.' MMK</p>
                    <p class="item-id hidden">'.$item_id.'</p>
                    <div class="flex w-4/5 h-4/5 gap-1">
                        <button class="item-minus flex-center w-1/3 h-full md:h-5/6 lg:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full md:size-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-minus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/></svg>
                        </button>
                        <p class="item-count w-1/3 h-full md:h-5/6 lg:h-4/6 flex-center text-2xl font-front">1</p>
                        <button class="item-plus flex-center w-1/3 h-full md:h-5/6 lg:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-full md:h-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                        </button>
                    </div>
                </div>
            </div>';
            };
            ?>
        </div>

        <div class="grid grid-rows-5 w-11/12 md:w-full lg:w-11/12 h-full md:h-full lg:h-1/2 mx-auto my-2 p-4 
                    rounded-md border-2 border-zinc-400 font-newsweekly">
            <div class="grid grid-cols-2 items-center">
                <h2 class="text-3xl font-golden">Your Cart</h2>
                <button class="cart-clear  w-1/3 h-5/6 ms-auto text-red-600 text-lg">Clear</button>
            </div>
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-golden">Sub Total</h3>
                <p class="item-subTotal text-lg"><?php echo $order_subTotal?> mmk</p>
            </div>
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-golden">Fees & Taxes</h3>
                <p class="item-fees text-lg"><?php echo $order_fees?> mmk</p>
            </div>
            <div class="flex items-center justify-between border-t border-zinc-400 font-semibold">
                <h3 class="text-xl font-golden">Total</h3>
                <p class="item-total text-xl"><?php echo $order_total?> mmk</p>
            </div>
            <div class="flex-center font-golden text-sm text-zinc-100">
                <button class="btn-checkout w-full h-5/6 rounded-md bg-zinc-800">Checkout</button>
            </div>
        </div>
    </section>

</body>

</html>