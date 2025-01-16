<div class="w-full lg:w-3/4">
    <div class="flex flex-col lg:flex-row items-center justify-between">
        <div class="flex items-center justify-center">
            <span class="text-sm text-[#1C75BC] mr-4 font-semibold">Standard</span>
            <!-- DROPDOWN YEAR -->
            <button id="dropdownStandardButton" data-dropdown-toggle="dropdownStandard"
                class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                type="button">Standard 1 <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownStandard" class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownStandardButton">
                    @for ($i = 1; $i < 4; $i++)
                        <li>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Standard {{ $i }}</a>
                        </li>
                    @endfor
                </ul>
            </div>
        </div>
        <div class="flex items-center justify-center">
            <span class="text-sm text-[#1C75BC] mr-4 font-semibold">View Report as</span>
            <!-- DROPDOWN OFFICE -->
            <button id="dropdownOfficeButton" data-dropdown-toggle="dropdownOffice"
                class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                type="button">Kantor Pusat <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownOffice"
                class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownOfficeButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">Kantor
                            Pusat</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">Kantor
                            Cabang</a>
                    </li>
                </ul>
            </div>
            <!-- DROPDOWN OFFICE 2 -->
            <button id="dropdownOffice2Button" data-dropdown-toggle="dropdownOffice2"
                class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                type="button">Kantor Pusat <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>
            <div id="dropdownOffice2"
                class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownOffice2Button">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">Kantor
                            Pusat</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100">Kantor
                            Cabang</a>
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
                            <svg class="w-4 h-4 mr-1 text-[#1c75bc] group-focus:text-white hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M19 10V4a1 1 0 0 0-1-1H9.914a1 1 0 0 0-.707.293L5.293 7.207A1 1 0 0 0 5 7.914V20a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2M10 3v4a1 1 0 0 1-1 1H5m5 6h9m0 0-2-2m2 2-2 2" />
                            </svg>Export
                        </button>
                        <button type="button"
                            class="group px-2 py-1 text-xs font-medium text-center text-[#1c75bc] bg-[#EBF4FA] rounded-md hover:bg-[#1c75bc] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 flex items-center justify-center">
                            <svg class="w-4 h-4  text-[#1c75bc] group-focus:text-white mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M21 8v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8m18 0-8.029-4.46a2 2 0 0 0-1.942 0L3 8m18 0-9 6.5L3 8" />
                            </svg>
                            View</button>
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
                    <!-- DROPDOWN YEAR -->
                    <button id="dropdownEnvironmentYearButton" data-dropdown-toggle="dropdownEnvironmentYear"
                        class="bg-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-small rounded-sm border-[1px] border-gray-300 text-sm w-40 px-2 mx-1 py-1 text-center inline-flex items-center justify-between"
                        type="button">2025 <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="dropdownEnvironmentYear"
                        class="z-50 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700"
                            aria-labelledby="dropdownEnvironmentYearButton">
                            @for ($i = 2025; $i > 2020; $i--)
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-gray-100">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <input id="default-checkbox" type="checkbox" value=""
                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                    <label for="default-checkbox"
                        class="ms-2 text-sm font-medium primary-text">Show annual</label>
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
                        @for ($i = 1; $i < 13; $i++)
                            <button
                                class="flex items-center justify-center w-7 h-7 bg-[#EBF4FA] primary-text font-semibold rounded-full -start-4 border-[1px] border-gray-500 hover:text-white hover:bg-[#1C75BC] focus:ring-2 focus:outline-none focus:ring-blue-300 text-sm">
                                {{ $i }}
                            </button>
                        @endfor
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
                            <th scope="col" class="px-6 py-3 border-r-[1px] border-[#1C75BC] font-bold" rowspan="3">UOM
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
                        <!-- Row 1 -->
                        <tr class="bg-white border-b text-center">
                            <td class="px-6 py-4" rowspan="2">Air</td>
                            <td class="px-6 py-4" rowspan="2">Joule</td>
                            <td class="px-6 py-4 primary-text">1,140</td>
                            <td class="px-6 py-4 primary-text">2,380</td>
                            <td class="px-6 py-4 primary-text">2,430</td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="bg-white border-b">
                        </tr>
                        <!-- Row 3 -->
                        <tr class="bg-white border-b text-center">
                            <td class="px-6 py-4" rowspan="2">Listrik</td>
                            <td class="px-6 py-4" rowspan="2">Joule</td>
                            <td class="px-6 py-4 primary-text">18,970</td>
                            <td class="px-6 py-4 primary-text">25,040</td>
                            <td class="px-6 py-4 primary-text">26,730</td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="bg-white border-b">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
