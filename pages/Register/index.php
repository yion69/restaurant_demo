<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./app.js" defer></script>
    <title>Tailwind PHP</title>
</head>

<body class="bg-zinc-200">
    <section class="flex container-center size-full">
        <div class="hidden md:block lg:block w-3/4 h-full me-auto">
            <div class="background">
            <span></span>
            <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            <span></span>
            </div>
        </div>
        <div id="main" class="w-full ms-auto mt-auto md:w-3/6 lg:w-[30%] h-full
                    grid grid-rows-[20%,70%,10%] drop-shadow-2xl
                    bg-zinc-100 ">
            <a class="fixed top-2 flex-center h-10 w-40 font-front" href="../Login/index.php">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="size-6">
                    <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                </svg>
                <span class="text-xl">
                    Back to Login
                </span>
            </a>
            <div class="flex items-end justify-end h-full mt-auto mb-4 pt-4 font-golden">
                <h3 class="flex items-end w-full h-1/2 px-10 pb-2 text-start text-4xl md:text-3xl lg:text-3xl">
                    Create Account
                </h3>
            </div>
            <form class="flex flex-col justify-center md:justify-start h-full px-4 py-0 md:py-8 gap-2" action="../../Controller/__register.phpl" method="post">
                <div class="flex flex-wrap max-h-20 justify-center px-4 font-front">
                    <p class="w-full ms-4 text-sm font-golden">Full Name</p>
                    <input  type="text" name="user_name" placeholder="First Name..."
                            class="input w-[45%] h-10 ms-auto me-1 my-2 px-4 rounded-md text-xl bg-zinc-300">
                    <input  type="text" name="user_name" placeholder="Last Name..."
                            class="input w-[45%] h-10 ms-1 me-auto my-2 px-4 rounded-md text-xl bg-zinc-300">
                </div>
                <div class="flex flex-wrap max-h-20 justify-center px-4 font-front">
                    <p class="w-full ms-4 text-sm font-golden">Telephone</p>
                    <input  type="text" name="user_name" placeholder="09-XXXX-XXXX"
                            class="input w-11/12 h-10 mx-1 my-2 px-4 rounded-md text-xl bg-zinc-300">
                </div>
                <div class="flex flex-wrap max-h-20 justify-center px-4 font-front">
                    <p class="w-full ms-4 text-sm font-golden">Email</p>
                    <input  type="text" name="user_name" placeholder="@gmail.com"
                            class="input w-11/12 h-10 mx-1 my-2 px-4 rounded-md text-xl bg-zinc-300">
                </div>
                <div class="flex flex-wrap max-h-20 justify-center px-4 font-front">
                    <p class="w-full ms-4 text-sm font-golden">Credentials</p>
                    <input  type="text" name="user_name" placeholder="Username"
                            class="input w-[45%] h-10 ms-auto me-1 my-2 px-4 rounded-md text-xl bg-zinc-300">
                    <input  type="text" name="user_name" placeholder="Password"
                            class="input w-[45%] h-10 ms-1 me-auto my-2 px-4 rounded-md text-xl bg-zinc-300">
                    </div>
                <div class="flex items-center justify-center w-full h-12 my-4 px-4 font-front">
                    <button class="w-11/12 h-full rounded-lg text-xl bg-zinc-800 text-zinc-100">
                        Register
                    </button>
                </div>
            </form>
            <div class="flex flex-col items-end mb-2"> 
                <ul class="w-3/5 h-5/6 mt-auto mx-auto flex justify-center items-center gap-5 text-center text-sm text-zinc-500">
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-10 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-10 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                            </svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-10 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-10 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm337.5 12.5l44.6 116.4 .4 1.2c5.6 16.8 7.2 35.2 2.3 52.5c-5 17.2-15.4 32.4-29.8 43.3l-.2 .1-68.4 51.2-54.1 40.9c-.5 .2-1.1 .5-1.7 .8c-2 1-4.4 2-6.7 2c-3 0-6.8-1.8-8.3-2.8l-54.2-40.9L93.5 322.3l-.4-.3-.2-.1c-14.3-10.8-24.8-26-29.7-43.3s-4.2-35.7 2.2-52.5l.5-1.2 44.7-116.4c.9-2.3 2.5-4.3 4.5-5.6c1.6-1 3.4-1.6 5.2-1.8c1.3-.7 2.1-.4 3.4 .1c.6 .2 1.2 .5 2 .7c1 .4 1.6 .9 2.4 1.5c.6 .4 1.2 1 2.1 1.5c1.2 1.4 2.2 3 2.7 4.8l29.2 92.2H285l30.2-92.2c.5-1.8 1.4-3.4 2.6-4.8s2.8-2.4 4.5-3.1c1.7-.6 3.6-.9 5.4-.7s3.6 .8 5.2 1.8c2 1.3 3.7 3.3 4.6 5.6z"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>
