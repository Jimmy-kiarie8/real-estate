<template>
     <v-row justify="center">
    <v-dialog persistent v-model="dialog" width="800">

      <v-divider></v-divider>
      <v-card>
        <v-card-title class="text-h5 text-center">
          Edit {{title}}
        </v-card-title>
      <v-divider></v-divider>
      <br />
        <v-card-text>
            <v-row>
                <myForm :form_data="form_data" />
            </v-row>

        </v-card-text>
        <v-card-actions>
        <v-btn variant="outlined" color="error" @click="close">
            Close
        </v-btn>
        <v-spacer></v-spacer>
        <v-btn variant="outlined" color="info" @click="submit" :loading="loading">
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
        title: String
    },
    components: {
        myForm,
    },
    data () {
    return {
        loading: false,
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
