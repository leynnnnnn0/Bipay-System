<script setup>
import {Link} from "@inertiajs/vue3";
defineProps({
    to: {
        type: String,
        required : true
    }
})
</script>

<template>
    <Link :href="route(to)" class="flex items-center gap-1 hover:bg-opacity-50 transition-colors duration-300
                bg-blue-500 px-3 py-1 rounded-lg text-white text-xs">
        <slot></slot></Link>
</template>

