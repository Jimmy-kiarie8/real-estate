<template>
    <MainLayout title="Tickets">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <v-data-table :headers="headers" :items="tickets.data" :sort-by="[{ key: 'name', order: 'asc' }]" class="elevation-2" :search="search">
                <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Tickets Management</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <Link href="/tickets/create">
                        <v-btn prepend-icon="mdi-plus-circle" variant="tonal" color="info" >Create Order</v-btn>
                    </Link>
                    <!-- <myCreate :form_data="form_data" /> -->
                </v-toolbar>
                    <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
                </template>
                <template v-slot:item.actions="{ item }">
                <v-icon size="small" class="me-2" @click="openEdit(item)">
                    mdi-pencil
                </v-icon>
                <v-icon size="small" @click="deleteItem(item)">
                    mdi-delete
                </v-icon>
                </template>

                <template v-slot:item.message="{ value }">
                    <p id="tooltip">
                    {{ value }}
                    <v-tooltip activator="parent" location="top">{{ value }}</v-tooltip>
                    </p>
                </template>
                <template v-slot:item.status="{ value }">
                    <v-icon color="success" size="x-small" v-if="value == 'Closed'">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
            </v-data-table>
        </div>
        <clientEdit ref="clientModal" />
    </MainLayout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue';import {
  VDataTable,
} from "vuetify/labs/VDataTable";

import { Link } from '@inertiajs/vue3';
// import myCreate from './create.vue'
import clientEdit from './edit.vue'
export default {
        props: {
            tickets: Object,
            form_data: Object,
            headers: Object,
        },
    components: {
        MainLayout,VDataTable,clientEdit, Link
    },
    data () {
      return {
        search: '',
        page: 1,
        itemsPerPage: 5,
      }
    },
    methods: {
        openEdit(data) {
            this.$refs.clientModal.show(data)
            // this.$emit('CallEvent', data)
        },
    },

    computed: {
      pageCount () {
        return Math.ceil(this.tickets.data.length / this.itemsPerPage)
      },
    },
  }
</script>

<style scoped>
#tooltip {
    font-style: inherit;
    font-weight: inherit;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 180px;
    overflow: hidden;
    display: block;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}
</style>
