<template>
    <v-app>
        <v-container>
            <v-row style="height: 98vh">
                <v-col cols="12" sm="3" class="border">
                    <v-toolbar :elevation="24">
                        <v-btn tile color="white" variant="outlined">
                            <v-icon left color="white">mdi-plus-box-multiple </v-icon>
                            <v-divider class="mx-3" vertical></v-divider>
                            New Chat
                        </v-btn>
                    </v-toolbar>

                    <v-toolbar :elevation="24" style="margin-top: 20px">
                        <v-toolbar-title class="title"> Chat </v-toolbar-title>

                        <v-spacer></v-spacer>

                        <v-btn icon>
                            <v-icon>mdi-dots-vertical</v-icon>
                        </v-btn>
                    </v-toolbar>
                    <v-toolbar :elevation="24">
                        <v-text-field v-model="search" :loading="loading" variant="solo" label="Start Typing..."
                            append-inner-icon="mdi-magnify" single-line hide-details
                            @click:append-inner="searchContact"></v-text-field>
                    </v-toolbar>
                    <v-list lines="two">
                        <template v-for="(item, index) in clients" :key="index">
                            <v-list-item :title="item.name" :value="index" :subtitle="item.phone" rounded="shaped"
                                color="info"
                                :prepend-avatar="'https://cdn.vuetifyjs.com/images/lists/' + (index + 1) + '.jpg'"
                                @click="selectChat(item)"></v-list-item>
                            <v-divider v-if="index < clients.length - 1" :key="index"></v-divider>
                        </template>
                    </v-list>
                </v-col>
                <v-col cols="12" :sm="(chatActive) ? 6 : 9" class="border">
                    <template v-if="chatActive">

                        <v-toolbar color="#0764af4a" style="padding:20px 0 0 10px;border-radius: 10px 0 0 10px;">
                            <v-badge bordered bottom color="green" dot offset-x="11" offset-y="13">
                                <v-avatar class="mt-n7" size="40" elevation="10">
                                    <img src="https://cdn.vuetifyjs.com/images/lists/1.jpg" />
                                </v-avatar>
                            </v-badge>
                            <v-toolbar-title class="title pl-0 ml-2 mt-n4">
                                Fernando Gaucho
                            </v-toolbar-title>
                            <v-spacer></v-spacer>
                            <v-divider vertical inset class="mt-n1"></v-divider>
                            <v-btn color="white" icon class="mt-n5">
                                <v-icon>mdi-cog</v-icon>
                            </v-btn>
                            <v-divider vertical inset class="mt-n1"></v-divider>
                            <v-btn color="white" icon class="mt-n5" @click="closeChat">
                                <v-icon>mdi-close-circle-multiple</v-icon>
                            </v-btn>
                            <v-divider vertical inset class="mt-n1"></v-divider>
                            <v-btn color="white" icon class="mt-n5">
                                <v-icon>mdi-dots-vertical</v-icon>
                            </v-btn>
                        </v-toolbar>


                        <v-virtual-scroll height="80vh" :items="messages" style="overflow-x: hidden;"
                            v-if="messages.length > 0">
                            <template v-slot:default="{ item }">

                                <br />
                                <template v-if="item.role == 'Customer'">
                                    <v-row justify="start">
                                        <v-col cols="1">
                                            <v-badge bordered bottom color="green" dot offset-x="10" offset-y="10">
                                                <v-avatar class="mt-n5" size="30" elevation="10">
                                                    <img src="https://cdn.vuetifyjs.com/images/lists/5.jpg"
                                                        alt="Customer Avatar" />
                                                </v-avatar>
                                            </v-badge>
                                        </v-col>
                                        <v-col cols="7">
                                            <v-card class="message-card agent" subtitle="Customer"
                                                style="margin-left: -40px;">
                                                {{ item.message }}

                                                <v-card-actions>
                                                    <v-chip>{{ item.timestamp }}</v-chip>
                                                    <v-spacer></v-spacer>
                                                    <v-chip v-if="item.seen_at" color="info" prepend-icon="mdi-check-all">{{
                                                        item.seen_at }}</v-chip>
                                                </v-card-actions>
                                            </v-card>
                                        </v-col>
                                    </v-row>
                                </template>
                                <template v-else>
                                    <v-row justify="end">
                                        <v-col cols="7">
                                            <v-card class="message-card customer" subtitle="Agent"
                                                style="margin-left: 90px;">
                                                {{ item.message }}
                                            </v-card>
                                        </v-col>
                                        <v-col cols="1">
                                            <v-badge bordered bottom color="green" dot offset-x="10" offset-y="10">
                                                <v-avatar class="mt-n5" size="30" elevation="10">
                                                    <img src="https://cdn.vuetifyjs.com/images/lists/5.jpg"
                                                        alt="Agent Avatar" />
                                                </v-avatar>
                                            </v-badge>
                                        </v-col>
                                    </v-row>
                                </template>


                            </template>
                        </v-virtual-scroll>

                        <template v-else>
                            <v-card style="background-color: #1f2125;">
                                <v-img src="/images/chat.png" cover class="text-white">
                                    <v-toolbar color="rgba(0, 0, 0, 0)" theme="dark" extended>

                                        <v-toolbar-title class="text-h6">
                                            Messages
                                        </v-toolbar-title>

                                        <template v-slot:append>
                                            <v-btn icon="mdi-cog"></v-btn>
                                        </template>
                                    </v-toolbar>
                                </v-img>
                                <br>
                                <v-divider></v-divider>
                                <br>

                                <v-card-text class="text-center" style="padding: 0 100px">
                                    <h2>Welcome to Logixsaas!</h2>
                                    <p>Select a chat on the left or manage your conversations from various platforms like
                                        Instagram, phone calls, emails, Facebook, and WhatsApp. Stay connected and keep the
                                        conversation going!</p>
                                </v-card-text>
                                <br>
                                <br>

                            </v-card>

                        </template>

                        <v-toolbar color="rgba(0,0,0,0)">
                            <v-text-field v-model="message" :loading="loading" density="compact" variant="solo"
                                label="Start Typing..." :append-inner-icon="message ? 'mdi-send' : 'mdi-microphone'"
                                single-line hide-details @click:append-inner="sendMessage"></v-text-field>
                        </v-toolbar>
                    </template>


                    <template v-else>
                        <v-card style="background-color: #1f2125;">
                            <v-img src="/images/chat.png" cover class="text-white">
                                <v-toolbar color="rgba(0, 0, 0, 0)" theme="dark" extended>

                                    <v-toolbar-title class="text-h6">
                                        Messages
                                    </v-toolbar-title>

                                    <template v-slot:append>
                                        <v-btn icon="mdi-cog"></v-btn>
                                    </template>
                                </v-toolbar>
                            </v-img>
                            <br>
                            <v-divider></v-divider>
                            <br>

                            <v-card-text class="text-center" style="padding: 0 100px">
                                <h2>Welcome to Logixsaas!</h2>
                                <p>Select a chat on the left or manage your conversations from various platforms like
                                    Instagram, phone calls, emails, Facebook, and WhatsApp. Stay connected and keep the
                                    conversation going!</p>
                            </v-card-text>
                            <br>
                            <br>

                        </v-card>

                    </template>
                </v-col>
                <v-col cols="12" sm="3" v-if="chatActive">

                    <v-card class="mx-auto">
                        <br />
                        <v-img style="border-radius: 20%;width: 50%;margin-left: 25%;"
                            src="https://scontent.fmba3-1.fna.fbcdn.net/v/t39.30808-6/339671970_160193443640605_1333941973198197035_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeGQDu532b1joz34JY0Cs5GSKU5A7oe922opTkDuh73bal3nnA_z45sSUv6fcOQuaQGR0q2d0dSkljxykXupN88e&_nc_ohc=Eew2GRLkOA8AX_PHxP7&_nc_ht=scontent.fmba3-1.fna&oh=00_AfDlWmRYHxNv7PUO-bmHvgxX8GqicOWvx1nNUFvNjNIeFg&oe=658D7A77"
                            height="200px" cover></v-img>
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
import axios from 'axios';
export default {
    props: {
        clients: Object
    },
    data: () => ({
        selected: [2],
        chatActive: false,
        files: [
            { text: "Landing_page.zip", icon: " mdi-cloud-upload" },
            { text: "Requirements.pdf", icon: " mdi-cloud-upload" },
            { text: "Uwagi.docx", icon: " mdi-cloud-upload" },
        ],
        panel: [2],

        password: "Password",
        show: false,
        message: "",
        search: "",
        marker: true,
        loading: false,
        iconIndex: 0,
        messages: []

    }),

    methods: {
        sendMessage() {
            console.log(1);
            this.loading = true;
            setTimeout(() => {
                this.loading = false;
            }, 3000);
            this.resetIcon();
            this.clearMessage();
        },
        clearMessage() {
            this.message = "";
        },
        resetIcon() {
            this.iconIndex = 0;
        },
        selectChat(item) {
            console.log(item)
            this.chatActive = true

            axios.get(`/messages/${item.id}`).then((res) => {
                console.log(res);
                this.messages = res.data.messages

            }).catch((error) => {
                console.log(error);
            })
        },
        closeChat() {
            this.chatActive = false
        },
        searchContact() {
            this.chatActive = false
        }
    },
};
</script>
<style scoped>
.border {
    border-right: 1px solid grey;
}

.message-card {
    border-radius: 10px 10px 0 10px;
    overflow: hidden;
    padding: 0 10px;
    margin-bottom: 10px;
    max-width: 80%;
    word-wrap: break-word;
}

.agent {
    color: white;
}

.customer {
    background-color: #2196F3;
    /* Blue for customer messages */
    color: white;
}
</style>
