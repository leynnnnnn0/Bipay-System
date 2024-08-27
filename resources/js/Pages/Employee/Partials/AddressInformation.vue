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
})

const {municipality, barangay, provinceOrState, zipCode, address} = props.initialFormData;

const form = reactive({
    address: address,
    zipCode: zipCode,
    country: municipality,
    municipality: municipality,
    barangay: barangay,
    provinceOrState: provinceOrState,
});

const emit = defineEmits(['formUpdated']);// Watch for changes in the form and emit the updated data
watch(form, (newValue) => {
    emit('formUpdated', newValue);
}, { deep: true });

</script>

<template>
    <section class="grid grid-cols-2 w-full h-full gap-5">
        <InputDiv>
            <Label>Municipality*</Label>
            <Input v-model="form.municipality" placeholder="General Trias"/>
        </InputDiv>
        <InputDiv>
            <Label>Barangay*</Label>
            <Input v-model="form.barangay" placeholder="Bacao"/>
        </InputDiv>
        <InputDiv>
            <Label>Province/State*</Label>
            <Input v-model="form.provinceOrState" placeholder="Cavite"/>
        </InputDiv>
        <InputDiv>
            <Label>Zipcode*</Label>
            <Input v-model="form.zipCode" placeholder="4107"/>
        </InputDiv>
        <InputDiv>
            <Label>Address*</Label>
            <textarea v-model="form.address" class="resize-none rounded-lg border border-black/30 px-3">

            </textarea>
        </InputDiv>
    </section>
</template>
