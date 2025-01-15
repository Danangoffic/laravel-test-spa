<template>
    <div class="flex min-h-screen flex-col items-center justify-center py-2">
        <div class="flex w-full max-w-md flex-col items-center bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-3xl font-bold mb-4">Login</h1>
            <form @submit.prevent="submit">
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" v-model="form.email"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" id="password" v-model="form.password"
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                        required>
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:shadow-outline">
                        Login
                    </button>
                </div>
                <div v-if="error" class="text-red-500 text-center">
                    {{ error }}
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3'
import { route } from '../../../../vendor/tightenco/ziggy/src/js/index';

export default {
    setup() {
        const form = useForm({
            email: '',
            password: '',
        });

        const error = ref(null);

        const submit = () => {
            form.post(route('users.loginPost'), {
                onSuccess: () => {
                    $swal({
                        icon: "success",
                        title: "Login Success"
                    })
                },
                onError: (error) => {
                    if (error.response.data.errors) {
                        error.response.data.errors.email ? error.value = error.response.data.errors.email[0] : '';
                    }
                },
                
            });
        };
        return { form, error, submit };
    },
};
</script>
