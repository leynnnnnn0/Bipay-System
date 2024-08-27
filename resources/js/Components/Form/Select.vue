<script setup>
defineProps({
    id: {
        type: String,
        default: ''
    },
    modelValue: {
        type: [Number, String],
        default: ''
    }
})

const emit = defineEmits(['update:modelValue']);
const updateValue = (e) => {
    emit('update:modelValue', e.target.value)
}
</script>

<template>
    <select @change="updateValue" class="rounded-lg border border-black/30" :name="id" :id="id" :value="modelValue">
        <option value="">Select</option>
        <slot></slot>
    </select>
</template>

