<template>
    <nav
        class="absolute top-0 left-0 z-40 w-full bg-white border-b transition-all ease-in-out duration-500 custom_content">
        <div class="px-3 py-2 lg:px-6 lg:pl-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button @click="toggleSidebar" aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <HamburgerIcon />
                    </button>
                    <div class="flex items-start justify-start">
                        <div class="flex items-center my-auto">
                            <LogoIcon />
                        </div>
                        <!-- Dropdown Year -->
                        <button id="dropdownYearButton" @click="toggleYearDropdown"
                            class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-full border-[1px] border-[#1C75BC] text-xs px-2 w-24 mx-1 py-1 text-center inline-flex items-center justify-between"
                            type="button">
                            {{ selectedYear }}
                            <ChevronIcon />
                        </button>
                        <div id="dropdownYear" v-if="isYearDropdownOpen"
                            class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute mt-2">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownYearButton">
                                <li v-for="year in years" :key="year">
                                    <a href="#" @click.prevent="selectYear(year)"
                                        class="block px-4 py-2 hover:bg-gray-100">{{ year }}</a>
                                </li>
                            </ul>
                        </div>
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-small rounded-lg text-xs px-2 py-1.5 mx-2">
                            Change Entity (Kantor Pusat)
                        </button>
                    </div>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3 space-x-16">
                        <div class="flex justify-center space-x-1">
                            <div class="flex justify-center space-x-0">
                                <button @click="toggleLanguageDropdown" type="button"
                                    class="inline-flex items-center font-medium justify-center p-2 text-sm text-gray-900 rounded-lg cursor-pointer hover:bg-gray-100">
                                    <FlagIcon :flag="selectedFlag" />
                                    <ChevronIcon />
                                </button>
                                <!-- Dropdown Language -->
                                <div id="language-dropdown-menu" v-if="isLanguageDropdownOpen"
                                    class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow absolute mt-2">
                                    <ul class="py-2 font-medium" role="none">
                                        <li v-for="flag in flags" :key="flag.code">
                                            <a href="#" @click.prevent="selectFlag(flag.code)"
                                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                                role="menuitem">
                                                <div class="inline-flex items-center">
                                                    <FlagIcon :flag="flag.code" />
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Dropdown Notifications -->
                            <button @click="toggleNotificationDropdown" id="dropdownNotificationButton"
                                class="relative p-1 hover:text-white rounded-full focus:outline-none focus:bg-blue-100">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <div
                                    class="absolute inline-flex items-center justify-center w-3 h-3 text-xs bg-red-500 rounded-full top-1 end-1">
                                </div>
                                <BellIcon />
                            </button>
                            <div id="dropdownNotification" v-if="isNotificationDropdownOpen"
                                class="z-50 w-full max-w-xs bg-white divide-y divide-gray-100 rounded-lg shadow absolute mt-2"
                                aria-labelledby="dropdownNotificationButton">
                                <div class="divide-y divide-gray-100">
                                    <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                                        <div class="w-full ps-3">
                                            <div class="font-semibold text-gray-900 text-sm mb-1.5">Laporan
                                                Sustainability
                                                untuk periode Q4 2024 telah berhasil diperbarui
                                            </div>
                                            <div class="text-xs text-blue-600">a few moments ago</div>
                                        </div>
                                    </a>
                                </div>
                                <a href="#"
                                    class="block py-2 text-xs font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
                                    <div class="inline-flex items-center">
                                        <EyeIcon />
                                        View all
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <p class="my-auto mr-6">Hi, <span class="text-[#1C75BC] font-bold">Admin</span></p>
                            <button @click="toggleUserDropdown" type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                                aria-expanded="false">
                                <span class="sr-only">Open user menu</span>
                                <UserIcon />
                            </button>
                        </div>
                        <div id="dropdown-user" v-if="isUserDropdownOpen"
                            class="z-50 my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow absolute mt-2">
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#" @click.prevent="logout"
                                        class="block px-8 py-2 text-sm text-gray-700 hover:bg-gray-100"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { ref } from 'vue';
import HamburgerIcon from '../Components/Icons/HamburgerIcon.vue';
import LogoIcon from '../Components/Icons/LogoIcon.vue';
import ChevronIcon from '../Components/Icons/ChevronIcon.vue';
import FlagIcon from '../Components/Icons/FlagIcon.vue';
import BellIcon from '../Components/Icons/BellIcon.vue';
import EyeIcon from '../Components/Icons/EyeIcon.vue';
import UserIcon from '../Components/Icons/UserIcon.vue';

const isYearDropdownOpen = ref(false);
const isLanguageDropdownOpen = ref(false);
const isNotificationDropdownOpen = ref(false);
const isUserDropdownOpen = ref(false);

const selectedYear = ref(2025);
const years = Array.from({ length: 4 }, (_, i) => 2025 - i);

const selectedFlag = ref('id');
const flags = [
    { code: 'id', name: 'Indonesia' },
    { code: 'us', name: 'USA' }
];

const toggleYearDropdown = () => {
    isYearDropdownOpen.value = !isYearDropdownOpen.value;
};

const selectYear = (year) => {
    selectedYear.value = year;
    isYearDropdownOpen.value = false;
};

const toggleLanguageDropdown = () => {
    isLanguageDropdownOpen.value = !isLanguageDropdownOpen.value;
};

const selectFlag = (flag) => {
    selectedFlag.value = flag;
    isLanguageDropdownOpen.value = false;
};

const toggleNotificationDropdown = () => {
    isNotificationDropdownOpen.value = !isNotificationDropdownOpen.value;
};

const toggleUserDropdown = () => {
    isUserDropdownOpen.value = !isUserDropdownOpen.value;
};
</script>
