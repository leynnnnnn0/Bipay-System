<script setup>
import Input from "@/Components/Form/Input.vue";
import InputDiv from "@/Components/Form/InputDiv.vue";
import Label from "@/Components/Form/Label.vue";
import Select from "@/Components/Form/Select.vue";
import {reactive, watch} from "vue";
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
})
const emit = defineEmits(['formUpdated']);// Watch for changes in the form and emit the updated data
watch(props.formData, (newValue) => {
    emit('formUpdated', newValue);
}, { deep: true });

</script>

<template>
    <section class="grid grid-cols-2 w-full h-full gap-5">
        <InputDiv>
            <Label>Municipality*</Label>
            <Input v-model="formData.municipality" placeholder="General Trias"/>
            <FormError v-if="formErrors.municipality">{{ formErrors.municipality}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Barangay*</Label>
            <Input v-model="formData.barangay" placeholder="Bacao"/>
            <FormError v-if="formErrors.barangay">{{ formErrors.barangay}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>City/Province*</Label>
            <Input v-model="formData.cityOrProvince" placeholder="Cavite"/>
            <FormError v-if="formErrors.cityOrProvince">{{ formErrors.cityOrProvince}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Zipcode*</Label>
            <Input v-model="formData.zipCode" placeholder="4107"/>
            <FormError v-if="formErrors.zipCode">{{ formErrors.zipCode}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Address*</Label>
            <textarea v-model="formData.address" class="resize-none rounded-lg border border-black/30 px-3">

            </textarea>
            <FormError v-if="formErrors.address">{{ formErrors.address}}</FormError>
        </InputDiv>
    </section>
</template>
