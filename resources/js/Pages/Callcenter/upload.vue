<template>
    <v-row justify="center">
   <v-dialog persistent v-model="dialog" width="800">
     <v-divider></v-divider>
     <v-card>
       <v-card-title class="text-h5">
         Upload Leads
       </v-card-title>
       <v-card-text>
            <v-file-input clearable label="File input" variant="outlined" @change="onFileChange"></v-file-input>
        </v-card-text>
       <v-card-actions>
       <v-btn variant="outlined" color="error" @click="close">
           Close
       </v-btn>
       <v-spacer></v-spacer>
       <v-btn variant="outlined" color="primary" @click="submit">
           Upload
       </v-btn>
       </v-card-actions>
   </v-card>
   </v-dialog>
        <v-snackbar v-model="snackbar">
            {{ text }}
        </v-snackbar>
 </v-row>
</template>
<script>
export default {
   props: {
       form_data: Object,
   },
   components: {
   },
   data () {
   return {
       dialog: false,
       form: {},
        snackbar: false,
        text: 'Updated',
   }
   },
   mounted () {
   },
   methods: {
        onFileChange(event) {
            this.snackbar = true
            this.text = 'Uploading...'
        // Access the selected file from the event
        const file = event.target.files[0];
        this.uploadFile(file);
        },
        async uploadFile(file) {
        try {
            const formData = new FormData();
            formData.append("file", file);

            // Your API endpoint for file upload
            const response = await axios.post("/upload", formData);

            this.snackbar = true
            this.text = 'Uploaded...'
            this.dialog = false
            // Handle the response as needed
            console.log("Upload successful", response.data);
        } catch (error) {
            console.error("Error uploading file", error);
        }
        },
       submit() {
           console.log(this.form_data);
               this.$inertia.post('/upload', this.form_data, {
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
        }
   },
}
</script>
