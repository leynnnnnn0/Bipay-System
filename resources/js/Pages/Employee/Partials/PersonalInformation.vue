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

const emit = defineEmits(['formUpdate']);// Watch for changes in the form and emit the updated data
watch(props.formData, (newValue) => {
    emit('formUpdate', newValue);
}, { deep: true });
</script>

<template>
    <section class="grid grid-cols-2 w-full h-full gap-5">
        <InputDiv>
            <Label>First Name*</Label>
            <Input  v-model="formData.firstName"  placeholder="John"/>
            <FormError v-if="formErrors.firstName">{{ formErrors.firstName[0]}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Last Name*</Label>
            <Input v-model="formData.lastName" placeholder="Doe"/>
            <FormError v-if="formErrors.lastName">{{ formErrors.lastName[0]}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Middle Name</Label>
            <Input v-model="formData.middleName" placeholder="Doe"/>
            <FormError v-if="formErrors.middleName">{{ formErrors.middleName[0]}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Gender*</Label>
            <Select v-model="formData.gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <FormError v-if="formErrors.gender">{{ formErrors.gender[0]}}</FormError>
            </Select>
        </InputDiv>
        <InputDiv>
            <Label>Date of Birth*</Label>
            <Input v-model="formData.dateOfBirth" type="date"/>
            <FormError v-if="formErrors.dateOfBirth">{{ formErrors.dateOfBirth[0]}}</FormError>
        </InputDiv>
    </section>
</template>
