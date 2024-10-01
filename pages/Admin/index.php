<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Food Items</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="stylesheet" href="./index.css">
    <script src="./app.js" defer></script>
</head> 

<body class="h-dvh w-full flex">
    <section class="w-1/4 h-full bg-red-500">
        <div class="min-h-screen w-full flex flex-col flex-auto flex-shrink-0 antialiased bg-gray-50 text-gray-800">
            <div class="fixed w-1/4 flex flex-col top-0 left-0  bg-white h-full border-r">
                <div class="flex items-center justify-center h-14 border-b">
                    <div>Admin Dashboard</div>
                </div>
                <div class="overflow-y-auto overflow-x-hidden flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-500">Menu</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Food Items</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Food Table</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Insert User</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">User Table</span>
                            </a>
                        </li>
                        
                        <li class="px-5">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-gray-500">Settings</div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-gray-50 text-gray-600 hover:text-gray-800 border-l-4 border-transparent hover:border-indigo-500 pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="w-3/4 h-full p-6 mx-auto bg-indigo-600 shadow-md dark:bg-gray-800">
        <h1 class="text-xl font-bold text-white capitalize dark:text-white">Account settings</h1>
        <form>
            <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                <div>
                    <label class="text-white dark:text-gray-200">food_id</label>
                    <input name="food_id" type="text" class="food_id block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-white dark:text-gray-200">food_name</label>
                    <input name="food_name" type="text" class="food_name block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-white dark:text-gray-200">food_price</label>
                    <input name="food_price" type="text" class="food_price block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>

                <div>
                    <label class="text-white dark:text-gray-200">food_category</label>
                    <select class="food_category block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="entree">entree</option>
                        <option value="appetizer">appetizer</option>
                        <option value="dessert">dessert</option>
                        <option value="brews">brews</option>
                        <option value="drinks">drinks</option>
                        <option value="pizza">pizza</option>
                    </select>
                </div>
                <div>
                    <label class="text-white dark:text-gray-200" for="emailAddress">food_rating</label>
                    <input type="text" class="food_rating block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class=" text-white dark:text-gray-200" for="emailAddress">food_preparationTime</label>
                    <input type="text" class="food_preparationTime block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="text-white dark:text-gray-200">food_description</label>
                    <textarea type="textarea" class="food_description block w-full max-h-20 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>

                </div>
                <div>
                    <label class="text-white dark:text-gray-200" for="emailAddress">food_orderCount</label>
                    <input type="text" class="food_orderCount block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                </div>
                <div>
                    <label class="block text-sm font-medium text-white">
                        Image
                    </label>
                    <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-white" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                    <!-- <span class="">Upload a file</span> -->
                                    <input name="file-upload" type="file" class="food_image w-full h-full">
                                </label>
                                <p class="pl-1 text-white">or drag and drop</p>
                            </div>
                            <p class="text-xs text-white">
                                PNG, JPG, GIF up to 10MB
                            </p>
                        </div>
                    </div>

                </div>

            </div>

            <div class="flex justify-end mt-0 gap-4">
                <button class="btn-submit px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600" type="button">Insert</button>
                <button class="btn-update px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600" type="button">Update</button>
                <button class="btn-delete px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600" type="button">Delete</button>
            </div>
        </form>
    </section>
    <section class="modal modal-hidden flex-center absolute w-full h-dvh bg-zinc-900 bg-opacity-50 font-front">
        <div class="modal-delete modal-delete-hidden absolute flex flex-col items-center justify-center h-2/6 w-1/4 p-2 bg-zinc-100 text-lg rounded-md">
            <div class="flex-center h-1/3 w-full">
                <h3 class="text-4xl">
                    Delete Food Item
                </h3>
            </div>
            <div class="flex flex-col justify-center w-11/12 h-1/3 mx-auto">
                <label class="w-full px-4">Food ID</label>
                <div class="relative flex h-10 w-11/12 mx-auto">
                    <input type="text" class="modal-delete-input w-full h-full px-4 rounded-md border-2">
                    <button class="modal-delete-check absolute right-0 w-4/12 h-full border-2 rounded-r-md bg-zinc-800 text-zinc-100">Check</button>
                </div>
            </div>
            <div class="flex justify-center items-center w-10/12 h-1/3 mx-auto gap-2">
                <button class="modal-delete-cancel w-1/2 h-10 bg-zinc-400 rounded-md">Cancel</button>
                <button class="modal-delete-confirm w-1/2 h-10 bg-red-600 text-zinc-100 rounded-md">Confirm</button>
            </div>
        </div>
        <div class="modal-update modal-update-hidden absolute grid grid-rows-5 grid-cols-4 h-3/5 w-1/2 p-4 gap-1 rounded-md bg-zinc-100">
            <div class="col-span-4 flex-center text-4xl">
                <h3>Update Food Item</h3>
            </div>
            <div class="col-span-4 flex-center border-2 border-zinc-900 size-full px-2 gap-2 text-xl">
                <div class="flex-center flex-col">
                    <label>Food ID</label>
                    <input type="text" class="modal-update-id w-full h-full px-4 bg-zinc-300 rounded-sm">
                </div>
                <div class="flex-center flex-col">
                    <label>Food Name</label>
                    <input type="text" class="modal-update-name w-full h-full px-4 bg-zinc-300 rounded-sm">
                </div>
                <div class="flex-center flex-col">
                    <label>Food Price</label>
                    <input type="text" class="modal-update-price w-full h-full px-4 bg-zinc-300 rounded-sm">
                </div>
                <div class="flex-center flex-col">
                    <label>Food Category</label>
                    <input type="text" class="modal-update-category w-full h-full px-4 bg-zinc-300 rounded-sm">
                </div>
            </div>
            <div class="row-span-2 border-2 border-zinc-900 size-full">
                <img class="modal-update-image size-full object-cover">
            </div>
            <div class="row-span-2 col-span-2 flex-center flex-col border-2 border-zinc-900 size-full text-xl">
                <label>Food Description</label>
                <textarea class="modal-update-description w-full h-3/4 max-h-3/4 px-4"></textarea>
            </div>
            <div class="flex-center flex-col p-1 border-2 border-zinc-900">
                <label>Food Rating</label>
                <input type="text" class="modal-update-rating w-11/12 h-4/6 px-4 bg-zinc-300 rounded-sm">
            </div>
            <div class="flex-center flex-col p-1 border-2 border-zinc-900">
                <label>Food Preparation Time</label>
                <input type="text" class="modal-update-time w-11/12 h-4/6 px-4 bg-zinc-300 rounded-sm">
            </div>
            <div class="col-span-3 flex-center gap-4 border-2 border-zinc-900 text-zinc-100">
                <button class="modal-update-cancel w-1/4 h-1/2 rounded-md bg-zinc-900">Cancel</button>
                <button class="modal-update-check w-1/4 h-1/2 rounded-md bg-zinc-900">Check</button>
                <button class="modal-update-confirm w-1/4 h-1/2 rounded-md bg-red-600 ">Confirm</button>
            </div>
            <div class="flex-center flex-col p-1 border-2 border-zinc-900">
                <label>Food Order Count</label>
                <input type="text" class="modal-update-count w-11/12 h-4/6 px-4 bg-zinc-300 rounded-sm">
            </div>
        </div>
    </section>
</body>

</html>