<!-- resources/js/Pages/Users/Index.vue -->
<template>
    <div>

        <Head title="User List" />
        <div class="p-6">
            <h1 class="text-2xl font-bold mb-4">User List</h1>
            <button @click="fetchUsers"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-4">Retrieve</button>
            <button @click="showCreateForm = true"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mb-4">Create
                User</button>
            <div v-if="showCreateForm">
                <CreateUserForm @close="showCreateForm = false" />
            </div>
            <div class="mb-4">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-full md:w-1/2 px-2 mb-2">
                        <input v-model="filters.name" type="text" placeholder="Name"
                            class="w-full p-1 border border-gray-300 rounded " />
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-2">
                        <input v-model="filters.email" type="text" placeholder="Email"
                            class="w-full p-1 border border-gray-300 rounded" />
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-2">
                        <input v-model="filters.nomor_ktp" type="text" placeholder="Nomor KTP"
                            class="w-full p-1 border border-gray-300 rounded" />
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-2">
                        <select v-model="filters.gender" class="w-full p-1 border border-gray-300 rounded">
                            <option value="" disabled>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="w-full md:w-1/2 px-2 mb-2"><input v-model="filters.birthdate" type="date"
                            class="w-full p-1 border border-gray-300 rounded" /></div>
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('number')">Number</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('id')">User ID</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('name')">Name</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('email')">Email</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('address')">Address</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('nomor_ktp')">Nomor KTP</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('gender')">Gender</th>
                        <th scope="col" class="px-6 py-3 cursor-pointer" @click="sort('birthdate')">Birthdate</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(user, index) in users.data" :key="user.id" class="bg-white border-b">
                        <td class="px-6 py-4">{{ index + 1 }}</td>
                        <td class="px-6 py-4">{{ user.id }}</td>
                        <td class="px-6 py-4">{{ user.name }}</td>
                        <td class="px-6 py-4">{{ user.email }}</td>
                        <td class="px-6 py-4">{{ user.address }}</td>
                        <td class="px-6 py-4">{{ user.nomor_ktp }}</td>
                        <td class="px-6 py-4">{{ user.gender }}</td>
                        <td class="px-6 py-4">{{ user.birthdate }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="flex justify-between items-center mt-4">

                <div class="flex">
                    <button @click="currentPage = currentPage - 1" :disabled="currentPage == 1"
                        :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-gray-200 text-gray-700': currentPage !== page }"
                        class="mx-1 px-3 py-1 rounded focus:outline-none focus:shadow-outline">
                        Previous
                    </button>
                    <button v-for="page in users.last_page" :key="page" @click="currentPage = page"
                        :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-gray-200 text-gray-700': currentPage !== page }"
                        class="mx-1 px-3 py-1 rounded focus:outline-none focus:shadow-outline">
                        {{ page }}
                    </button> <button @click="currentPage = currentPage + 1" :disabled="currentPage == users.last_page"
                        :class="{ 'bg-blue-500 text-white': currentPage === page, 'bg-gray-200 text-gray-700': currentPage !== page }"
                        class="mx-1 px-3 py-1 rounded focus:outline-none focus:shadow-outline">
                        Next
                    </button>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
import { Head } from '@inertiajs/vue3'
import { ref, watch, computed } from 'vue'
import axios from 'axios'
import CreateUserForm from './CreateUserForm.vue'

export default {
    components: {
        CreateUserForm,
        Head
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
            if (key == 'number'){
                
                sortOrder.value = 'asc'
            }else{
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
