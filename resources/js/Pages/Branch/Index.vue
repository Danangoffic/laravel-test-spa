<!-- resources/js/Pages/Branches.vue -->
<template>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Branch List</h1>
        <table id="branchesTable" class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Branch Name</th>
                    <th scope="col" class="px-6 py-3">Branch Code</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="branch in branches" :key="branch.value" class="bg-white border-b">
                    <td class="px-6 py-4">{{ branch.text }}</td>
                    <td class="px-6 py-4">{{ branch.value }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import $ from 'jquery'

export default {
    setup() {
        const branches = ref([])

        const fetchBranches = async () => {
            try {
                const response = await axios.get('https://private-46841d-dummybljr.apiary-mock.com/incentive_api/api/v1/dropdown_branch')
                branches.value = response.data.data;
            } catch (error) {
                console.error('Error fetching branches:', error)
            }
        }

        onMounted(() => {
            fetchBranches().then(() => {
                $('#branchesTable').DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    searching: true,
                    ordering: true,
                    paging: true,
                })
            })
        })

        return { branches }
    }
}  
</script>

<style scoped>

</style>
