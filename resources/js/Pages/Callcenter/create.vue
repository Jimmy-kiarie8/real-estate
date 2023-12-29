<template>
     <v-row justify="center">
    <v-dialog persistent v-model="dialog" width="800">
      <template v-slot:activator="{ props }">
        <v-btn color="info" v-bind="props">
          Create Lead
        </v-btn>
      </template>
      <v-divider></v-divider>
      <v-card>
        <v-card-title class="text-h5">
          Create A Lead
        </v-card-title>
        <v-card-text>
            <myForm :form_data="form_data" />
        </v-card-text>
        <v-card-actions>
        <v-btn variant="outlined" color="error" @click="close">
            Close
        </v-btn>
        <v-spacer></v-spacer>
        <v-btn variant="outlined" color="primary" @click="submit">
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
    },
    components: {
        myForm,
    },
    data () {
    return {
        dialog: false,
        form: {}
    }
    },
    mounted () {
    },
    methods: {
        submit() {
            console.log(this.form_data);
                this.$inertia.post('/clients', this.form_data, {
                    onError: () => {},
                    onSuccess: () => {
                        console.log('success');
                    }
                })
        },
        close() {
            this.dialog=false
        }
    },
}
</script>
