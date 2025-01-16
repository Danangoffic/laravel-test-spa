<template>
    <!-- Main Modal -->
    <div id="defaultModal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex justify-center items-center bg-gray-800 bg-opacity-50">
        <div class="relative p-4 w-full max-w-md">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add User
                    </h3>
                    <button @click="$emit('close')" type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form @submit.prevent="submit">
                    <div class="p-6 space-y-6">
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                            <input v-model="form.name" type="text" id="name"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p v-if="errors.name" class="mt-1 text-sm text-red-600 dark:text-red-500">
                                {{ errors.name }}
                            </p>
                        </div>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input v-model="form.email" type="email" id="email"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p v-if="errors.email" class="mt-1 text-sm text-red-600 dark:text-red-500">
                                {{ errors.email }}
                            </p>

                        </div>
                        <div>
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input v-model="form.address" type="text" id="address"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p v-if="errors.address" class="mt-1 text-sm text-red-600 dark:text-red-500">
                                {{ errors.address }}
                            </p>

                        </div>
                        <div>
                            <label for="nomor_ktp"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor KTP</label>
                            <input v-model="form.nomor_ktp" type="number" id="nomor_ktp" minlength="16" maxlength="16"
                                inputmode="numeric"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                required>
                            <p v-if="errors.nomor_ktp" class="mt-1 text-sm text-red-600 dark:text-red-500">
                                {{ errors.nomor_ktp }}
                            </p>

                        </div>
                        <div>
                            <label for="gender"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                            <input v-model="form.gender" type="text" id="gender"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                disabled>

                        </div>
                        <div>
                            <label for="birthdate"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthdate</label>
                            <input v-model="form.birthdate" type="text" id="birthdate"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                disabled>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div
                        class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit" @click="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add
                            User</button>
                        <button @click="$emit('close')" type="button"
                            class="text-gray-500 bg-white flex items-center justify-center hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"><svg
                                class="w-5 h-5 text-gray-500 mr-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
import { reactive, watch } from 'vue'
import { router, useForm } from '@inertiajs/vue3'

export default {
    setup(props, { emit }) {
        const form = useForm({
            name: '',
            email: '',
            address: '',
            nomor_ktp: '',
            gender: '',
            birthdate: '',
        })

        const errors = reactive({
            name: '',
            email: '',
            address: '',
            nomor_ktp: '',
        })

        const detectGender = (ktp) => {
            const genderDigit = parseInt(ktp[6]);
            return genderDigit > 3 ? 'Female' : 'Male';
        }

        const detectBirthdate = (ktp) => {
            const birthdateFull = ktp.substr(6, 6);
            const year = '19' + birthdateFull.slice(4, 6);
            let month = birthdateFull.slice(2, 4);
            let day = birthdateFull.slice(0, 2);
            if (parseInt(birthdateFull.slice(0, 2)) >= 40) {
                day = parseInt(day) - 40;
            }
            day = day < 10 ? `0${day}` : day;

            return `${year}-${month}-${day}`;
        }

        watch(() => form.nomor_ktp, (newValue) => {
            newValue = newValue.toString();
            console.log("length ktp : " + newValue.length);
            if (newValue.length === 16 && /^\d+$/.test(newValue)) {
                form.gender = detectGender(newValue);
                form.birthdate = detectBirthdate(newValue);
                errors.nomor_ktp = '';
            } else if (!/^\d+$/.test(newValue)) {
                errors.nomor_ktp = 'Nomor KTP harus berupa angka.';
            } else if (newValue.length != 16) {
                errors.nomor_ktp = 'Nomor KTP harus 16 digit.';
            }
        })

        const validateForm = () => {
            if (!form.name) {
                errors.name = 'Name is required';
            } else {
                errors.name = '';
            }
            if (!form.email) {
                errors.email = 'Email is required';
            } else {
                errors.email = '';
            } if (!form.email.includes('@') && !form.email.includes('.')) {
                errors.email = 'Invalid Email Format';
            } else {
                errors.email = '';
            }

            if (!form.address) {
                errors.address = 'Address is required';
            } else {
                errors.address = '';
            }
            if (Object.values(errors).some(error => error)) {
                return false;
            } else {
                return true;
            }

        }

        const submit = () => {
            if (!validateForm()) {
                return;
            }
            if (Object.values(errors).some(error => error)) {
                return;
            }
            form.nomor_ktp = form.nomor_ktp.toString();

            form.post('/users', {
                onSuccess: () => {
                    form.reset('name', 'email', 'address', 'nomor_ktp', 'gender', 'birthdate')
                    Object.keys(errors).forEach(key => {
                        errors[key] = '';
                    });
                    emit('close');
                },
                onError: (error) => {
                    Object.keys(errors).forEach(key => {
                        errors[key] = error.errors[key] ? error.errors[key][0] : '';
                    });
                },
            })
        }

        return { form, errors, submit }
    }
}
</script>
