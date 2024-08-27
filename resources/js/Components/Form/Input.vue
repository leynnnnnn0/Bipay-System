<script setup>
defineProps({
    id: {
        type: String,
        default: '',
    },
    type: {
        type: String,
        default: 'text'
    },
    placeholder: {
        type: String,
        default: ''
    },
    modelValue: {
        type: [String, Number],
        default: ''
    }
})

const emit = defineEmits(['update:modelValue'])
const updateValue = (event) => {
    emit('update:modelValue', event.target.value)
}
</script>

<template>
    <input class="rounded-lg border border-black/30 px-3"
           :id="id"
           :name="id"
           :type="type"
           :value="modelValue"
           @input="updateValue"
           :placeholder="placeholder">
</template>
