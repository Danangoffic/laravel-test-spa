<template>
    <MainLayout>
        <div class="relative h-full pt-14 custom_content transition-all ease-in-out duration-500 bg-[#EBF4FA]">
            <div class="px-6 pt-4">
                <h1 class="text-3xl font-bold primary-text tracking-tight mb-4">USERS</h1>
                <div>
                    <div class="flex items-center justify-between mb-6">
                        <div class="flex items-center justify-start space-x-2">
                            <div>
                                <input v-model="filters.name" type="text" placeholder="Search Name"
                                    class="w-full p-2 border border-gray-300 rounded-md text-xs" />
                            </div>
                            <div>
                                <input v-model="filters.email" type="text" placeholder="Search Email"
                                    class="w-full p-2 border border-gray-300 rounded-md text-xs" />
                            </div>
                            <div>
                                <input v-model="filters.nomor_ktp" type="text" placeholder="Search ID Number"
                                    class="w-full p-2 border border-gray-300 rounded-md text-xs" />
                            </div>
                            <div>
                                <select v-model="filters.gender"
                                    class="w-full p-2 border border-gray-300 rounded-md text-xs">
                                    <option value="" disabled>Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div><input v-model="filters.birthdate" type="date"
                                    class="w-full p-2 border border-gray-300 rounded-md text-xs" /></div>
                        </div>
                        <div class="flex items-center justify-end space-x-2">
                            <button @click="showCreateForm = true"
                                class="flex items-center justify-center bg-blue-500 hover:bg-blue-700 text-sm text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                <svg class="w-4 h-4 mr-1 text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="3" d="M5 12h14m-7 7V5" />
                                </svg>
                                Add User
                            </button>
                            <button @click="fetchUsers"
                                class="bg-green-500 hover:bg-green-700 text-sm text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Retrieve
                                Data</button>
                            <div v-if="showCreateForm">
                                <CreateUserForm @close="showCreateForm = false" />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-white uppercase bg-[#1C75BC]">
                            <tr>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('number')">No</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('id')">ID</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('name')">Name</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('email')">Email</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('address')">Address</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('nomor_ktp')">ID Number
                                </th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('gender')">Gender</th>
                                <th scope="col" class="py-3 text-center cursor-pointer" @click="sort('birthdate')">Birthdate
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user, index) in users.data" :key="user.id" class="bg-white border-b text-xs">
                                <td class="p-3">{{ index + 1 }}</td>
                                <td class="p-3">{{ user.id }}</td>
                                <td class="p-3">{{ user.name }}</td>
                                <td class="p-3">{{ user.email }}</td>
                                <td class="p-3">{{ user.address }}</td>
                                <td class="p-3">{{ user.nomor_ktp }}</td>
                                <td class="p-3">{{ user.gender }}</td>
                                <td class="p-3">{{ user.birthdate }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-end items-center mt-4">
                    <div class="flex">
                        <button @click="currentPage = currentPage - 1" :disabled="currentPage == 1"
                            :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-white text-gray-600': currentPage !== page }"
                            class="text-xs mx-1 px-3.5 py-1.5 rounded focus:outline-none focus:shadow-outline">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="m14 8-4 4 4 4" />
                            </svg>
                        </button>
                        <button v-for="page in users.last_page" :key="page" @click="currentPage = page"
                            :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-white text-gray-600': currentPage !== page }"
                            class="text-xs mx-1 px-3.5 py-1.5 rounded focus:outline-none focus:shadow-outline">
                            {{ page }}
                        </button> <button @click="currentPage = currentPage + 1"
                            :disabled="currentPage == users.last_page"
                            :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-white text-gray-600': currentPage !== page }"
                            class="text-xs mx-1 px-3.5 py-1.5 rounded focus:outline-none focus:shadow-outline">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" d="m10 16 4-4-4-4" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script>
import { Head } from '@inertiajs/vue3'
import { ref, watch, computed } from 'vue'
import axios from 'axios'
import CreateUserForm from './CreateUserForm.vue'
import MainLayout from '@/Layouts/MainLayout.vue';

export default {
    components: {
        CreateUserForm,
        Head,
        MainLayout
    },
    setup() {
        const users = ref([])
        const showCreateForm = ref(false)
        const sortKey = ref('')
        const sortOrder = ref('asc')
        const currentPage = ref(1)
        const perPage = 10
        const filters = ref({
            name: '',
            email: '',
            nomor_ktp: '',
            gender: '',
            birthdate: '',
        })

        const fetchUsers = async () => {
            const response = await axios.get('/api/users', {
                params: {
                    sort: sortKey.value,
                    order: sortOrder.value,
                    page: currentPage.value,
                    per_page: perPage,
                    ...filters.value,
                },
            });
            console.log("response data : ", response);
            users.value = response.data
        }

        const sort = (key) => {
            if (sortKey.value == key) {
                sortOrder.value = sortOrder.value === 'asc' ? 'desc' : 'asc'
            } else {
                sortKey.value = key
                sortOrder.value = 'asc'
            }
            if (key == 'number') {

                sortOrder.value = 'asc'
            } else {
                currentPage.value = 1
                fetchUsers()
            }
        }

        watch(filters, () => {
            currentPage.value = 1
            fetchUsers()
        }, { deep: true })
        watch(currentPage, fetchUsers)

        return {
            users,
            showCreateForm,
            sortKey,
            sortOrder,
            currentPage,
            perPage,
            filters,
            fetchUsers,
            sort,
        }
    }

}
</script>
