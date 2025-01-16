<template>
    <img :src="flagUrl" class="w-8 h-4" :alt="flagName + '-flag'" />
</template>

<script setup>
import { computed } from 'vue';

const props = defineProps({
    flag: {
        type: String,
        required: true
    }
});

const flagUrl = computed(() => {
    return `https://flagicons.lipis.dev/flags/4x3/${props.flag}.svg`;
});

const flagName = computed(() => {
    switch (props.flag) {
        case 'id':
            return 'Indonesia';
        case 'us':
            return 'USA';
        default:
            return 'Unknown';
    }
});
</script>
