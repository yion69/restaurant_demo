<?php
    include_once('../../Controller/__dbconnect.class.php');
    include_once('../../Controller/__config.class.php');
    include_once('../../Controller/__foodItem.php');

    $con = new Connection_Localhost();
    $db = new DataBase();
    // $fb = new FoodItem();
    // $fb->insertFoodItem();
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
            <button class="h-full w-10 flex-center size-full rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-bag"><path d="M6 2 3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4Z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
            </button>
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
                <h2 class="text-2xl">Home</h2>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <h2 class="text-2xl">Menu</h2>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <h2 class="text-2xl">Locations</h2>
            </div>
            <div class="flex-center justify-start w-11/12 h-20 mx-auto my-2 p-4 border-b border-zinc-700 text-zinc-200">
                <h2 class="text-2xl">Contact</h2>
            </div>
            
        </div>
    </nav>
    
    <section class="section-1 w-full h-dvh flex flex-col font-golden">
        <div class="flex items-end h-4/6">
            <div class="relative h-[85%] w-full mt-auto grid grid-cols-1 lg:grid-cols-[25%,50%,25%]">
                <p class="absolute top-16 right-4 block md:hidden lg:hidden w-48 h-16 ">
                    Lorem ipsum dolor sit amet ?
                    <button class="button absolute right-0 bottom-0 w-24 h-8 rounded-sm border text-sm border-zinc-900">Order now</button>
                </p>
                <div class=" absolute right-0 hidden md:flex lg:hidden flex-col justify-center 
                             h-1/2 w-8/12 p-10 ">
                    <h3 class="my-4 text-3xl">L’Appetito Vien Mangiando!</h3>
                    <p class="text-lg">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, optio magnam. Quaerat magni in doloremque at voluptates fugit ut accusamus.</p>
                </div>
                <div class="absolute left-20 bottom-10 hidden md:flex lg:hidden flex-col justify-center
                            h-1/3 w-1/2 px-10 py-4">
                    <h3 class="my-4 text-2xl">Order Now</h3>
                    <p class="text-base">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, molestiae.</p>
                    <button class="button absolute -right-24 -bottom-2 w-36 h-10 rounded-sm border text-sm border-zinc-900">Order now</button>
                </div>
                <img src="../../assets/food-items/banner_pasta.png" class="h-full" alt="">
                <div class="hidden md:hidden lg:flex flex-col p-10 gap-2">
                    <h2 class="mt-8 mb-4 text-4xl">L’Appetito Vien Mangiando!</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio velit quod reiciendis consectetur aliquid blanditiis totam aut fuga ipsum harum?</p>
                    <h2 class="mt-4 text-2xl">Order Now</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam, quis.</p>
                    <button class="button w-32 h-10 ms-auto me-4 my-4 rounded-sm border text-sm border-zinc-900">Order now</button>
                </div>
                <img src="../../assets/food-items/banner_pizza.png" class="h-full ms-auto scale-x-[-1]" alt="">
            </div>
        </div>
        <div class="container h-2/6 mx-auto px-2 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 tracking-widest text-zinc-100">       
            <div class="news-card news-card-1 m-1 bg-red-400">
                <div class="relative flex-center size-full rounded-md bg-opacity-50 bg-zinc-900">
                    <h3 class="text-3xl">Locations</h3>
                    <label class="absolute right-1 bottom-0 flex-center size-10">
                        <svg class="size-6 -scale-y-[1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                    </label>
                </div>
            </div>
            <div class="news-card news-card-2 m-1 bg-green-400">
                <div class="relative flex-center size-full rounded-md bg-opacity-50 bg-zinc-900">
                    <h3 class="text-3xl">Promotions</h3>
                    <label class="absolute right-1 bottom-0 flex-center size-10">
                        <svg class="size-6 -scale-y-[1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link"><path d="M15 3h6v6"/><path d="M10 14 21 3"/><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/></svg>
                    </label>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-dvh py-4 box-border font-golden">

        <div class="container h-2/5 flex flex-col mx-auto my-4 px-2">
            <h2 class="mx-2 text-xl md:text-3xl lg:text-4xl text-center">New Items</h2>   
            <div class="min-w-full h-[90%] p-1 box-border gap-2 
                        grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 overflow-x-auto">

                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (2).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">4500 MMK</p>
                    </div>
                </div>  

                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (3).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">7000 MMK</p>
                    </div>
                </div>  

                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (7).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">6500 MMK</p>
                    </div>
                </div>  

                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (1).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">5000 MMK</p>
                    </div>
                </div>  
                
            </div>
        </div>

        <div class="container h-2/5 flex flex-col mx-auto my-4 px-2">
            <h2 class="mx-2 text-xl md:text-3xl lg:text-4xl text-center">Popular Items</h2>   
            <div class="min-w-full h-[90%] p-1 box-border gap-2 
                        grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 overflow-x-auto">
                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (4).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">5500 MMK</p>
                    </div>
                </div>  
                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (5).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">10500 MMK</p>
                    </div>
                </div>  
                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (6).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">6000 MMK</p>
                    </div>
                </div>  
                <div class="grid grid-cols[10%,90%] md:grid-cols-2 lg:grid-cols-2 items-center justify-center p-1 gap-2 rounded-md">
                    <img class="w-3/5 md:w-4/5 lg:w-full mx-auto" src="../../assets/carousel-items/food (8).png">
                    <div class="flex flex-row md:flex-col justify-around">
                        <p class="lg:px-2 text-xs md:text-xl text-center md:text-start lg:text-start text-nowrap">Lorem, ipsum.</p>
                        <p class="lg:px-2 text-xs md:text-lg text-center md:text-start lg:text-start font-bold font-newsweekly">4000 MMK</p>
                    </div>
                </div>  
            </div>
        </div>
        
        <div class="container h-[15%] w-full mx-auto mt-4 px-2 flex items-center">  
            <div class="w-full h-4/6 lg:h-full gap-2 grid grid-cols-3 items-center justify-center">
                <div class="category relative h-4/5 lg:h-full rounded-md">
                    <img class="absolute size-full object-cover -z-10 rounded-md" src="../../assets/food-items/category-1.jpeg" alt="">
                    <h3 class="flex-center size-full bg-zinc-900 bg-opacity-50 lg:text-2xl text-zinc-100 rounded-md">Entrée</h3>
                </div>
                <div class="category relative h-4/5 lg:h-full rounded-md">
                    <img class="absolute size-full object-cover -z-10 rounded-md" src="../../assets/food-items/category-2.jpeg" alt="">
                    <h3 class="flex-center size-full bg-zinc-900 bg-opacity-50 lg:text-2xl text-zinc-100 rounded-md">Appetizer</h3>
                </div>
                <div class="category relative h-4/5 lg:h-full rounded-md">
                    <img class="absolute size-full object-cover -z-10 rounded-md" src="../../assets/food-items/category-3.jpg" alt="">
                    <h3 class="flex-center size-full bg-zinc-900 bg-opacity-50 lg:text-2xl text-zinc-100 rounded-md">Dessert</h3>
                </div>
            </div>
        </div>

    </section>

    <section class="container h-dvh w-full mx-auto my-4 py-4 font-golden">

        <h3 class="my-2 px-2 text-xl md:text-3xl lg:text-4xl text-center">Cuisines</h3>

        <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-6 md:grid-rows-3 lg:grid-rows-2
                    h-5/6 w-full mx-auto px-2 gap-2">
            
            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/Appetizer/pngegg(10).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/Entree/pngegg(11).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/Appetizer/pngegg(13).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/Pizza/pngegg(3).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/dessert/pngegg(6).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-1 md:grid-rows-[70%,30%] items-center justify-center 
                        w-full h-full p-1 rounded-md bg-transparent">
                <img class="h-full mx-auto object-cover" src="../../assets/food-items/Pizza/pngegg(4).png" alt="">
                <div class="flex flex-col justify-center items-end h-full w-full p-2">
                    <h3 class="text-lg">Mushroom Soup</h3>
                    <p class="text-base text-end font-newsweekly font-semibold">4000 MMK</p>
                </div>
            </div>

        </div>

        <div class="h-1/6 w-full px-2 flex-center justify-center">
            <a class="button flex-center w-40 h-12 md:h-16 rounded-sm border border-zinc-900 text-lg" href="../Items/index.php?page=1">All Items</a>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
</body>

</html>