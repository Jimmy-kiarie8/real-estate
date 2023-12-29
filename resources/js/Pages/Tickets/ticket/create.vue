<template>
    <v-app>
        <v-toolbar density="compact">
            <v-app-bar-nav-icon></v-app-bar-nav-icon>

            <v-toolbar-title>Logixsaas</v-toolbar-title>

            <v-spacer></v-spacer>

            <v-btn icon>
                <v-icon>mdi-magnify</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-account-circle</v-icon>
            </v-btn>

            <v-btn icon>
                <v-icon>mdi-dots-vertical</v-icon>
            </v-btn>
        </v-toolbar> <v-container>
            <v-row>
                <v-col cols="12" md="8">
                    <v-card>
                        <v-card-title>Ticket Information</v-card-title>
                        <v-card-text>
                            <v-autocomplete :items="items" v-model="form.client" append-inner-icon="mdi-magnify"
                                auto-select-first class="flex-full-width" density="comfortable" item-props menu-icon=""
                                placeholder="Search name, email or phone" prepend-inner-icon="mdi-account-circle" chips
                                @update:search="searchItems" variant="outlined" return-object item-title="name"
                                item-value="id">
                                <template v-slot:item="{ props, item }">
                                    <v-list-item @click="addClient(item.raw)" v-bind="props" :title="item?.raw?.name"
                                        :subtitle="item?.raw?.code"></v-list-item>
                                </template>
                            </v-autocomplete>
                            <myForm :form_data="form_data" />
                        </v-card-text>

                        <v-card-actions>

                            <v-btn prepend-icon="mdi-cancel" variant="tonal" color="error">
                                Cancel
                            </v-btn>
                            <v-spacer></v-spacer>
                            <v-btn prepend-icon="mdi-check-circle" variant="tonal" color="info" :loading="loading" @click="submit">
                                Submit
                            </v-btn>
                        </v-card-actions>
                    </v-card>
                </v-col>
                <v-col cols="12" md="4">

                    <v-card class="mx-auto">
                        <br />
                        <v-img style="border-radius: 10px;width: 50%;margin-left: 25%;"
                            src="https://scontent.fmba3-1.fna.fbcdn.net/v/t39.30808-6/339671970_160193443640605_1333941973198197035_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeGQDu532b1joz34JY0Cs5GSKU5A7oe922opTkDuh73bal3nnA_z45sSUv6fcOQuaQGR0q2d0dSkljxykXupN88e&_nc_ohc=Eew2GRLkOA8AX_PHxP7&_nc_ht=scontent.fmba3-1.fna&oh=00_AfDlWmRYHxNv7PUO-bmHvgxX8GqicOWvx1nNUFvNjNIeFg&oe=658D7A77"
                            height="300px" cover></v-img>
                        <v-card-title class="text-center"> Jimmy K.</v-card-title>
                        <v-card-subtitle class="text-center">
                            CEO & Founder Logixsaas
                        </v-card-subtitle>
                        <br />
                        <v-divider></v-divider>
                        <v-card-text>
                            <v-card class="mx-auto" max-width="300">
                                <v-list density="compact" v-model="selected">
                                    <v-list-subheader>Information</v-list-subheader>

                                    <v-list-item color="info" :value="1" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-send"></v-icon>
                                        </template>

                                        <v-list-item-title>Subscribed</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item color="info" :value="2" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-clock"></v-icon>
                                        </template>

                                        <v-list-item-title>Contact Time</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item color="info" :value="3" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-account-card"></v-icon>
                                        </template>

                                        <v-list-item-title>1508415359</v-list-item-title>
                                    </v-list-item>
                                    <v-list-item color="info" :value="4" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-instagram"></v-icon>
                                        </template>

                                        <v-list-item-title>Opted-In for
                                            Instagram</v-list-item-title>
                                    </v-list-item>

                                    <v-list-item color="info" :value="5" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-account-circle"></v-icon>
                                        </template>

                                        <v-list-item-title>jimmy_kiarie8</v-list-item-title>
                                    </v-list-item>
                                    <v-divider></v-divider>

                                    <v-list-item color="info" :value="6" rounded="shaped">
                                        <template v-slot:prepend>
                                            <v-icon icon="mdi-tag"></v-icon>
                                        </template>
                                        <v-list-item-title>Contact Tags</v-list-item-title>
                                        <v-chip>IG</v-chip>
                                        <v-chip>Phone</v-chip>
                                        <v-chip>Email</v-chip>
                                    </v-list-item>
                                </v-list>
                            </v-card>
                        </v-card-text>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </v-app>
</template>

<script>
import myForm from '@/Components/FormComponent.vue';
// import debounce from 'lodash/debounce';
import axios from 'axios';

export default {
    props: {
        form_data: Object,
    },
    components: {
        myForm,
    },
    data() {
        return {
            selectedItem: null,
            items: [],
            search: '',
            loading: false,
            selected: 0,
            form: {
                client: null
            }
        };
    },
    watch: {
        // search: 'debouncedSearch',
    },
    created() {
        // this.debouncedSearch = debounce(this.searchItems, 500);
    },
    methods: {
        addClient(client) {
            // Assuming form_data is an array of objects and each object has a model key
            const mappings = {
                contactName: client.name,
                email: client.email,
                phone: client.phone,
                client_id: client.id
                // Add other mappings here if needed
            };

            // Loop through the form_data array
            this.form_data.forEach(field => {
                // If the field's model key is in the mappings object, update its value
                if (mappings[field.model]) {
                    field.value = mappings[field.model];
                }
            });
        },
        // ... your other methods ...

        submit() {
            // this.loading = true;
            console.log(this.form_data);
            this.$inertia.post('/tickets', this.form_data, {
                onError: () => {
                this.loading = false;

                },
                onSuccess: () => {
                    console.log('success');
                this.loading = false;
                }
            })
        },
        async searchItems(search) {
            if (!search) {
                // this.items = [];
                return;
            }
            this.loading = true;
            try {
                // Replace '/search' with your actual API endpoint
                const response = await axios.get(`/client_search/${search}`);
                console.log(response);
                this.items = response.data; // Assume the response data is the items array
            } catch (error) {
                console.error('Error during the API call:', error);
                this.items = []; // Handle errors or set items to an empty array if the call fails
            } finally {
                this.loading = false;
            }
        },
    },
}
</script>
