<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    to: {
        type: String,
        default: '#'
    },
    location: {
        type: String,
        required: true
    },
    active: {
        type: Boolean,
        default: false,
    }
})
</script>

<template>
    <Link href="#" class="flex items-center gap-3 h-16 px-5 hover:bg-gray-100 transition-colors duration-300 lg:justify-start justify-center" :class="{'bg-gray-300' : active}">
        <span><slot></slot></span>
        <span class="font-bold text-lg lg:block hidden">{{ location }}</span>
    </Link>
</template>
