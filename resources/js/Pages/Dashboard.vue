<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Menubar from 'primevue/menubar';
</script>


    

<template>
    
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header> 
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
         </template>
       
        <div class="py-12">
            <div>
              
            </div>
        </div>
    </AuthenticatedLayout>
</template>
