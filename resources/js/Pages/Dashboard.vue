<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Menubar from "primevue/menubar";
import DataTable from "primevue/datatable";
import Column from "primevue/column";
import ColumnGroup from "primevue/columngroup"; // optional
import Card from "primevue/card";
import Button from "primevue/button";
import Panel from "primevue/panel";
import Sidebar from "primevue/sidebar";
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <!-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2> -->

            <Button label="Create New Posting" severity="success" />'
            <DataTable :value="products" tableStyle="min-width: 50rem">
                <Column field="id" header="id"></Column>
                <Column field="title" header="title"></Column>
                <Column field="created_at" header="Created_at"></Column>
                <Column field="updated_at" header="Updated_at"></Column>
                <Column field="action" header="action">
                    <template #body="rowData">
                        <Button
                            icon="pi pi-pencil"
                            class="p-button-rounded p-button-success"
                            @click="editProduct(rowData)"
                        ></Button>
                        <Button
                            icon="pi pi-trash"
                            class="p-button-rounded p-button-danger"
                            @click="deleteProduct(rowData)"
                        ></Button> </template
                ></Column>
            </DataTable>
        </template>

        <!-- <div class="py-12">
              
        </div> -->
    </AuthenticatedLayout>
</template>
<script>
export default {
    props: {
        model: {
            type: Array,
            default: [],
        },
    },
    mounted() {
        this.products = this.model;
    },
    data() {
        return {
            products: [],
        };
    },
};
</script>
