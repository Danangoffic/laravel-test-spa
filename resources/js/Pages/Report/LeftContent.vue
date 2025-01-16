<template>
    <div class="w-full lg:w-1/4">
        <h1 class="text-3xl font-bold primary-text tracking-tight mb-4">REPORT DETAIL</h1>
        <form class="mx-auto mb-6">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <SearchIcon />
                </div>
                <input type="search" id="default-search"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search" required />
            </div>
        </form>
        <div class="w-full">
            <div class="mb-4 border-b-2 border-[#1C75BC]">
                <ul class="flex flex-wrap text-sm font-medium text-center" id="default-styled-tab"
                    role="tablist">
                    <li class="flex-1" role="presentation">
                        <button @click="activeTab = 'profile'"
                            class="w-full inline-block p-3 border-b-2 rounded-t-lg"
                            :class="{'text-white bg-[#1C75BC] hover:text-white border-[#1C75BC]': activeTab === 'profile', 'text-[#1C75BC] bg-[#c6dff7] hover:border-gray-300': activeTab !== 'profile'}"
                            id="profile-styled-tab" type="button" role="tab" aria-controls="profile"
                            :aria-selected="activeTab === 'profile'">PAGES</button>
                    </li>
                    <li class="flex-1" role="presentation">
                        <button @click="activeTab = 'dashboard'"
                            class="w-full inline-block p-3 border-b-2 rounded-t-lg"
                            :class="{'text-white bg-[#1C75BC] hover:text-white border-[#1C75BC]': activeTab === 'dashboard', 'text-[#1C75BC] bg-[#c6dff7] hover:border-gray-300': activeTab !== 'dashboard'}"
                            id="dashboard-styled-tab" type="button" role="tab"
                            aria-controls="dashboard" :aria-selected="activeTab === 'dashboard'">RESULT</button>
                    </li>
                </ul>
            </div>
            <div id="default-styled-tab-content">
                <div v-if="activeTab === 'profile'" class="rounded-lg bg-gray-50" id="styled-profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <AccordionLeftContentReport />
                </div>
                <div v-if="activeTab === 'dashboard'" class="p-4 rounded-lg bg-gray-50" id="styled-dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <p class="text-sm text-gray-500">Result content goes here.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import SearchIcon from '@/Components/Icons/SearchIcon.vue';
import AccordionLeftContentReport from '@/Components/AccordionLeftContentReport.vue';

// Active Tab State
const activeTab = ref('profile');

// Accordion Items
const accordionItems = [
    {
        id: 'general',
        title: 'GENERAL',
        icon: 'general-icon',
        color: 'bg-red-600',
        subItems: [
            { id: 'sub-general', title: 'Sub General' }
        ]
    },
    {
        id: 'economic',
        title: 'ECONOMIC',
        icon: 'economic-icon',
        color: 'bg-blue-600',
        subItems: [
            { id: 'sub-economic', title: 'Sub Economic' }
        ]
    },
    {
        id: 'environment',
        title: 'ENVIRONMENT',
        icon: 'environment-icon',
        color: 'bg-[#229954]',
        subItems: [
            {
                id: 'energi',
                title: 'Energi',
                subItems: [
                    { id: 'penggunaan-energi', title: 'Penggunaan Energi', subItems: [
                        { id: 'gri-300', title: 'GRI 300' }
                    ]}
                ]
            }
        ]
    },
    {
        id: 'social',
        title: 'SOCIAL',
        icon: 'social-icon',
        color: 'bg-yellow-400',
        subItems: [
            { id: 'sub-social', title: 'Sub Social' }
        ]
    }
];
</script>
