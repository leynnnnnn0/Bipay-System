<script setup>
import Input from "@/Components/Form/Input.vue";
import InputDiv from "@/Components/Form/InputDiv.vue";
import Label from "@/Components/Form/Label.vue";
import Select from "@/Components/Form/Select.vue";
import {reactive, watch} from "vue";

const form = reactive({
    address: '',
    zipCode: '',
    country: '',
    municipality: '',
    barangay: '',
    provinceOrState: '',
});

const emit = defineEmits(['formUpdated']);// Watch for changes in the form and emit the updated data
watch(form, (newValue) => {
    emit('formUpdated', newValue);
}, { deep: true });

</script>

<template>
    <div class="flex flex-col items-center justify-center p-5 gap-10 w-full">
        <section class="grid grid-cols-2 w-full h-full gap-10">
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
                <textarea class="resize-none rounded-lg border border-black/30 p-3"></textarea>
            </InputDiv>
        </section>
    </div>
</template>
