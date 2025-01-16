<template>
    <MainLayout>
        <div class="absolute h-full pt-14 custom_content transition-all ease-in-out duration-500 bg-[#EBF4FA]">
            <div class="px-6 pt-4">
                <div class="flex flex-col lg:flex-row space-y-8 lg:space-x-16">
                    <LeftContent />
                    <MainContent />
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from "../../Layouts/MainLayout.vue";
import LeftContent from "./LeftContent.vue";
import MainContent from "./MainContent.vue";
</script>
