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
    <section class="flex container-center size-full overflow-hidden">
        <div class="absolute w-3/4 h-full me-auto">
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
        <div id="main" class="w-full ms-auto md:w-3/6 lg:w-[30%] h-full
                    grid grid-rows-[20%,70%,10%] drop-shadow-2xl
                    bg-zinc-100 ">
            <div class="flex items-end justify-start h-full mt-auto mb-4 pt-4 font-golden">
                <h3 class="w-full md:w-full lg:w-1/2 h-1/2 px-5 md:px-6 lg:px-9 pb-2 text-start text-4xl md:text-3xl lg:text-3xl">Sign In</h3>
            </div>
            <div class="h-full">
                <div class="flex flex-col h-1/6 my-0 md:my-2 lg:my-3 font-golden">
                    <label class="mx-5 md:mx-6 lg:mx-9 text-xl md:text-base lg:text-base text-zinc-950">Username</label>
                    <input type="text" name="username" class="input input-username w-11/12 md:w-10/12 lg:w-10/12 h-3/6 md:h-4/6 lg:h-5/6 mx-auto px-2 mt-1 rounded-lg border-2 bg-zinc-200 border-zinc-400 font-front text-xl">
                </div>
                <div class="flex flex-col h-1/6 my-0 md:my-2 lg:my-3 font-golden">
                    <label class="mx-5 md:mx-6 lg:mx-9 text-xl md:text-base lg:text-base text-zinc-950">Password</label>
                    <input type="text" name="password" class="input input-password w-11/12 md:w-10/12 lg:w-10/12 h-3/6 md:h-4/6 lg:h-5/6 mx-auto px-2 mt-1 rounded-lg border-2 bg-zinc-200 border-zinc-400 font-front text-xl">
                </div>
                <p class="w-52 md:w-44 lg:w-44 h-8 ms-auto me-3 md:me-1 lg:me-4 text-base md:text-sm lg:text-xs text-zinc-600">
                    Forgot Password <a href="#" class="underline text-zinc-600 font-semibold">Click here</a>
                </p>
                <div class="flex flex-col items-center justify-center h-1/5 w-full mt-4">
                    <button class="btn-login h-3/6 md:h-4/5 lg:h-14 w-11/12 md-w-10/12 lg:w-10/12 text-md font-bold bg-zinc-900 text-zinc-100 rounded-lg">Login</button>
                    <p class="text-sm mt-2">
                        Don't have an account? <a href="../Register/index.php" class="font-bold">Sign Up</a>
                    </p>
                </div>
                <div class="w-10/12 mx-auto flex justify-center items-center">
                    <div class="w-5/12 h-[2px] mx-auto bg-zinc-400 rounded-lg"></div>
                    <span class="pb-2 text-xl font-bold">or</span>
                    <div class="w-5/12 h-[2px] mx-auto bg-zinc-400 rounded-lg"></div>
                </div>
                <div class="flex flex-col items-center justify-center h-1/6 w-full">
                    <input type="text" name="code" hidden>
                    <button type="submit" 
                            onclick="reroute()"
                            class=" flex items-center justify-center 
                                    h-3/6 md:h-4/5 lg:h-14 w-11/12 md-w-10/12 lg:w-10/12 mb-auto lg:mb-0 mt-4 lg:mt-0 px-4 
                                    text-xl font-semibold border-2 bg-zinc-100 border-zinc-400 rounded-lg
                                    hover:bg-zinc-200 transition-colors duration-200"
                    >
                        <svg class="w-10 h-full" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="39" height="39" rx="3.5" />
                            <g clip-path="url(#clip0_710_6223)">
                                <path d="M29.6 20.2273C29.6 19.5182 29.5364 18.8364 29.4182 18.1818H20V22.05H25.3818C25.15 23.3 24.4455 24.3591 23.3864 25.0682V27.5773H26.6182C28.5091 25.8364 29.6 23.2727 29.6 20.2273Z" fill="#4285F4" />
                                <path d="M20 30C22.7 30 24.9636 29.1045 26.6181 27.5773L23.3863 25.0682C22.4909 25.6682 21.3454 26.0227 20 26.0227C17.3954 26.0227 15.1909 24.2636 14.4045 21.9H11.0636V24.4909C12.7091 27.7591 16.0909 30 20 30Z" fill="#34A853" />
                                <path d="M14.4045 21.9C14.2045 21.3 14.0909 20.6591 14.0909 20C14.0909 19.3409 14.2045 18.7 14.4045 18.1V15.5091H11.0636C10.3864 16.8591 10 18.3864 10 20C10 21.6136 10.3864 23.1409 11.0636 24.4909L14.4045 21.9Z" fill="#FBBC04" />
                                <path d="M20 13.9773C21.4681 13.9773 22.7863 14.4818 23.8227 15.4727L26.6909 12.6045C24.9591 10.9909 22.6954 10 20 10C16.0909 10 12.7091 12.2409 11.0636 15.5091L14.4045 18.1C15.1909 15.7364 17.3954 13.9773 20 13.9773Z" fill="#E94235" />
                            </g>
                            <rect x="0.5" y="0.5" width="39" height="39" rx="3.5" />
                            <defs>
                                <clipPath id="clip0_710_6223">
                                    <rect width="20" height="20" fill="white" transform="translate(10 10)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="mx-4 text-base">Sign in with Google</p>
                    </button>
                </div>
            </div>
            <div class="flex flex-col items-end mb-2">
                <ul class="w-3/5 h-5/6 mt-auto mx-auto flex justify-center items-center gap-5 text-center text-sm text-zinc-500">
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-9 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                            </svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-9 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                            </svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-9 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z"/></svg>
                        </a>
                    </li>
                    <li class="h-1/2">
                        <a href="#">
                            <svg class="btn-hover size-9 md:size-7 lg:size-6 fill-zinc-900" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm337.5 12.5l44.6 116.4 .4 1.2c5.6 16.8 7.2 35.2 2.3 52.5c-5 17.2-15.4 32.4-29.8 43.3l-.2 .1-68.4 51.2-54.1 40.9c-.5 .2-1.1 .5-1.7 .8c-2 1-4.4 2-6.7 2c-3 0-6.8-1.8-8.3-2.8l-54.2-40.9L93.5 322.3l-.4-.3-.2-.1c-14.3-10.8-24.8-26-29.7-43.3s-4.2-35.7 2.2-52.5l.5-1.2 44.7-116.4c.9-2.3 2.5-4.3 4.5-5.6c1.6-1 3.4-1.6 5.2-1.8c1.3-.7 2.1-.4 3.4 .1c.6 .2 1.2 .5 2 .7c1 .4 1.6 .9 2.4 1.5c.6 .4 1.2 1 2.1 1.5c1.2 1.4 2.2 3 2.7 4.8l29.2 92.2H285l30.2-92.2c.5-1.8 1.4-3.4 2.6-4.8s2.8-2.4 4.5-3.1c1.7-.6 3.6-.9 5.4-.7s3.6 .8 5.2 1.8c2 1.3 3.7 3.3 4.6 5.6z"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>
