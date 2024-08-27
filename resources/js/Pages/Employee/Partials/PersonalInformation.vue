<script setup>
import Input from "@/Components/Form/Input.vue";
import InputDiv from "@/Components/Form/InputDiv.vue";
import Label from "@/Components/Form/Label.vue";
import Select from "@/Components/Form/Select.vue";
import {reactive, watch} from "vue";

const props = defineProps({
    initialFormData: {
      type: Object,
      required: true
    }
});

const {firstName, lastName, middleName, gender, dateOfBirth, phoneNumber, email} = props.initialFormData;

const form = reactive({
    firstName: firstName,
    lastName: lastName,
    middleName: middleName,
    gender: gender,
    dateOfBirth: dateOfBirth,
    email: phoneNumber,
    phoneNumber: email,
});

const emit = defineEmits(['formUpdated']);// Watch for changes in the form and emit the updated data
watch(form, (newValue) => {
    emit('formUpdated', newValue);
}, { deep: true });
</script>

<template>

        <section class="grid grid-cols-2 w-full h-full gap-5">
            <InputDiv>
                <Label>First Name*</Label>
                <Input  v-model="form.firstName"  placeholder="John"/>
            </InputDiv>
            <InputDiv>
                <Label>Last Name*</Label>
                <Input v-model="form.lastName" placeholder="Doe"/>
            </InputDiv>
            <InputDiv>
                <Label>Middle Name</Label>
                <Input v-model="form.middleName" placeholder="Doe"/>
            </InputDiv>
            <InputDiv>
                <Label>Gender*</Label>
                <Select v-model="form.gender">
                    <option value="male">Male</option>
                    <option value="male">Female</option>
                </Select>
            </InputDiv>
            <InputDiv>
                <Label>Date of Birth*</Label>
                <Input v-model="form.dateOfBirth" type="date"/>
            </InputDiv>
            <InputDiv>
                <Label>Phone Number*</Label>
                <Input v-model="form.phoneNumber" placeholder="9*********"/>
            </InputDiv>
            <InputDiv>
                <Label>Email*</Label>
                <Input v-model="form.email" type="email" placeholder="johndoe@gmail.com"/>
            </InputDiv>
        </section>
</template>
