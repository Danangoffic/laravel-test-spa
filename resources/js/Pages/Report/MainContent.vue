<template>
    <div class="w-full lg:w-3/4">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="flex items-center justify-center">
                <span class="text-sm text-[#1C75BC] mr-4 font-semibold">Standard</span>
                <!-- Dropdown Year -->
                <button @click="toggleStandardDropdown" id="dropdownStandardButton"
                    class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                    type="button">
                    {{ selectedStandard }}
                    <ChevronIcon />
                </button>
                <div id="dropdownStandard" v-if="isStandardDropdownOpen"
                    class="z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute mt-2">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownStandardButton">
                        <li v-for="standard in standards" :key="standard">
                            <a href="#" @click.prevent="selectStandard(standard)"
                                class="block px-4 py-2 hover:bg-gray-100">{{ standard }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex items-center justify-center">
                <span class="text-sm text-[#1C75BC] mr-4 font-semibold">View Report as</span>
                <!-- Dropdown Office -->
                <button @click="toggleOfficeDropdown" id="dropdownOfficeButton"
                    class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                    type="button">
                    {{ selectedOffice }}
                    <ChevronIcon />
                </button>
                <div id="dropdownOffice" v-if="isOfficeDropdownOpen"
                    class="z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute mt-2">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownOfficeButton">
                        <li>
                            <a href="#" @click.prevent="selectOffice('Kantor Pusat')"
                                class="block px-4 py-2 hover:bg-gray-100">Kantor Pusat</a>
                        </li>
                        <li>
                            <a href="#" @click.prevent="selectOffice('Kantor Cabang')"
                                class="block px-4 py-2 hover:bg-gray-100">Kantor Cabang</a>
                        </li>
                    </ul>
                </div>
                <!-- Dropdown Office 2 -->
                <button @click="toggleOffice2Dropdown" id="dropdownOffice2Button"
                    class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                    type="button">
                    {{ selectedOffice2 }}
                    <ChevronIcon />
                </button>
                <div id="dropdownOffice2" v-if="isOffice2DropdownOpen"
                    class="z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute mt-2">
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownOffice2Button">
                        <li>
                            <a href="#" @click.prevent="selectOffice2('Kantor Pusat')"
                                class="block px-4 py-2 hover:bg-gray-100">Kantor Pusat</a>
                        </li>
                        <li>
                            <a href="#" @click.prevent="selectOffice2('Kantor Cabang')"
                                class="block px-4 py-2 hover:bg-gray-100">Kantor Cabang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full my-4">
            <div class="p-6 bg-[#229954] grid grid-cols-4 rounded-lg">
                <div class="col-span-1 text-center my-auto">
                    <div class="text-white text-base font-semibold">
                        <h4>GRI - 300</h4>
                        <h4>ENVIRONMENT</h4>
                    </div>
                </div>
                <div class="col-span-2 text-center my-auto">
                    <div class="text-white text-base font-semibold">
                        <h4>GRI-302 Energi</h4>
                        <p class="text-sm">GRI - 302 - 1 Penggunaan Energi Dalam Organisasi</p>
                        <small class="font-normal">GRI</small>
                    </div>
                </div>
                <div class="col-span-1 relative">
                    <div class="absolute bottom-0 right-0">
                        <div class="inline-flex space-x-2">
                            <button type="button"
                                class="group px-2 py-1 text-xs font-medium text-center text-[#1c75bc] bg-[#EBF4FA] rounded-md hover:bg-[#1c75bc] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 flex items-center justify-center">
                                <ExportIcon />
                                Export
                            </button>
                            <button type="button"
                                class="group px-2 py-1 text-xs font-medium text-center text-[#1c75bc] bg-[#EBF4FA] rounded-md hover:bg-[#1c75bc] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 flex items-center justify-center">
                                <ViewIcon />
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full grid grid-cols-3 gap-x-4 mb-4">
            <div class="col-span-1">
                <div class="bg-white px-6 py-4 rounded-sm border-t-4 border-[#1C75BC] shadow-md">
                    <div class="flex items-center justify-center mb-3">
                        <span class="text-sm text-[#1C75BC] mr-4 font-semibold">Year</span>
                        <!-- Dropdown Env Year -->
                        <button @click="toggleEnvironmentYearDropdown" id="dropdownEnvironmentYearButton"
                            class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                            type="button">
                            {{ selectedEnvironmentYear }}
                            <ChevronIcon />
                        </button>
                        <div id="dropdownEnvironmentYear" v-if="isEnvironmentYearDropdownOpen"
                            class="z-50 bg-white divide-y divide-gray-100 rounded-lg shadow w-44 absolute mt-2">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownEnvironmentYearButton">
                                <li v-for="year in environmentYears" :key="year">
                                    <a href="#" @click.prevent="selectEnvironmentYear(year)"
                                        class="block px-4 py-2 hover:bg-gray-100">{{ year }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <input id="default-checkbox" type="checkbox" v-model="showAnnual"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium primary-text">Show annual</label>
                    </div>
                </div>
            </div>
            <div class="col-span-2">
                <div class="bg-white pb-3 pt-4 px-6 rounded-sm border-t-4 border-[#1C75BC] shadow-md">
                    <div class="mb-3">
                        <h5 class="text-sm text-[#1C75BC] mr-4 mb-1 font-semibold">Period</h5>
                        <div class="flex items-center justify-end space-x-1">
                            <button
                                class="flex items-center justify-center w-7 h-7 bg-[#EBF4FA] primary-text font-semibold rounded-full -start-4 border-[1px] border-gray-500 hover:text-white hover:bg-[#1C75BC] focus:ring-2 focus:outline-none focus:ring-blue-300 text-sm">
                                All
                            </button>
                            <button v-for="month in months" :key="month"
                                class="flex items-center justify-center w-7 h-7 bg-[#EBF4FA] primary-text font-semibold rounded-full -start-4 border-[1px] border-gray-500 hover:text-white hover:bg-[#1C75BC] focus:ring-2 focus:outline-none focus:ring-blue-300 text-sm">
                                {{ month }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full bg-white p-10 rounded-sm shadow-md -z-0">
            <div class="w-full items-center mb-3">
                <h5 class="text-lg text-[#1C75BC] mr-4 mb-4 font-semibold">Penggunaan Energi Dalam Organisasi</h5>
                <div class="overflow-x-auto relative shadow-md border-gray-200 border-[1px]">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr class="text-center bg-[#EBF4FA] primary-text">
                                <th scope="col" class="px-6 py-3 font-bold" rowspan="3">Deskripsi</th>
                                <th scope="col" class="px-6 py-3 border-r-[1px] border-[#1C75BC] font-bold" rowspan="3">
                                    UOM
                                </th>
                                <th scope="col" class="px-6 py-1 font-bold" colspan="3">Jumlah</th>
                            </tr>
                            <tr class="text-center text-white bg-[#1c75bc]">
                                <th scope="col" class="px-6 py-1">2021</th>
                                <th scope="col" class="px-6 py-1">2020</th>
                                <th scope="col" class="px-6 py-1">2019</th>
                            </tr>
                            <tr class="text-center text-white bg-blue-800">
                                <th scope="col" class="px-6 py-1">Total</th>
                                <th scope="col" class="px-6 py-1">Total</th>
                                <th scope="col" class="px-6 py-1">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b text-center">
                                <td class="px-6 py-4" rowspan="2">Air</td>
                                <td class="px-6 py-4" rowspan="2">Joule</td>
                                <td class="px-6 py-4 primary-text">1,140</td>
                                <td class="px-6 py-4 primary-text">2,380</td>
                                <td class="px-6 py-4 primary-text">2,430</td>
                            </tr>
                            <tr class="bg-white border-b">
                            </tr>
                            <tr class="bg-white border-b text-center">
                                <td class="px-6 py-4" rowspan="2">Listrik</td>
                                <td class="px-6 py-4" rowspan="2">Joule</td>
                                <td class="px-6 py-4 primary-text">18,970</td>
                                <td class="px-6 py-4 primary-text">25,040</td>
                                <td class="px-6 py-4 primary-text">26,730</td>
                            </tr>
                            <tr class="bg-white border-b">
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import ExportIcon from '@/Components/Icons/ExportIcon.vue';
import ViewIcon from '@/Components/Icons/ViewIcon.vue';
import ChevronIcon from '@/Components/Icons/ChevronIcon.vue';

// Dropdown States
const isStandardDropdownOpen = ref(false);
const isOfficeDropdownOpen = ref(false);
const isOffice2DropdownOpen = ref(false);
const isEnvironmentYearDropdownOpen = ref(false);

// Selected Values
const selectedStandard = ref('Standard 1');
const selectedOffice = ref('Kantor Pusat');
const selectedOffice2 = ref('Kantor Pusat');
const selectedEnvironmentYear = ref(2025);
const showAnnual = ref(false);

// Dropdown Options
const standards = ['Standard 1', 'Standard 2', 'Standard 3'];
const environmentYears = Array.from({ length: 6 }, (_, i) => 2025 - i);
const months = Array.from({ length: 12 }, (_, i) => i + 1);

// Toggle Dropdowns
const toggleStandardDropdown = () => {
    isStandardDropdownOpen.value = !isStandardDropdownOpen.value;
};

const toggleOfficeDropdown = () => {
    isOfficeDropdownOpen.value = !isOfficeDropdownOpen.value;
};

const toggleOffice2Dropdown = () => {
    isOffice2DropdownOpen.value = !isOffice2DropdownOpen.value;
};

const toggleEnvironmentYearDropdown = () => {
    isEnvironmentYearDropdownOpen.value = !isEnvironmentYearDropdownOpen.value;
};

// Select Options
const selectStandard = (standard) => {
    selectedStandard.value = standard;
    isStandardDropdownOpen.value = false;
};

const selectOffice = (office) => {
    selectedOffice.value = office;
    isOfficeDropdownOpen.value = false;
};

const selectOffice2 = (office) => {
    selectedOffice2.value = office;
    isOffice2DropdownOpen.value = false;
};

const selectEnvironmentYear = (year) => {
    selectedEnvironmentYear.value = year;
    isEnvironmentYearDropdownOpen.value = false;
};
</script>
