<script setup>
import mainLogo from '../../images/mainLogo.png'
import NavDropdown from "@/Components/NavDropdown.vue";

</script>

<template>
    <nav class="flex items-center justify-between border-b border-border-color h-[60px]">
        <div class="flex gap-2 items-center">
            <div class="lg:justify-start flex items-center justify-center px-5 lg:w-64 w-32">
                <img :src="mainLogo" class="lg:size-24 sm:size-16 size-16" alt="logo">
            </div>
            <NavDropdown/>
        </div>
    </nav>
</template>

