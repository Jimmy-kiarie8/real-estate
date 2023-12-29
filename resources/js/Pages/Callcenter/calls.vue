<template>
    <v-row justify="center">
      <v-dialog v-model="dialog" persistent width="600">

        <v-card>
          <v-card-title class="text-h5">
            <v-toolbar density="compact">

                <v-btn icon>
                    <v-icon>mdi-check</v-icon>
                </v-btn>
                <v-toolbar-title>{{ client.phone }}</v-toolbar-title>

                <v-spacer></v-spacer>

                <v-btn icon @click="openEdit">
                    <v-icon>mdi-pen</v-icon>
                </v-btn>

                <v-btn icon @click="dialog = false">
                    <v-icon>mdi-close</v-icon>
                </v-btn>
            </v-toolbar>
          </v-card-title>
          <v-card-text>
                <v-list density="compact">
                    <v-list-subheader>REPORTS</v-list-subheader>

                    <v-list-item color="primary">
                        <template v-slot:prepend>
                        <v-icon>mdi-account-box</v-icon>
                        </template>

                        <v-list-item-title>{{ client.name }}</v-list-item-title>
                    </v-list-item>
                    <v-list-item color="primary">
                        <template v-slot:prepend>
                        <v-icon>mdi-email</v-icon>
                        </template>

                        <v-list-item-title>{{ client.email }}</v-list-item-title>
                    </v-list-item>
                    <v-list-item color="primary">
                        <template v-slot:prepend>
                        <v-icon>mdi-calendar-range</v-icon>
                        </template>

                        <v-list-item-title>{{ client.created_at }}</v-list-item-title>
                    </v-list-item>

                </v-list>
            </v-card-text>

            <v-divider></v-divider>
          <v-card-actions>
            <v-btn color="red-darken-1" variant="text" @click="hangup" v-if="call_inprogress">
              <v-icon>mdi-phone-hangup</v-icon> Hangup
            </v-btn>
            <v-btn color="warning" variant="text" @click="hold" v-if="call_inprogress">
              <v-icon>mdi-phone-paused</v-icon> Hold
            </v-btn>
            <v-btn color="warning" variant="text" @click="unhold" v-if="call_inprogress">
              <v-icon>mdi-phone-sync</v-icon> Resume
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn color="info" variant="text" @click="transfer" v-if="call_inprogress">
              <v-icon>mdi-phone-forward</v-icon> Transfer
            </v-btn>
            <v-btn color="green-darken-1" variant="text" @click="makeCall" v-if="!call_inprogress">
              <v-icon>mdi-phone-in-talk</v-icon> Call
            </v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>


    <audio id="audio-player">
        <source src="/audio/ring.mp3" type="audio/mpeg">
    </audio>


    <audio id="audio-dialing">
        <source src="/audio/outgoing.mp3" type="audio/mpeg">
    </audio>

    <clientEdit ref="clientModal" />


    <v-snackbar v-model="snackbar">
            {{ text }}
        </v-snackbar>
    </v-row>
</template>

<script>
import Africastalking from 'africastalking-client'
import clientEdit from '../UserManagement/Clients/edit.vue'
const params = {
    sounds: {
        // dialing: "/audio/outgoing.mp3",
        // ringing: "/audio/ring.mp3",
    },
};
  export default {
    components: {
        clientEdit,
    },
    data: () => ({
    text: 'Updated',
    snackbar: false,
      dialog: false,
      group: null,
      call_inprogress: false,
      client: {},
      token: 'ATCAPtkn_be042b9275efb35c92aa999f014d9911c3383a68ea488276936a4a00da601528'
    }),

    watch: {
      group () {
        this.dialog = false
      },
    },
    methods: {
        openEdit() {
            this.$refs.clientModal.show(this.client)
            // this.$emit('CallEvent', data)
        },
    show(data) {
      this.client = data.client
      this.dialog = true
     },
     hide(){
      this.dialog = false
     },

        transfer() {},
        toggleAudio(data) {
            var audio = document.getElementById("audio-player");
            if (data) {
                audio.play();
            } else {
                audio.pause();
            }
        },
        toggleDialer(data) {
            var audio = document.getElementById("audio-dialing");
            if (data) {
                audio.play();
            } else {
                audio.pause();
            }
        },

        incomingCall(data) {
            this.toggleAudio(true)
            // console.log(data);
            eventBus.$emit('incomingEvent', data);
        },
        getLeads() {
            var payload = {
                'update': 'updateLeads',
                'model': 'leads'
            }
            this.$store.dispatch("getItems", payload);
        },
        makeCall() {
            this.call_inprogress = true;
            this.toggleDialer(true)
            const client = new Africastalking.Client(
                this.token,
                params
            );
            // let phone_no = '254743895505'
            client.call(this.client.phone);
        },
        answer() {
            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.answer();
        },
        hangup() {
            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.hangup();
        },
        muteAudio() {

            // console.log('mute')
            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.muteAudio();
        },
        unmuteAudio() {

            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.unmuteAudio();
        },
        hold() {
            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.hold();
        },
        unhold() {

            const client = new Africastalking.Client(
                this.token,
                params
            );

            client.unhold();
        },

        getStats() {
            var payload = {
                model: 'agent_data',
                update: 'updateAgentData',
            }
            this.$store.dispatch('getItems', payload)
        },

    },
    created() {
        const client = new Africastalking.Client(
            this.token,
            params
        );

        client.on('incomingcall', params => {
            // this.ring()
            this.snackbar = true;
            this.text = 'Incomming call ...';
            this.call_inprogress = true

            // console.log(params);
            // var id = this.user.id
            var form = {
                call_status: true
            }
            axios.post('agent_active/' + id, form)
            // alert(`Jimmy is calling you`)
            this.incomingCall(params)
        }, false);
        client.on('ready', params => {
            // console.log(params);
            console.log(`User is ready`)
        }, false);

        client.on('notready', () => {
            // console.log(params);
            console.log(`User is not ready`)
        }, false);

        client.on('closed', params => {
            console.log(params);
            console.log(`Connection closed`)
            // window.location.reload();
        }, false);

        client.on('callaccepted', params => {
            this.snackbar = true;
            this.text = 'Call received ...';
            this.call_inprogress = true
            // this.muteAudio()
            this.toggleAudio(false)
            this.toggleDialer(false)
            // this.mutePage()
            eventBus.$emit('alertRequest', 'Call received')
        }, false);

        client.on('hangup', hangupCause => {
            console.log("🚀 ~ file: calls.vue:270 ~ created ~ hangupCause:", hangupCause)
            this.snackbar = true;
            this.text = 'Hanged up: ' + hangupCause.reason;
            this.call_inprogress = false
            // this.muteAudio()
            this.toggleDialer(false)
            this.toggleAudio(false)
            // var id = this.user.id
            var form = {
                call_status: false
            }
            // alert(`Call hung up`)
        }, false);

        client.on('calling', (params) => {
            this.snackbar = true;
            this.text = 'Calling ...';
            this.call_inprogress = true
            // console.log(params);
            // alert(`Not ready to accepted`)
            // var id = this.user.id
            // var form = {
            //     call_status: false
            // }
        }, false);

        // eventBus.$on('leadsEvent', () => {
        //     this.getLeads()
        // });

        // eventBus.$on('answerEvent', () => {
        //     // this.muteAudio()
        //     this.answer()
        // });
        // eventBus.$on('hangupEvent', () => {
        //     // this.muteAudio()
        //     this.hangup()
        // });

        // eventBus.$on('makeCallEvent', data => {
        //     // console.log(data);
        //     this.makeCall(data)

        // });


        // eventBus.$on('saleCallEvent', data => {
        //     // console.log(data);
        //     var item = {
        //         // call: 'new',
        //         phone: data.phone,
        //     }
        //     this.makeCall(data)
        //     // this.makeCall(data.phone)

        // });

        // eventBus.$on('holdEvent', () => {
        //     this.hold()
        // });
        // eventBus.$on('unholdEvent', () => {
        //     this.unhold()
        // });
        // eventBus.$on('breakEvent', () => {
        //     this.getOnline()
        // });
    },
  }
</script>
