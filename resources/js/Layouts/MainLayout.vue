<template>
    <div class="flex bg-gray-100">
        <!-- Sidebar -->
        <Sidebar />

        <!-- Navbar -->
        <Navbar />

        <!-- Content -->
        <slot />
    </div>
</template>

<script setup>
import Sidebar from '../Components/Sidebar.vue';
import Navbar from '../Components/Navbar.vue';
</script>
