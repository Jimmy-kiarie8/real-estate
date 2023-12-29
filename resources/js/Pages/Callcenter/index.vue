<template>
    <MainLayout title="Lead Management">
    <myAnalytics :analytics="analytics" />
    <v-divider></v-divider>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <v-data-table :headers="headers" :items="leads.data" :sort-by="[{ key: 'id', order: 'desc' }]" class="elevation-2" :search="search">
                <template v-slot:top>
                <v-toolbar flat>
                    <v-toolbar-title>Leads Management</v-toolbar-title>
                    <v-divider class="mx-4" inset vertical></v-divider>
                    <v-spacer></v-spacer>
                    <myLead :form_data="form_data" />

                    <v-btn color="info" @click="upload">
                        <v-icon>mdi-file-excel</v-icon> Upload Leads
                    </v-btn>

                </v-toolbar>
                    <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" single-line hide-details></v-text-field>
                </template>
                <template v-slot:item.actions="{ item }">
                    <template v-if="item.status != 'Completed'">

                        <v-tooltip location="bottom">
                            <template v-slot:activator="{ props }">
                                <v-btn icon v-bind="props" @click="status(item)">
                                <v-icon color="info">
                                    mdi-pencil
                                </v-icon>
                                </v-btn>
                            </template>
                            <span>Update status</span>
                        </v-tooltip>

                        <v-tooltip location="bottom">
                            <template v-slot:activator="{ props }">
                                <v-btn icon v-bind="props" @click="deleteItem(item)">
                                <v-icon color="error">
                                    mdi-delete
                                </v-icon>
                                </v-btn>
                            </template>
                            <span>Delete</span>
                        </v-tooltip>

                        <v-tooltip location="bottom">
                            <template v-slot:activator="{ props }">
                                <v-btn icon v-bind="props" @click="resolve(item)">
                                    <v-icon color="success">
                                        mdi-check-circle
                                    </v-icon>
                                </v-btn>
                            </template>
                            <span>Mark as Completed</span>
                        </v-tooltip>
                    </template>
                </template>

                <template v-slot:item.phone="{ item }">
                    <v-btn prepend-icon="mdi-phone" @click="openCall(item)">
                        {{ item.phone }}
                    </v-btn>
                </template>

                <template v-slot:item.closed="{ value }">
                    <v-icon color="success" size="x-small" v-if="value">mdi-circle</v-icon>
                    <v-icon color="red" size="x-small" v-else>mdi-circle</v-icon>
                </template>
                <template v-slot:item.notes="{ value }">
                    <p id="tooltip">
                    {{ value }}
                    <v-tooltip activator="parent" location="top">{{ value }}</v-tooltip>
                    </p>
                </template>
                <template v-slot:item.client_address="{ value }">
                    <p id="tooltip">
                    {{ value }}
                    <v-tooltip activator="parent" location="top">{{ value }}</v-tooltip>
                    </p>
                </template>
            </v-data-table>
        </div>
        <myCall ref="modal" />
        <myUpload ref="uploadModal" />
        <myStatus ref="statusModal" />
        <v-snackbar v-model="snackbar">
            {{ text }}
        </v-snackbar>
    </MainLayout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout.vue';
import {
  VDataTable,
} from "vuetify/labs/VDataTable";
import { Link } from '@inertiajs/vue3';
import myCall from './calls.vue'
import myAnalytics from './analytics.vue'
import myClient from '../UserManagement/Clients/create.vue'
import myLead from './create.vue'
import myUpload from './upload.vue'
import myStatus from './status.vue'
import axios from 'axios';
export default {
        props: {
            leads: Object,
            form_data: Object,
            client_data: Object,
            headers: Object,
            analytics: Object
        },
    components: {
        MainLayout,VDataTable,Link, myCall, myAnalytics, myClient, myLead, myUpload, myStatus
    },
    data () {
      return {
        snackbar: false,
        text: 'Updated',
        search: '',
        drawer: true,
        page: 1,
        itemsPerPage: 5,
      }
    },
    methods: {
        openCall(data) {
            console.log("🚀 ~ file: index.vue:91 ~ openCall ~ data:", data)
            this.$refs.modal.show(data)
            // this.$emit('CallEvent', data)
        },
        upload(data) {
            this.$refs.uploadModal.show(data)
            // this.$emit('CallEvent', data)
        },
        status(data) {
            this.$refs.statusModal.show(data)
            // this.$emit('CallEvent', data)
        },
        editItem(data) {
            console.log("🚀 ~ file: index.vue:80 ~ editItem ~ data:", data)
        },
        deleteItem() {},
        resolve(item) {
            console.log("🚀 ~ file: index.vue:137 ~ resolve ~ item:", item)
            axios.post(`resolve/${item.id}`, {}).then((res) => {
                this.snackbar = true
                console.log("🚀 ~ file: index.vue:140 ~ axios.post ~ res:", res)
            });
        },
    },

    computed: {
      pageCount () {
        return Math.ceil(this.leads.data.length / this.itemsPerPage)
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
