<template>
    <div class="hs-accordion-group space-y-2 bg-[#EBF4FA]">
        <div class="hs-accordion border-[#D2D2D2]" id="hs-basic-with-title-and-arrow-stretched-heading-general">
            <button
                class="hs-accordion-toggle bg-red-600 p-3 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md"
                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-general">
                <div class="flex justify-start">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                    </svg>
                    <span class="my-auto text-white ml-2 text-sm">GENERAL</span>
                </div>
                <svg class="hs-accordion-active:hidden block w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg class="hs-accordion-active:block hidden w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-general"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-general">
                <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-general2">
                        <button
                            class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-general2">
                            <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">Sub General</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-accordion border-[#D2D2D2]" id="hs-basic-with-title-and-arrow-stretched-heading-economic">
            <button
                class="hs-accordion-toggle bg-blue-600 p-3 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md"
                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-economic">
                <div class="flex justify-start">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M9 6c0-1.65685 1.3431-3 3-3s3 1.34315 3 3-1.3431 3-3 3-3-1.34315-3-3Zm2 3.62992c-.1263-.04413-.25-.08799-.3721-.13131-1.33928-.47482-2.49256-.88372-4.77995-.8482C4.84875 8.66593 4 9.46413 4 10.5v7.2884c0 1.0878.91948 1.8747 1.92888 1.8616 1.283-.0168 2.04625.1322 2.79671.3587.29285.0883.57733.1863.90372.2987l.00249.0008c.11983.0413.24534.0845.379.1299.2989.1015.6242.2088.9892.3185V9.62992Zm2-.00374V20.7551c.5531-.1678 1.0379-.3374 1.4545-.4832.2956-.1034.5575-.1951.7846-.2653.7257-.2245 1.4655-.3734 2.7479-.3566.5019.0065.9806-.1791 1.3407-.4788.3618-.3011.6723-.781.6723-1.3828V10.5c0-.58114-.2923-1.05022-.6377-1.3503-.3441-.29904-.8047-.49168-1.2944-.49929-2.2667-.0352-3.386.36906-4.6847.83812-.1256.04539-.253.09138-.3832.13765Z" />
                    </svg>
                    <span class="my-auto text-white ml-2 text-sm">ECONOMIC</span>
                </div>
                <svg class="hs-accordion-active:hidden block w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg class="hs-accordion-active:block hidden w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-economic"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-economic">
                <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-economic2">
                        <button
                            class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-economic2">
                            <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">Sub
                                Economic</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-accordion border-[#D2D2D2]" id="hs-basic-with-title-and-arrow-stretched-heading-one">
            <button
                class="hs-accordion-toggle bg-[#229954] p-3 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md"
                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                <div class="flex justify-start">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M4.37 7.657c2.063.528 2.396 2.806 3.202 3.87 1.07 1.413 2.075 1.228 3.192 2.644 1.805 2.289 1.312 5.705 1.312 6.705M20 15h-1a4 4 0 0 0-4 4v1M8.587 3.992c0 .822.112 1.886 1.515 2.58 1.402.693 2.918.351 2.918 2.334 0 .276 0 2.008 1.972 2.008 2.026.031 2.026-1.678 2.026-2.008 0-.65.527-.9 1.177-.9H20M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <span class="my-auto text-white ml-2 text-sm">ENVIRONMENT</span>
                </div>
                <svg class="hs-accordion-active:hidden block w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg class="hs-accordion-active:block hidden w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                        <button
                            class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                            <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">Energi</span>
                            <svg class="hs-accordion-active:hidden text-[#1c75bc] block w-4 h-4" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <svg class="hs-accordion-active:block text-[#1c75bc] hidden w-4 h-4" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" />
                            </svg>
                        </button>
                        <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                            aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                            <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                                <div class="hs-accordion"
                                    id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                    <button
                                        class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                                        aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                        <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">Penggunaan
                                            Energi</span>
                                        <svg class="hs-accordion-active:hidden text-[#1c75bc] block w-4 h-4" width="14"
                                            height="14" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <svg class="hs-accordion-active:block text-[#1c75bc] hidden w-4 h-4" width="14"
                                            height="14" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" />
                                        </svg>
                                    </button>
                                    <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                                        aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                        <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                                            <div class="hs-accordion"
                                                id="hs-basic-with-title-and-arrow-stretched-heading-four">
                                                <button
                                                    class="hs-accordion-toggle focus:bg-[#1c75bc] text-[#1c75bc] focus:text-white active:text-gray-400 px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white text-sm">
                                                    GRI 300
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hs-accordion border-[#D2D2D2]" id="hs-basic-with-title-and-arrow-stretched-heading-social">
            <button
                class="hs-accordion-toggle bg-yellow-400 p-3 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md"
                aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-social">
                <div class="flex justify-start">
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="my-auto text-white ml-2 text-sm">SOCIAL</span>
                </div>
                <svg class="hs-accordion-active:hidden block w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
                <svg class="hs-accordion-active:block hidden w-4 h-4 text-white" width="14" height="14"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" />
                </svg>
            </button>
            <div id="hs-basic-with-title-and-arrow-stretched-collapse-social"
                class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-social">
                <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-social2">
                        <button
                            class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                            aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-social2">
                            <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">Sub
                                Social</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
