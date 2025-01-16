<template>
    <div class="mx-auto w-full sm:max-w-sm">
        <h1 class="text-2xl font-semibold text-gray-900 text-center">Enter Your PIN</h1>
        <form @submit.prevent="submitPin" id="pin-form" class="mt-10 flex justify-center space-x-2">
            <input v-for="(pin, index) in pins" :key="index" type="text" maxlength="1" :autofocus="index===0" :disabled="submitting"
                class="pin-input w-12 lg:w-14 h-12 lg:h-14 text-center text-2xl border rounded-md focus:outline-indigo-500"
                v-model="pins[index]" @input="handleInput(index)" @keydown="handleKeydown(index)" required />
        </form>

        <div v-if="showAlert" class="mt-4">
            <div id="toast-simple"
                class="flex items-center w-full p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
                role="alert">
                <ChecklistIcon />
                <span class="sr-only">Info</span>
                <div class="ps-4 text-sm font-normal">
                    <span class="font-medium">Success</span> entered your PIN!
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import ChecklistIcon from '../../Components/Icons/ChecklistIcon.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { router } from '@inertiajs/vue3';
import { ref } from 'vue';
const props = defineProps({
    showAlert: {
        type: Boolean,
        default: false
    }
});
const pins = ref(['', '', '', '', '', '']); // Array to hold the PIN inputs
const showAlert = ref(props.showAlert);
const submitting = ref(false);
const handleInput = (index) => {
    // Move cursor automatically to the next field
    if (pins.value[index].length === 1 && index < pins.value.length - 1) {
        // Focus the next input
        const nextInput = document.querySelectorAll('.pin-input')[index + 1];
        nextInput.focus();
    }

    // Prevent non-numeric input
    if (!/^\d$/.test(pins.value[index])) {
        pins.value[index] = ''; // Clear the input if it's not a digit
    }

    if (pins.value.every(pin => pin.length === 1)) {
        submitPin();
    }
};

const handleKeydown = (index) => {
    // Handle backspace to go to the previous field
    if (event.key === 'Backspace' && !pins.value[index] && index > 0) {
        const prevInput = document.querySelectorAll('.pin-input')[index - 1];
        prevInput.focus();
    }
};

const submitPin = () => {
    submitting.value = true;
    const pinString = useForm({ pin: pins.value.join('') });
    router.post(route('users.pin.login'), pinString, {
        async: false,
        onSuccess: (res) => {
            console.log("result success",res);
            showAlert.value = true;

            setTimeout(() => {
                showAlert.value = false;
                router.visit(route('dashboard.index'));
            }, 5000);
        },
        onFinish: e => {
            submitting.value = false;
        }
    })
};
</script>
