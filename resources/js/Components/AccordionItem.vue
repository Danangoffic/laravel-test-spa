<template>
    <div class="hs-accordion border-[#D2D2D2]">
        <button
            class="hs-accordion-toggle p-3 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md"
            :class="color"
            @click="toggleAccordion"
            :aria-controls="`collapse-${title}`"
        >
            <div class="flex justify-start">
                <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>
                <span class="my-auto text-white ml-2 text-sm">{{ title }}</span>
            </div>
            <svg class="hs-accordion-active:hidden block w-4 h-4 text-white" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.25 4.5l7.5 7.5-7.5 7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg class="hs-accordion-active:block hidden w-4 h-4 text-white" width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
            </svg>
        </button>
        <div
            :id="`collapse-${title}`"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
            :aria-labelledby="title"
            v-show="isOpen"
        >
            <div class="hs-accordion-group pl-6 mt-2 bg-[#EBF4FA] rounded-md">
                <div v-for="(subItem, index) in subItems" :key="index" class="hs-accordion">
                    <button
                        class="hs-accordion-toggle px-3 py-2 inline-flex items-center justify-between gap-x-3 w-full transition rounded-md bg-white"
                        @click="toggleSubAccordion(subItem.title)"
                        :aria-controls="`collapse-${subItem.title}`"
                    >
                        <span class="my-auto text-[#1c75bc] ml-2 text-sm font-medium">{{ subItem.title }}</span>
                    </button>
                    <div
                        :id="`collapse-${subItem.title}`"
                        class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300 bg-[#EBF4FA]"
                        v-show="subItem.isOpen"
                    >
                        <div class="pl-6 mt-2">
                            <div v-for="(subSubItem, subIndex) in subItem.subItems" :key="subIndex" class="text-[#1c75bc] ml-2 text-sm font-medium">
                                {{ subSubItem.title }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    icon: {
        type: String,
        required: true,
    },
    color: {
        type: String,
        required: true,
    },
    subItems: {
        type: Array,
        default: () => [],
    },
});

const isOpen = ref(false);

const toggleAccordion = () => {
    isOpen.value = !isOpen.value;
};

const toggleSubAccordion = (subItemTitle) => {
    const subItem = props.subItems.find(item => item.title === subItemTitle);
    if (subItem) {
        subItem.isOpen = !subItem.isOpen;
    }
};
</script>
