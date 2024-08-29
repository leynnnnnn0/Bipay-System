<script setup>
import MainLayout from "@/Layouts/MainLayout.vue";
import PersonalInformation from "@/Pages/Employee/Partials/PersonalInformation.vue";
import {ref, watch} from "vue";
import Progress from "@/Components/Progress.vue";
import AddressInformation from "@/Pages/Employee/Partials/AddressInformation.vue";
import {useRemember} from "@inertiajs/vue3";
import ConfirmDetails from "@/Pages/Employee/Partials/ConfirmDetails.vue";

const stepCount = ref(1);
const isAllowedToGoToNextStep = ref(false);
const formErrors = ref({});

const personalInformationForm = useRemember({
    firstName: '',
    lastName: '',
    middleName: '',
    gender: '',
    dateOfBirth: '',
    phoneNumber: '',
    email: '',
    password: 'password'
}, 'Employees/Create');
const addressInformationForm = useRemember({
    municipality: '',
    barangay: '',
    cityOrProvince: '',
    zipCode: '',
    streetAddress: ''
},'Address/Create')

watch(stepCount, () => {
    if(stepCount.value === 1)
    {
        const result = Object.values(personalInformationForm.value).find((item, index) => index !== 2 && item === '');
        allowedToGoToNextStep(result);
    }
    if(stepCount.value === 2)
    {
        const result = Object.values(addressInformationForm.value).find(item => item === '');
        allowedToGoToNextStep(result);
    }
});

const back = () => {
    isAllowedToGoToNextStep.value = true;
    stepCount.value--;
}
const next = () => {
    formErrors.value = {};
    if(stepCount.value === 1) inputValidation('/api/employees/create', personalInformationForm.value);
    if(stepCount.value === 2) inputValidation('/api/address/create', addressInformationForm.value);
}

const inputValidation = (routeTo, data) => {
    axios.post(routeTo, data)
        .then(response => {
            if(response.data.success)
                stepCount.value++;
        })
        .catch(error => {
            formErrors.value = error.response.data.errors
        });
}

const createEmployee = () => {
}
const handlePersonalDetailsData = (data) => {
    setFormValues(personalInformationForm, data);

    const result = Object.values(data).find((item, index) => index !== 2 &&  item === '');
    allowedToGoToNextStep(result);
}

const setFormValues = (form, values) => {
    Object.keys(form.value).forEach(key => {
        form.value[key] = values[key];
    });
}


const handleAddressDetailsData = (data) => {
    setFormValues(addressInformationForm, data);

    const result = Object.values(data).find(item => item === '');
    allowedToGoToNextStep(result);
}

const allowedToGoToNextStep = (condition) => {
    isAllowedToGoToNextStep.value = condition === undefined;
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
                <Progress step-count="1"
                          step="Personal Details"
                          :active="stepCount === 1"
                          :done="stepCount > 1"/>
                <Progress step-count="2"
                          step="Address Details"
                          :active="stepCount === 2"
                          :done="stepCount > 2"/>
                <Progress step-count="3"
                          step="Confirm Details"
                          :active="stepCount === 3"
                          :done="false"/>
            </section>
                <PersonalInformation v-if="stepCount === 1"
                                     :formData="personalInformationForm"
                                     :formErrors="formErrors"
                                     @form-update="handlePersonalDetailsData"/>
                <AddressInformation  v-if="stepCount === 2"
                                     :formData="addressInformationForm"
                                     :formErrors="formErrors"
                                     @form-update="handleAddressDetailsData"/>
                <ConfirmDetails
                    :personalInformation="personalInformationForm"
                    :addressInformation="addressInformationForm"
                    v-if="stepCount === 3"/>
                <div class="w-full flex justify-center col-span-2 gap-3">
                    <button v-if="stepCount > 1"
                            @click="back"
                            class="hover:bg-opacity-75 transition-colors duration-500 border border-blue-500 text-blue-500 px-4 py-1 font-bold rounded-lg w-24">Back</button>
                    <button v-if="stepCount < 3"
                            @click="next"
                            :disabled="!isAllowedToGoToNextStep"
                            :class="{'bg-opacity-75' :!isAllowedToGoToNextStep}"
                            class="hover:bg-opacity-75 transition-colors duration-500 bg-blue-500 text-white px-4 py-1 font-bold rounded-lg w-24">Next</button>
                    <button  v-if="stepCount === 3"
                             @click="createEmployee"
                             class="hover:bg-opacity-75 transition-colors duration-500 bg-blue-500 text-white px-4 py-1 font-bold rounded-lg w-24">Create</button>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

