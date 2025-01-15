<template>
    <div class="mb-4">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/2 px-2 mb-2">
                <input v-model="filters.name" type="text" placeholder="Name"
                    class="w-full p-2 border border-gray-300 rounded" />
            </div>
            <div class="w-full md:w-1/2 px-2 mb-2">
                <input v-model="filters.email" type="text" placeholder="Email"
                    class="w-full p-2 border border-gray-300 rounded" />
            </div>
            <div class="w-full md:w-1/2 px-2 mb-2">
                <input v-model="filters.nomor_ktp" type="text" placeholder="Nomor KTP"
                    class="w-full p-2 border border-gray-300 rounded" />
            </div>
            <div class="w-full md:w-1/2 px-2 mb-2">
                <select v-model="filters.gender" class="w-full p-2 border border-gray-300 rounded">
                    <option value="">Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="w-full px-2 mb-2"><input v-model="filters.birthdate" type="date"
                    class="w-full p-2 border border-gray-300 rounded" /></div>
        </div>
    </div>
</template>