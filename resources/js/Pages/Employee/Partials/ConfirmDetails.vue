<script setup>

defineProps({
    personalInformation: {
        type: Object,
        required: true
    },
    addressInformation: {
        type: Object,
        required: true
    }
})
</script>

<template>
    <div class="flex flex-col items-center justify-center p-5 gap-10 w-full">
        <div class="flex w-full h-full gap-3 bg-white rounded-lg p-5">
            <section class="w-full space-y-3">
                <h1 class="text-black text-xl font-bold">Personal Details</h1>
                <section class="flex flex-col gap-1">
                    <strong class="text-gray-900">First Name: <span v-text="personalInformation.firstName"></span></strong>
                    <strong class="text-gray-900">Middle Name: <span v-text="personalInformation.middleInitial"></span></strong>
                    <strong class="text-gray-900">Last Name: <span v-text="personalInformation.lastName"></span></strong>
                    <strong class="text-gray-900">Gender: <span v-text="personalInformation.gender"></span></strong>
                    <strong class="text-gray-900">Date of Birth: <span v-text="personalInformation.dateOfBirth"></span></strong>
                    <strong class="text-gray-900">Phone Number: <span v-text="personalInformation.phoneNumber"></span></strong>
                    <strong class="text-gray-900">Email: <span v-text="personalInformation.email"></span></strong>
                </section>
            </section>
            <section class="w-full space-y-3">
                <h1 class="text-black text-xl font-bold">Address Details</h1>
                <section class="flex flex-col gap-1">
                    <strong class="text-gray-900">Municipality: <span v-text="addressInformation.municipality"></span></strong>
                    <strong class="text-gray-900">Barangay: <span v-text="addressInformation.barangay"></span></strong>
                    <strong class="text-gray-900">Provice/State: <span v-text="addressInformation.provinceOrState"></span></strong>
                    <strong class="text-gray-900">Zipcode: <span v-text="addressInformation.zipCode"></span></strong>
                    <strong class="text-gray-900">Address: <span v-text="addressInformation.address"></span></strong>
                </section>
            </section>
        </div>
    </div>
</template>
