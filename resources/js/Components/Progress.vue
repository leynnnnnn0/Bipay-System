<script setup>
defineProps({
    done: {
        type: Boolean,
        default: false
    },
    active: {
        type: Boolean,
        default: false
    },
    step: {
        type: String,
        required: true
    },
    stepCount: {
        type: String,
        required: true
    }
})
</script>

<template>
    <div class="flex items-center gap-4">
        <div class="flex items-center justify-center border-2 border-gray-400 bg-gray-300 size-8 rounded-full" :class="{'bg-blue-600 border-none' : done, 'border-blue-600 bg-transparent': active}">
            <strong :class="{'text-white' : done}">{{ stepCount }}</strong>
        </div>
        <strong class="text-gray-500" :class="{'text-blue-600' : active || done}">{{  step }}</strong>
    </div>
</template>
