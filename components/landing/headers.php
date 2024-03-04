<nav class="bg-white top-1 md:top-8  fixed w-full   shadow-md rounded-lg ">
    <div class="max-w-screen-xl  flex flex-wrap items-center justify-between mx-auto p-1 pb-8 pt-4">
        <a href="<?php echo home_url('/') ?>" class="flex mt-2 md:mt-0 items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-600">
                <img class="transition-transform transform-gpu scale-100 hover:scale-105"
                    src="<?php echo home_url('/wp-content/uploads/2023/11/Logo.png') ?>" alt="Image" srcset="">

            </span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse ">
            <button type="button" style="background: var(--Dark-Blue, #111A44); "
                class="but1 text-white hidden md:block hover:bg-blue-900 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-8 py-2 text-center ">
                <div class="flex">
                    <div class="h-6 but-t">+254 742 043 281</div>
                    <div class="h-6 ml-2 mt-0.5">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.21875 15.7803L12.1087 10.8903C12.6862 10.3128 12.6862 9.36777 12.1087 8.79027L7.21875 3.90027"
                                stroke="#FEFEFE" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </button>
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex mt-2 md:mt-0 items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border  rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                <li>
                    <a href="http://localhost/anzaa/index.php/properties/"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-900 md:p-0 md:dark:hover:text-blue-500 dark:text-gray-600 dark:hover:bg-gray-700 dark:hover:text-gray-600 md:dark:hover:bg-transparent dark:border-gray-700 a4">Properties</a>
                </li>

                <li>
                    <a href="http://localhost/anzaa/"
                        class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-900 md:p-0 md:dark:hover:text-blue-500 dark:text-gray-600 dark:hover:bg-gray-700 dark:hover:text-gray-600 md:dark:hover:bg-transparent dark:border-gray-700 a4">Blog</a>
                </li>

            </ul>
        </div>
    </div>
</nav>