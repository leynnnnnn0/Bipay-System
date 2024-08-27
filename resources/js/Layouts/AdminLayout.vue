<script setup>
import Navigation from "@/Components/Navigation.vue";
import Sidebar from "@/Components/Sidebar.vue";
</script>

<template>
    <div class="flex flex-col min-h-screen bg-primary">
        <Navigation/>
        <div class="flex-1 flex">
            <Sidebar/>
            <div class="flex-1 bg-secondary p-3">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

