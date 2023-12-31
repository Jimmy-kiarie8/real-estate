<template>
    <MainLayout title="Order Management">

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <v-data-table :headers="headers" :items="data.data" :sort-by="[{ key: 'name', order: 'asc' }]"
                class="elevation-2" :search="search">
                <template v-slot:top>
                    <v-toolbar flat>
                        <v-toolbar-title>{{ title }} Management</v-toolbar-title>
                        <v-divider class="mx-4" inset vertical></v-divider>
                        <v-spacer></v-spacer>
                        <myCreate :form_data="form_data" :title="title" :modelRoute="modelRoute" />
                    </v-toolbar>
                    <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line
                        hide-details></v-text-field>
                </template>
                <template v-slot:item.actions="{ item }">
                    <v-icon size="small" class="me-2" @click="openEdit(item)">
                        mdi-pencil
                    </v-icon>
                    <v-icon size="small" @click="deleteItem(item)">
                        mdi-delete
                    </v-icon>
                </template>

                <template v-slot:item.is_controlled="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.active="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.online_channel="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.prescription_only="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.manage_inventory="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.is_flagable="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.in_stock="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
            </v-data-table>
        </div>
        <myEdit :form_data="form_data" :title="title" ref="clientModal" />
    </MainLayout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue'; import {
    VDataTable,
} from "vuetify/labs/VDataTable";

import myCreate from './create.vue'
import myEdit from './edit.vue'
export default {
    props: {
        data: Object,
        form_data: Object,
        headers: Object,
        modelRoute: String,
        title: String
    },
    components: {
        MainLayout, VDataTable, myCreate, myEdit
    },
    data() {
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
        pageCount() {
            return Math.ceil(this.data.data.length / this.itemsPerPage)
        },
    },
}
</script>
