<template>
     <v-row justify="center">
    <v-dialog persistent v-model="dialog" width="800">
      <!-- <template v-slot:activator="{ props }">
        <v-btn variant="outlined" color="info" v-bind="props">
            <v-icon>mdi-plus-circle</v-icon>
            Create {{ title }}
        </v-btn>
      </template> -->
      <v-card>
        <v-card-title class="text-h5">
          Create A {{ title }}
        </v-card-title>
        <v-card-text>
            <!-- <myForm :form_data="form_data" /> -->
            <v-select clearable chips label="Invoice Type" :items="types" variant="outlined"  v-model="form.type" @update:modelValue="onProjectChange"></v-select>

            <v-select clearable chips label="Clients" :items="clients.data" item-title="name" item-value="id" variant="outlined"  v-model="form.client_id"></v-select>
            <v-select clearable chips label="Sale Officer" :items="sale_officers" variant="outlined"  v-model="form.sale_office_id"></v-select>
            <v-select clearable chips label="Sales" :items="sales" variant="outlined"  v-model="form.sale_office_id"></v-select>

            <v-text-field clearable label="Amount Payable" variant="outlined" v-model="form.amount_payable"></v-text-field>
            <v-text-field clearable label="Amount Paid" variant="outlined" v-model="form.amount_paid"></v-text-field>
        </v-card-text>
        <v-card-actions>
        <v-btn variant="outlined" color="error" @click="close">
            Close
        </v-btn>
        <v-spacer></v-spacer>
        <v-btn variant="outlined" color="info" @click="submit">
            <v-icon>mdi-plus-circle</v-icon>
            Submit
        </v-btn>
        </v-card-actions>
    </v-card>
    </v-dialog>
  </v-row>
</template>
<script>
import myForm from '@/Components/FormComponent.vue';
export default {
    props: {
        form_data: Object,
        modelRoute: String,
        clients: Object,
        title: String
    },
    components: {
        myForm,
    },
    data () {
    return {
        dialog: false,
        form: {},
        sales: [],
        sale_officers: [],
        types: ['Interest', 'Plot']
    }
    },
    mounted () {
    console.log(this.form_data);
    },
    methods: {
        submit() {
            console.log(this.form_data);
                this.$inertia.post(`/${this.modelRoute}`, this.form_data, {
                    onError: () => {},
                    onSuccess: () => {
                        console.log('success');
                    }
                })
        },
        getSales() {
            this.$inertia.get(`/sales`, {
                onError: () => {},
                onSuccess: () => {
                    console.log('success');
                }
            })
        },
        getSaleOfficer() {
            this.$inertia.get(`/saleofficers`, {
                onError: () => {},
                onSuccess: () => {
                    console.log('success');
                }
            })

        },
        close() {
            this.dialog=false
        },

        show() {
            this.dialog = true
        },
        onProjectChange() {

        }
    },
}
</script>
