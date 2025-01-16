<!-- resources/js/Pages/Branches.vue -->
<template>
    <MainLayout>
        <div class="absolute h-full pt-14 custom_content transition-all ease-in-out duration-500 bg-[#EBF4FA]">
            <div class="p-6">
                <h1 class="text-3xl font-bold primary-text tracking-tight mb-4">BRANCH OFFICE</h1>
                <table id="branchesTable" class="w-full text-xs text-left text-gray-500">
                    <thead class="text-xs text-white uppercase bg-[#1C75BC]">
                        <tr>
                            <th scope="col" class="px-3 py-3">Branch Name</th>
                            <th scope="col" class="px-3 py-3">Branch Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="branch in branches" :key="branch.value" class="bg-white border-b text-gray-800">
                            <td class="p-3">{{ branch.text }}</td>
                            <td class="p-3">{{ branch.value }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </MainLayout>
</template>

<script>
import { ref, onMounted } from 'vue'
import axios from 'axios'
import $ from 'jquery'
import MainLayout from '@/Layouts/MainLayout.vue';

export default {
    components: { MainLayout },
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

<style scoped></style>
