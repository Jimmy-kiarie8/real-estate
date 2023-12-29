<template>
     <v-row justify="center">
    <v-dialog persistent v-model="dialog" width="800">

      <v-divider></v-divider>
      <v-card>
        <v-card-title class="text-h5">
          Edit Contact
        </v-card-title>
        <v-card-text>
            <v-row>
                <v-col cols="12" md="6">
                    <div>
                        <v-text-field clearable label="Name" variant="outlined" v-model="form.name"></v-text-field>
                    </div>
                </v-col>
                <v-col cols="12" md="6">
                    <div>
                        <v-text-field clearable label="Email" variant="outlined" v-model="form.email"></v-text-field>
                    </div>
                </v-col>
                <v-col cols="12" md="6">
                    <div>
                        <v-text-field clearable label="Phone" variant="outlined" v-model="form.phone"></v-text-field>
                    </div>
                </v-col>
                <v-col cols="12" md="6">
                    <div>
                        <v-text-field clearable label="Address" variant="outlined" v-model="form.address"></v-text-field>
                    </div>
                </v-col>
            </v-row>

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
                this.$inertia.patch(`/clients/${this.form.id}`, this.form, {
                    onError: () => {},
                    onSuccess: () => {
                        console.log('success');
                    }
                })
        },
        close() {
            this.dialog=false
        },

        show(data) {
            this.form = data;
            this.dialog = true
        },
        hide(){
            this.dialog = false
        },
    },
}
</script>
