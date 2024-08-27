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
    },
    hasDropDown: {
        type: Boolean,
        default: false
    },
})
</script>

<template>
    <div  class="flex items-center gap-3 h-16 px-5 hover:bg-gray-100 transition-colors duration-300" :class="{'bg-gray-300' : active}">
        <Link :href="to" class="w-full flex items-center gap-3 lg:justify-start justify-center">
            <span><slot></slot></span>
            <span class="font-bold text-lg lg:block hidden">{{ location }}</span>
        </Link>
        <button v-if="hasDropDown" @click="$emit('dropdownClicked')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
</template>
