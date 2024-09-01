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
const emit = defineEmits(['formUpdate']);// Watch for changes in the form and emit the updated data
watch(props.formData, (newValue) => {
    emit('formUpdate', newValue);
}, { deep: true });

</script>

<template>
    <section class="grid grid-cols-2 w-full h-full gap-5">
        <InputDiv>
            <Label>Phone Number*</Label>
            <Input v-model="formData.phoneNumber" placeholder="0925248864"/>
            <FormError v-if="formErrors.phoneNumber">{{ formErrors.phoneNumber[0]}}</FormError>
        </InputDiv>
        <InputDiv>
            <Label>Email*</Label>
            <Input v-model="formData.email" placeholder="john@gmail.com"/>
            <FormError v-if="formErrors.email">{{ formErrors.email[0]}}</FormError>
        </InputDiv>
    </section>
</template>
