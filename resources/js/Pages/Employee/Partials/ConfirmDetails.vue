<script setup>

const data = {
    firstName: '',
    lastName: '',
    middleInitial: '',
    gender: '',
    dateOfBirth: '',
    phoneNumber: '',
    email: ''
}
</script>

<template>
    <div class="flex flex-col items-center justify-center p-5 gap-10 w-full">
        <div class="flex w-full h-full gap-3 bg-white rounded-lg p-5">
            <section class="w-full space-y-3">
                <h1 class="text-black text-xl font-bold">Personal Details</h1>
                <section class="flex flex-col gap-1">
                    <strong class="text-gray-900">First Name: <span v-text="data.firstName"></span></strong>
                    <strong class="text-gray-900">Middle Name: <span v-text="data.middleInitial"></span></strong>
                    <strong class="text-gray-900">Last Name: <span v-text="data.lastName"></span></strong>
                    <strong class="text-gray-900">Gender: <span v-text="data.gender"></span></strong>
                    <strong class="text-gray-900">Date of Birth: <span v-text="data.dateOfBirth"></span></strong>
                    <strong class="text-gray-900">Phone Number: <span v-text="data.phoneNumber"></span></strong>
                    <strong class="text-gray-900">Email: <span v-text="data.email"></span></strong>
                </section>
            </section>
            <section class="w-full space-y-3">
                <h1 class="text-black text-xl font-bold">Address Details</h1>
                <section class="flex flex-col gap-1">
                    <strong class="text-gray-900">Municipality: <span v-text="data.firstName"></span></strong>
                    <strong class="text-gray-900">Barangay: <span v-text="data.middleInitial"></span></strong>
                    <strong class="text-gray-900">Provice/State: <span v-text="data.lastName"></span></strong>
                    <strong class="text-gray-900">Zipcode: <span v-text="data.gender"></span></strong>
                    <strong class="text-gray-900">Address: <span v-text="data.dateOfBirth"></span></strong>
                </section>
            </section>
        </div>
    </div>
</template>
