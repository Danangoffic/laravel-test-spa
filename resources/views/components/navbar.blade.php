<nav class="absolute top-0 left-0 z-40 w-full bg-white border-b transition-all ease-in-out duration-500 custom_content">
    <div class="px-3 py-2 lg:px-6 lg:pl-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <div class="flex items-start justify-start">
                    <div class="flex items-center my-auto">
                        <svg class="w-6 h-6 text-[#1C75BC] mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- DROPDOWN YEAR -->
                    <button id="dropdownYearButton" data-dropdown-toggle="dropdownYear"
                        class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-full border-[1px] border-[#1C75BC] text-xs px-2 w-24 mx-1 py-1 text-center inline-flex items-center justify-between"
                        type="button">2025 <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownYear" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownYearButton">
                            @for ($i = 2025; $i >= 2022; $i--)
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-small rounded-lg text-xs px-2 py-1.5 mx-2">Change
                        Entity (Kantor Pusat)</button>
                </div>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3 space-x-16">
                    <div class="flex justify-center space-x-1">
                        <div class="flex justify-center space-x-1 md:space-x-0">
                            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                                class="inline-flex items-center font-medium justify-center p-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
                                <img src="https://flagicons.lipis.dev/flags/4x3/id.svg" class="w-8 h-4 mr-1"
                                    alt="indonesian-flag">
                                <svg class="w-2 h-2 text-[#1c75bc]" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>
                            <!-- DROPDOWN LANGUAGE MENU -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow"
                                id="language-dropdown-menu">
                                <ul class="py-2 font-medium" role="none">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <img src="https://flagicons.lipis.dev/flags/4x3/id.svg" class="w-8 h-4"
                                                    alt="indonesian-flag">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                            role="menuitem">
                                            <div class="inline-flex items-center">
                                                <img src="https://flagicons.lipis.dev/flags/4x3/us.svg" class="w-8 h-4"
                                                    alt="usa-flag">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button type="button" id="dropdownNotificationButton"
                            data-dropdown-toggle="dropdownNotification"
                            class="relative p-1 hover:text-white rounded-full focus:outline-none focus:bg-blue-100">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <div
                                class="absolute inline-flex items-center justify-center w-3 h-3 text-xs bg-red-500 rounded-full top-1 end-1">
                            </div>
                            <svg class="w-6 h-6 text-[#1C75BC]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
                            </svg>
                        </button>
                        <!-- Dropdown Notifications -->
                        <div id="dropdownNotification"
                            class="z-50 hidden w-full max-w-xs bg-white divide-y divide-gray-100 rounded-lg shadow"
                            aria-labelledby="dropdownNotificationButton">
                            <div class="divide-y divide-gray-100">
                                <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                    <div class="w-full ps-3">
                                        <div class="font-semibold text-gray-900 text-sm mb-1.5">Laporan Sustainability
                                            <span class="font-medium text-gray-500"> untuk periode Q4 2024 telah
                                                berhasil diperbarui</span>
                                        </div>
                                        <div class="text-xs text-blue-600">a few moments ago</div>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block py-2 text-xs font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex justify-center">
                        <p class="my-auto mr-6">Hi, <span class="text-[#1C75BC] font-bold">Admin</span></p>
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                        id="dropdown-user">
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#" class="block px-8 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
