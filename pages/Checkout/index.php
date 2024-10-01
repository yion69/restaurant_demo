<?php 
    session_start();
    $order_fees = 0;
    $order_subTotal = 0;
    $order_deliveryFees = 2500;
    if(!isset($_SESSION["order"])){
        $_SESSION["order"] = [];
    }
    function extractNumbers($str) {
        preg_match_all('/\d+/', $str, $matches);
        return isset($matches[0]) ? implode('', $matches[0]) : '';
    }
    if($_SESSION["order"]["food_order"]) {
        foreach ($_SESSION["order"]["food_order"] as $key => $value) {
            $order_subTotal = $value["food_total"]?$value["food_total"]:0;
            $order_fees = extractNumbers($value["food_fees"]);
        }
    }
    $order_total = $order_subTotal+$order_fees+$order_deliveryFees
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Food</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="./app.js" type="module" defer></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
    crossorigin=""></script>
</head>

<body>
 
    <nav class="grid grid-cols-[20%,60%,20%] w-full h-20 lg:px-10 font-golden border-b border-zinc-400">
        
        <div class="flex-center size-full">
            <a class="flex items-center justify-center md:justify-start size-full lg:px-4" href="../Cart/">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
            </a>
        </div>
        <div class="flex-center h-full w-full">
            <img class="w-16 h-16" src="../../assets/brand.png">
            <div class="flex flex-col">
                <h2 class="text-2xl">Buon cibo</h2>
                <span class="text-base">Good Food</span>
            </div>
        </div>
        <div class="flex-center md:justify-end relative">
            <span class="absolute bottom-3 right-4 md:right-5    flex-center 
                         size-6 rounded-full bg-zinc-800 font-front text-zinc-100">3</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="size-10" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
        </div>

    </nav>
    
    <section class="container grid grid-cols-1 md:grid-cols-1 lg:grid-cols-[60%,40%] 
                    grid-rows-[35%,65%] md:grid-rows-[40%,60%] lg:grid-rows-1
                    h-dvh w-full mx-auto pt-4 pb-2 px-4 ">

        <div class="relative flex flex-col mt-2 border-2 border-zinc-900">

            <div class="flex flex-col z-0 h-4/5 md:h-4/5 lg:h-5/6 w-full" id="map"></div>
            <div class="grid grid-cols-[20%,65%,15%] lg:items-center h-1/5 md:h-1/5 lg:h-1/6 w-full p-2 gap-1 
                        border-t-2 border-zinc-900 font-front text-base md:text-xl lg:text-2xl">
                <input type="text" class="map-address house-address h-full md:h-5/6 lg:h-3/6 px-2 border-b-2 border-zinc-900"
                placeholder="House">
                <input type="text" class="map-address map-address-2 h-full md:h-5/6 lg:h-3/6 px-2 border-b-2 border-zinc-900" placeholder="Address" disabled>
                <input type="text" class="hidden map-latlng">
                <button type="text" class="map-update flex-center w-11/12">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10/12 md:w-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pinned"><path d="M18 8c0 3.613-3.869 7.429-5.393 8.795a1 1 0 0 1-1.214 0C9.87 15.429 6 11.613 6 8a6 6 0 0 1 12 0"/><circle cx="12" cy="8" r="2"/><path d="M8.714 14h-3.71a1 1 0 0 0-.948.683l-2.004 6A1 1 0 0 0 3 22h18a1 1 0 0 0 .948-1.316l-2-6a1 1 0 0 0-.949-.684h-3.712"/></svg>
                </button>
            </div>
            <button class=" map-reset absolute top-1 lg:top-4 right-1 lg:right-4 z-10 text-zinc-200
                            flex-center size-10 rounded-md border-2 border-zinc-900 bg-zinc-900 bg-opacity-75">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5/6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-locate"><line x1="2" x2="5" y1="12" y2="12"/><line x1="19" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="5"/><line x1="12" x2="12" y1="19" y2="22"/><circle cx="12" cy="12" r="7"/></svg>
            </button>

        </div>    

        <div class="grid grid-rows-[15%,50%,25%,10%] md:grid-rows-[12.5%,50%,25%,12.5%]
                    w-full md:w-full lg:w-11/12 h-full mx-auto my-0 lg:my-2 p-4 md:p-4 lg:p-6 
                    rounded-md border-2 border-t-0 lg:border-t-2 rounded-t-none border-zinc-900 font-newsweekly">
            <h2 class="text-3xl font-golden">Checkout</h2>
            <ul class="flex flex-col font-newsweekly text-base md:text-base lg:text-lg">
                <?php 
                    foreach ($_SESSION["order"]["food_order"] as $key => $value) {
                        echo '
                            <li class="flex justify-between">
                                <p>'.$value["food_name"].'
                                    <span class="font-front text-sm"> × '.$value["food_count"].'</span>
                                 </p>
                                <p>'.$value["food_price"].'</p>
                            </li>
                        ';
                    }
                ?>
            </ul>
            <div class="grid grid-rows-4 border-t border-zinc-400">
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-golden">Sub Total</h3>
                    <p class="text-lg"><?php echo $order_subTotal?> mmk</p>
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-golden">Fees & Taxes</h3>
                    <p class="text-lg"><?php echo $order_fees?> mmk</p>
                </div>
                <div class="flex items-center justify-between">
                    <h3 class="text-base font-golden">Delivery Fees</h3>
                    <p class="text-lg"><?php echo $order_deliveryFees?> mmk</p>
                </div>
                <div class="flex items-center justify-between border-t border-zinc-400 font-semibold">
                    <h3 class="text-lg font-golden">Total</h3>
                    <p class="total text-xl"><?php echo $order_total?> mmk</p>
                </div>

            </div>
            <div class="flex-center font-golden text-sm text-zinc-100">
                <button class="btn-finish w-full h-5/6 rounded-md bg-zinc-800">Finish</button>
            </div>
        </div>
    </section>
    <div class="modal modal-inactive flex-center absolute top-0 w-full h-[110dvh] z-20 bg-zinc-900 bg-opacity-65">
        <div class="modal-inner relative h-2/5 md:h-2/6 lg:h-1/2 w-11/12 lg:w-1/2 p-4 rounded-md bg-zinc-200 font-front text-xl">
            <button class="modal-cancel flex-center absolute right-2 top-2 size-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-5/6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-x"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            </button>
            <div class="w-11/12 h-3/6 mx-auto py-2">
                <h3 class="mb-2 text-2xl">Order Details</h3>
                <div class="w-full h-1/4 flex justify-between">
                    <span>Total Amount</span>
                    <p class="final-amount">34500 MMK</p>
                </div>
                <div class="w-full h-2/4 flex justify-between">
                    <span class="w-2/12">Location</span>
                    <p class="final-location w-8/12 text-end text-base">no.66, TayokeKyaung st., Sanchung, Yangon</p>
                </div>
            </div>
            <div class="flex flex-col items-center justify-center gap-2 w-full h-2/6">
                <input type="text" placeholder="name..." class="final-name w-11/12 h-10 md:h-12 lg:h-12 mx-auto px-4 rounded-md">
                <input type="text" placeholder="telephone..." class="final-telephone w-11/12 h-10 md:h-12 lg:h-12 mx-auto px-4 rounded-md">
            </div>
            <div class=" flex-center justify-end h-1/6 w-full px-4 md:px-8 gap-2">
                <button class="flex-center w-1/6 md:w-12 lg:w-12 h-4/6 md:h-12 lg:h-12 bg-red-600 text-zinc-100 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-1/2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                </button>
                <button class="btn-confirm w-2/6 md:w-24 lg:w-32 h-4/6 md:h-12 lg:h-12 border-2 border-zinc-600 rounded-md text-base">Confirm?</button>
            </div>
        </div>
    </div>
</body>

</html>