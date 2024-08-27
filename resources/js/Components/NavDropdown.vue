<script setup>
import {ref} from "vue";
import NavDropdownButton from "@/Components/NavDropdownButton.vue";
import { onClickOutside } from '@vueuse/core'

const target = ref(null)
const showTagOptions = ref(false);
onClickOutside(target, event => showTagOptions.value = false)


</script>

<template>
    <div class="relative" ref="target">
        <div class="flex items-center justify-between border border-border-color w-44 py-1 px-2 rounded-lg">
            <div class="flex flex-col text-xs">
               Not Ready
                <span>00:00:00</span>
            </div>
            <button @click="showTagOptions = !showTagOptions">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                </svg>
            </button>
        </div>
        <div v-if="showTagOptions" class="divide-y overflow-hidden flex absolute flex-col items-start rounded-lg right-0 w-44 bg-white mt-2 drop-shadow-2xl ease-in-out transition-all duration-300">
            <NavDropdownButton>Ready</NavDropdownButton>
            <NavDropdownButton>Lunch</NavDropdownButton>
            <NavDropdownButton>Break</NavDropdownButton>
            <NavDropdownButton>Personal Time</NavDropdownButton>
            <NavDropdownButton>Meeting</NavDropdownButton>
        </div>
    </div>
</template>
