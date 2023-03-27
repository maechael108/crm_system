<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Menubar from 'primevue/menubar';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import ColumnGroup from 'primevue/columngroup';   // optional
</script>

<template>
    
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header> 
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
         </template>
       
        <div class="py-12">
            <div>
                <DataTable :value="products" tableStyle="min-width: 50rem">
                  <Column field="code" header="Code"></Column>
                  <Column field="name" header="Name"></Column>
                  <Column field="category" header="Category"></Column>
                  <Column field="quantity" header="Quantity"></Column>
                </DataTable>
    
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
  data() {
    return {
      products: [
        { code: "001", name: "Product A", category: "Category A", quantity: 10 },
        { code: "002", name: "Product B", category: "Category B", quantity: 20 },
        { code: "003", name: "Product C", category: "Category C", quantity: 30 },
      ],
    };
  },

  methods: {
    addRow() {
      const newRow = {
        code: "004",
        name: "Product D",
        category: "Category D",
        quantity: 40,
      };

      this.products.push(newRow);
    },
  },
};
</script>
