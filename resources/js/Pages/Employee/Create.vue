<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import PersonalInformation from "@/Pages/Employee/Partials/PersonalInformation.vue";
import {ref} from "vue";
import Progress from "@/Components/Progress.vue";
import AddressInformation from "@/Pages/Employee/Partials/AddressInformation.vue";
import {useForm} from "@inertiajs/vue3";
import ConfirmDetails from "@/Pages/Employee/Partials/ConfirmDetails.vue";

const stepCount = ref(1);
const personalDetailsForm = useForm({});
const addressDetailsForm = useForm({});

const handlePersonalDetailsData = (data) => {
    personalDetailsForm.value = data;
    console.log('Updated form for personal details data:', personalDetailsForm.value);
}

const handleAddressDetailsData = (data) => {
    addressDetailsForm.value = data;
    console.log('Updated form for address details data:', addressDetailsForm.value);
}

</script>

<template>
    <MainLayout>
        <div class="flex items-center justify-center h-full w-full px-16">
            <div class="flex flex-col items-center justify-center p-5 gap-10 w-full">
            <section class="flex items-center justify-center flex-col">
                <h1 class="font-bold text-3xl">Create New Employee</h1>
                <p class="text-gray-500">Enter the details to get going</p>
            </section>
            <section class="flex items-center justify-around w-full">
                <Progress step-count="1" step="Personal Details" :active="stepCount === 1" :done="stepCount > 1"/>
                <Progress step-count="2" step="Address Details" :active="stepCount === 2" :done="stepCount > 2"/>
                <Progress step-count="3" step="Confirm Details" :active="stepCount === 3" :done="false"/>
            </section>
                <PersonalInformation v-if="stepCount === 1" @form-updated="handlePersonalDetailsData"/>
                <AddressInformation v-if="stepCount === 2" @form-updated="handleAddressDetailsData"/>
                <ConfirmDetails v-if="stepCount === 3"/>
                <div class="w-full flex justify-center col-span-2 gap-3">
                    <button v-if="stepCount > 1" @click="stepCount--" class="border border-blue-500 text-blue-500 px-4 py-1 font-bold rounded-lg w-24">Back</button>
                    <button v-if="stepCount < 3" @click="stepCount++" class="bg-blue-500 text-white px-4 py-1 font-bold rounded-lg w-24">Next</button>
                    <button v-if="stepCount === 3" @click="stepCount++" class="bg-blue-500 text-white px-4 py-1 font-bold rounded-lg w-24">Create</button>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

