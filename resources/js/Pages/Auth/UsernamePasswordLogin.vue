<template>
    <AuthenticationLayout>
        <div class="flex min-h-screen">
            <!--LEFT CONTENT -->
            <div class="hidden w-1/2 lg:block">
                <img class="w-full h-full object-cover"
                    src="https://images.unsplash.com/photo-1496171367470-9ed9a91ea931?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Background Image">
            </div>

            <!-- MAIN CONTENT -->
            <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-12 bg-gray-200">
                <div class="max-w-md w-full">
                    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                        <img class="mx-auto h-14 w-auto mb-8"
                            src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Your Company">
                    </div>
                    <LoginTest />
                    <div class="mt-10">
                        <Link :href="route('users.login.pin')" class="text-indigo-600 hover:text-indigo-500">
                            Login with PIN
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticationLayout>
</template>

<script setup>
import AuthenticationLayout from '@/Layouts/AuthenticationLayout.vue';
import LoginTest from './LoginTest.vue';

</script>
