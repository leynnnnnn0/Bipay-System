<script setup>

import MainLayout from "@/Layouts/MainLayout.vue";
import PrimaryLinkButton from "@/Components/PrimaryLinkButton.vue";
import {usePage} from "@inertiajs/vue3";
import TD from "@/Components/Table/TD.vue";
import TH from "@/Components/Table/TH.vue";

const props = usePage().props;
const employees = props.employees.data;

</script>

<template>
    <MainLayout>
        <section class="space-y-5">
            <div class="flex gap-4">
                <h1 class="text-gray-900 text-xl font-bold">Employee List</h1>
                <PrimaryLinkButton to="employees.create">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                    </svg>
                    New Employee
                </PrimaryLinkButton>
            </div>
            <table class="table-auto w-full bg-white rounded-lg overflow-hidden">
                <thead class="bg-white text-gray-500 text-sm border-b border-gray-200">
                <tr>
                    <TH>Employee Name</TH>
                    <TH>Position</TH>
                    <TH>Team</TH>
                    <TH>Hire Date</TH>
                    <TH>Actions</TH>
                </tr>
                </thead>
                <tbody class="font-bold divide-y">
                <tr v-for="employee in employees" :key="employee.id">
                    <TD class="p-3">
                        <div class="flex flex-col">
                            <strong v-text="employee.fullName"></strong>
                            <span class="text-gray-500 text-xs">ID: {{ employee.id }}</span>
                        </div>
                    </TD>
                    <TD class="p-3">
                        <strong class="text-sm">Senior Developer</strong>
                    </TD>
                    <td class="p-3">
                        <strong class="text-sm">Team Allan</strong>
                    </td>
                    <TD class="p-3">
                        <strong class="text-sm" v-text="employee.created_at"></strong>
                    </TD>
                    <TD class="p-3">
                        <div class="flex items-center justify-between">
                            <button class="flex gap-2 w-full text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                                <strong class="text-sm">View</strong>
                            </button>
                            <button class="flex gap-2 w-full text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                                <strong class="text-sm">Edit</strong>
                            </button>
                        </div>
                    </TD>
                </tr>
                </tbody>
            </table>
        </section>
    </MainLayout>
</template>
