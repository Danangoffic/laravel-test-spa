<template>
    <div class="mx-auto w-full sm:max-w-sm">
        <form class="space-y-6" @submit.prevent="submitForm" method="POST">
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                <div class="mt-2">
                    <input v-model="form.email" type="email" name="email" id="email" autocomplete="email" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input v-model="form.password" type="password" name="password" id="password"
                        autocomplete="current-password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="confirmPassword" class="block text-sm/6 font-medium text-gray-900">Confirm
                        Password</label>
                </div>
                <div class="mt-2">
                    <input v-model="form.confirmPassword" type="password" name="confirmPassword" id="confirmPassword"
                        autocomplete="current-password" required
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                </div>
            </div>

            <div class="pt-2">
                <button :disabled="isSubmitting" type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    :class="{ 'opacity-50 cursor-not-allowed': isSubmitting }">Sign in</button>
            </div>
        </form>
        <div v-if="localShowAlert" class="mt-4">
            <div id="toast-simple"
                class="flex items-center w-full p-4 space-x-4 rtl:space-x-reverse text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow dark:text-gray-400 dark:divide-gray-700 dark:bg-gray-800"
                role="alert">
                <ChecklistIcon />
                <span class="sr-only">Info</span>
                <div class="ps-4 text-sm font-normal">
                    <span class="font-medium">Success!</span> You have logged in successfully.
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ChecklistIcon from '@/Components/Icons/ChecklistIcon.vue';
import { useForm } from '@inertiajs/inertia-vue3';
import { router } from '@inertiajs/vue3'
export default {
    props: {
        showAlert: {
            type: Boolean,
            default: false
        }
    },
    components: {
        ChecklistIcon,
    },
    data() {
        return {
            form: useForm({
                email: '',
                password: '',
                confirmPassword: ''
            }),
            localShowAlert: this.showAlert,
            isSubmitting: false
        };
    },
    watch: {
        localShowAlert(newVal) {
            this.$emit('update:showAlert', newVal);
        }
    },
    methods: {
        async submitForm() {
            if (this.form.password !== this.form.confirmPassword) {
                alert('Passwords do not match');
                return;
            }
            this.isSubmitting = true;
            try {
                router.post(route('users.loginPost'), this.form, {
                    async: true,
                    onSuccess: (prop) => {
                        console.log(prop);
                        this.localShowAlert = true;
                        setTimeout(() => {
                            this.localShowAlert = false;
                            router.visit(route('users.login.pin'));
                        }, 5000);
                    },
                    onFinish: e => {
                        this.isSubmitting = false;
                    }
                });
            } catch (error) {
                console.error(error);
                this.isSubmitting = false;
                // Handle error response
            }
        }
    }
};
</script>
