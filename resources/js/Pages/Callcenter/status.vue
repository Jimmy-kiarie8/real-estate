<template>
     <v-row justify="center">
    <v-dialog persistent v-model="dialog" width="800">
      <v-divider></v-divider>
      <v-card>
        <v-card-title class="text-h5">
          Status
        </v-card-title>
        <v-card-text>
            <v-row>
                <v-col cols="12" md="12">
                    <v-select clearable chips label="Status" :items="statuses" variant="outlined" item-title="label" item-value="value" v-model="form.status"></v-select>
                </v-col>
                <v-col cols="12" md="12">
                    <v-text-field clearable label="Recall Date" variant="outlined" v-model="form.recall_date" type="date"></v-text-field>
                </v-col>
                <v-col cols="12" md="12">
                    <v-textarea clearable label="Notes" variant="outlined" v-model="form.notes"></v-textarea>
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
        <v-snackbar v-model="snackbar">
            {{ text }}
        </v-snackbar>
    </v-dialog>
  </v-row>
</template>
<script>
import axios from 'axios';

export default {
    props: {
    },
    components: {
    },
    data () {
    return {
        statuses: [
            'Pending',
            'Recall',
            'Converted',
            'Rejected',
        ],
        dialog: false,
        snackbar: false,
        text: 'Updated',
        form: {}
    }
    },
    mounted () {
    },
    methods: {
        submit() {
            axios.post(`/lead-status/${id}`, this.form).then((res) => {
                this.snackbar = true
            })
        },
        close() {
            this.dialog=false
        },
        show(data) {
            this.form = data;
            this.dialog = true
        }
    },
}
</script>
