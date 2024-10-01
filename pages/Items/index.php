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
    <nav class="fixed top-0 w-full h-20 px-2 grid grid-cols-2 md:grid-cols-3 font-golden shadow-lg bg-zinc-100" id="navbar">
        
        <div class="hidden md:flex lg:flex h-full w-full me-2">
            <ul class="flex items-center md:justify-around lg:justify-center size-full p-4 md:gap-1 lg:gap-8 md:text-lg lg:text-lg">
                <li class="nav-item">
                    <a href="../MainPageV2/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a href="../LandingPage/index.php">About</a>
                </li>
                <li class="nav-item">
                    <a href="../Items/index.php">Items</a>
                </li>
            </ul>
        </div>

        <div class="flex-center h-full w-full">
            <img class="w-16 h-16" src="../../assets/brand.png">
            <div class="flex flex-col">
                <h2 class="text-lg ">Buon cibo</h2>
                <span class="text-xs">Good Food</span>
            </div>
        </div>

        <div class="hidden md:flex lg:flex justify-end h-full w-full p-4 gap-1">
            <button class="h-full w-10 flex-center rounded-md"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round"><path d="M18 20a6 6 0 0 0-12 0"/><circle cx="12" cy="10" r="4"/><circle cx="12" cy="12" r="10"/></svg>
            </button>
            <a class="h-full w-10 flex-center size-full rounded-md" href="../Cart/index.php">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </a>
        </div>
        <div class="flex md:hidden lg:hidden size-14 ms-auto me-2 my-auto z-10">
            <button class="menu" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
            <svg class="size-full" viewBox="0 0 100 100">
                <path class="line line-inactive line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                <path class="line line-inactive line2" d="M 20,50 H 80" />
                <path class="line line-inactive line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
            </svg>
            </button>
        </div>

        <div class="nav-menu nav-menu-inactive flex flex-col md:hidden lg:hidden absolute w-full h-100% -z-10 bg-red-400">
            
            <div class="w-full h-20"></div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <a class="text-2xl" href="../MainPageV2/index.php">Home</a>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <a class="text-2xl" href="../Cart/index.php">Cart</a>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <a class="text-2xl" href="../About/index.php">About</a>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <h2 class="text-2xl">Contact</h2>
            </div>
            
        </div>
    </nav>
    <section class="container h-[50dvh] w-full mx-auto p-4">
        
        <div class="flex-center items-end relative h-2/4 w-full py-4">
                <span class="relative w-full md:w-full lg:w-6/12 h-1/4 md:h-1/5 lg:h-1/3">
                <input class="w-full h-full px-4 py-2 rounded-md border-2 border-zinc-400 text-xl" type="text">
                <button class="absolute right-3 md:right-4 lg:right-4 top-1 md:top-2 lg:top-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-8 " viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                </button>
            </span>
        </div>
        <div class="grid grid-cols-3 md:grid-cols-3 lg:grid-cols-6 grid-rows-2 md:grid-rows-2 lg:grid-rows-1
                    h-1/3 w-full mb-6 gap-1 text-base md:text-lg lg:text-lg text-zinc-100 font-golden">
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Appetizer</p>
                <img class="size-full object-cover" src="../../assets/banner-items/side-view-fried-chicken-breast-cheese-sauce-with-homemade-potatoes-fried-tomato-board.jpg" alt="">
            </div>
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Entrée</p>
                <img class="size-full object-cover object-center" src="../../assets/banner-items/top-view-tike-kebab-pita-bread-with-herbs-onions-with-sauce-vegetables.jpg" alt="">
            </div>
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Dessert</p>
                <img class="size-full object-cover" src="../../assets/banner-items/cup-tea-with-slices-carrot-pie.jpg" alt="">
            </div>
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Brews</p>
                <img class="size-full object-cover" src="../../assets/banner-items/fresh-cappuccino-table-min.jpg" alt="">
            </div>
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Drinks</p>
                <img class="size-full object-cover" src="../../assets/banner-items/dessert-topped-with-roasted-marshmallow.jpg" alt="">
            </div>
            <div class="relative rounded-sm overflow-hidden">
                <p class="flex-center absolute size-full bg-zinc-900 bg-opacity-55">Pizza</p>
                <img class="size-full object-cover" src="../../assets/banner-items/delicious-pizza-traditional-italian-pizza.jpg" alt="">
            </div>
        </div>
        <div class="h-12 md:h-16 lg:h-12 w-full md:w-full lg:w-1/4 ms-auto font-newsweekly text-2xl">
            <select name="sort"  class="items-sort w-full h-full px-4 rounded-md
                                      bg-zinc-400 md:bg-zinc-300 lg:bg-transparent border border-zinc-400">
                <option value="relevance">Relevance</option>
                <option value="popularity">Popularity</option>
                <option value="ordercount">Order Count</option>
            </select>
        </div>
        
    </section>

    <section class="container grid grid-rows-6 md:grid-rows-6 lg:grid-rows-3 grid-cols-1 md:grid-cols-1 lg:grid-cols-2
                    h-dvh w-full mx-auto p-4 gap-2 font-newsweekly overflow-y-auto">
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        <div class="data-item flex justify-between size-full p-2 lg:p-4">
            <img src="../../assets/food-items/Appetizer/pngegg(10).png" alt="" class="item-img w-2/6 h-full object-cover">
            <div class="grid grid-rows-3 items-center justify-end w-4/6 h-full px-2">
                <h3 class="item-name text-2xl md:text-3xl lg:text-4xl">Mushroom Soup</h3>
                <p class="item-price ms-auto text-xl md:text-2xl lg:text-3xl">4500 MMK</p>
                <p class="item-id hidden"></p>
                <button class="item-btn w-20 md:w-28 lg:w-32 h-5/6 lg:h-4/6 ms-auto border-2">Add</button>
            </div>
        </div>
        
    </section>

    <section class="container w-full h-[50dvh] mx-auto">
        <div class="flex-center w-full h-14">
            <div aria-label="Pagination" class="pagination-container flex items-center text-gray-600">
            </div>
        </div>
        <div class="flex justify-center w-full">
            <p class="text-xs text-gray-500">Showing 11 to 20 of 95 entires</p>
        </div>

        <footer class=" grid grid-rows-4 md:grid-rows-4 lg:grid-rows-3 grid-cols-1 md:grid-cols-1 lg:grid-cols-2
                        w-full h-full mt-4 px-4 py-2 border-t border-zinc-400 font-newsweekly">

            <div class="lg:col-span-2 flex-center justify-start">
                <img class="w-20 md:w-24 lg:w-28 h-20 md:h-24 lg:h-28" src="../../assets/brand.png">
                <div class="flex flex-col">
                    <h2 class="text-4xl md:text-6xl lg:text-5xl">Buon cibo</h2>
                    <span class="text-xl md:text-2xl lg:text-2xl">Good Food</span>
                </div>
            </div>

            <div class="grid grid-cols-2 px-4">
                <div class="flex flex-col justify-center">
                    <h3 class="mb-1 text-2xl md:text-4xl">Reception</h3>
                    <p class="text-sm md:text-xl">+ 95 9505 9200</p>
                    <p class="text-sm md:text-xl">goodfood@restaurant.com</p>
                </div>
                <div class="flex flex-col justify-center">
                    <h3 class="mb-1 text-2xl md:text-4xl">Manager</h3>
                    <p class="text-sm md:text-xl">+ 95 9519 0175</p>
                    <p class="text-sm md:text-xl">goodfood@rmanager.com</p>
                </div>
            </div>
            
            <div class="my-4 px-4">
                <h3 class="text-2xl md:text-4xl">Navigation</h3>
                <ul class="flex my-1 gap-4 md:gap-8 text-lg md:text-2xl">
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Menu</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="flex-center sm:items-center md:items-center lg:items-start flex-col p-1 px-4">
                <div class="flex-center sm:justify-center md:justify-center lg:justify-start h-1/3 w-full gap-2">
                    <button class="size-8 md:size-10 lg:size-8 border rounded-md"></button>
                    <button class="size-8 md:size-10 lg:size-8 border rounded-md"></button>
                    <button class="size-8 md:size-10 lg:size-8 border rounded-md"></button>
                    <button class="size-8 md:size-10 lg:size-8 border rounded-md"></button>
                </div>
                <h3 class="text-base md:text-xl">Lorem, ipsum.</h3>
                <p class="text-lg md:text-2xl">&copy;2024 - GoodFood Restaurant</p>
            </div>

        </footer>
 
    </section>

</body>

</html>