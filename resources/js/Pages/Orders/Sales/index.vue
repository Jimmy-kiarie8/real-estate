<template>
    <MainLayout title="Sale Management">

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

                    <v-tooltip v-model="show" location="bottom">
                        <template v-slot:activator="{ props }">
                            <v-btn icon v-bind="props">
                                <v-icon color="info-lighten-1">
                                    mdi-book
                                </v-icon>
                            </v-btn>
                        </template>
                        <span>Update payment</span>
                    </v-tooltip>
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
        <clientEdit ref="clientModal" />
        <myPayment :form_data="payment_data" :title="title" :modelRoute="payment_route" />
    </MainLayout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue'; import {
    VDataTable,
} from "vuetify/labs/VDataTable";

import myCreate from './create.vue'
import clientEdit from './edit.vue'
import myPayment from '../Payments/create.vue'
export default {
    props: {
        data: Object,
        form_data: Object,
        headers: Object,
        modelRoute: String,
        title: String,
        payment_data: Object,
        payment_route: String,
    },
    components: {
        MainLayout, VDataTable, myCreate, clientEdit, myPayment
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
