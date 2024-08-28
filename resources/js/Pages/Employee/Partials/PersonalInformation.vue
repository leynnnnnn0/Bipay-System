<script setup>
import Input from "@/Components/Form/Input.vue";
import InputDiv from "@/Components/Form/InputDiv.vue";
import Label from "@/Components/Form/Label.vue";
import Select from "@/Components/Form/Select.vue";
import {watch} from "vue";
import FormError from "@/Components/Form/FormError.vue";

const props = defineProps({
    formData: {
      type: Object,
      required: true
    },
    formErrors: {
        type: Object,
        required: true
    }
});

const emit = defineEmits(['formUpdated']);// Watch for changes in the form and emit the updated data
watch(props.formData, (newValue) => {
    emit('formUpdated', newValue);
}, { deep: true });
</script>

<template>
    <section class="grid grid-cols-2 w-full h-full gap-5">
        <InputDiv>
            <Label>First Name*</Label>
            <Input  v-model="formData.firstName"  placeholder="John"/>
            <FormError v-if="formErrors.firstName">{{ formErrors.firstName}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Last Name*</Label>
            <Input v-model="formData.lastName" placeholder="Doe"/>
            <FormError v-if="formErrors.lastName">{{ formErrors.lastName}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Middle Name</Label>
            <Input v-model="formData.middleName" placeholder="Doe"/>
            <FormError v-if="formErrors.middleName">{{ formErrors.middleName}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Gender*</Label>
            <Select v-model="formData.gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <FormError v-if="formErrors.gender">{{ formErrors.gender}}</FormError>
            </Select>
        </InputDiv>
        <InputDiv>
            <Label>Date of Birth*</Label>
            <Input v-model="formData.dateOfBirth" type="date"/>
            <FormError v-if="formErrors.dateOfBirth">{{ formErrors.dateOfBirth}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Phone Number*</Label>
            <Input v-model="formData.phoneNumber" placeholder="9*********"/>
            <FormError v-if="formErrors.phoneNumber">{{ formErrors.phoneNumber}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Email*</Label>
            <Input v-model="formData.email" type="email" placeholder="johndoe@gmail.com"/>
            <FormError v-if="formErrors.email">{{ formErrors.email}}</FormError>
        </InputDiv>
    </section>
</template>
