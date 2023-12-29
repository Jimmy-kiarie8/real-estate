<template>
    <v-card >
      <v-row no-gutters>
        <v-col cols="12" sm="4">
            <v-card class="mx-auto">
                <v-list density="compact">
                <v-list-subheader>REPORTS</v-list-subheader>

                <v-list-item color="error">
                    <template v-slot:prepend>
                        <v-icon>mdi-phone-missed</v-icon>
                    </template>
                    <v-list-item-title>Missedcalls</v-list-item-title>
                    <template v-slot:append>
                        <v-chip>{{ analytics['Total Missed Calls'] }}</v-chip>
                    </template>
                </v-list-item>
                <v-list-item color="error">
                    <template v-slot:prepend>
                        <v-icon>mdi-face-agent</v-icon>
                    </template>
                    <v-list-item-title>Call an agent</v-list-item-title>
                    <template v-slot:append>
                        <v-chip>{{ analytics['Total Completed'] }}</v-chip>
                    </template>
                </v-list-item>
                </v-list>
            </v-card>
        </v-col>
        <v-col cols="12" sm="4" offset-sm="4">
            <v-card class="mx-auto">
                <v-list density="compact">
                <v-list-subheader>REPORTS</v-list-subheader>

                <v-list-item color="error">
                    <template v-slot:prepend>
                        <v-icon>mdi-phone</v-icon>
                    </template>
                    <v-list-item-title>Leads Contacted</v-list-item-title>
                    <template v-slot:append>
                        <v-chip>{{ analytics['Total Leads Contacted'] }}</v-chip>
                    </template>
                </v-list-item>
                <v-list-item color="error">
                    <template v-slot:prepend>
                        <v-icon>mdi-phone-check</v-icon>
                    </template>
                    <v-list-item-title>Leads Converted</v-list-item-title>
                    <template v-slot:append>
                        <v-chip>{{ analytics['Total Leads Converted'] }}</v-chip>
                    </template>
                </v-list-item>
                <v-list-item color="error">
                    <template v-slot:prepend>
                        <v-icon>mdi-currency-usd</v-icon>
                    </template>
                    <v-list-item-title>Amount Spent</v-list-item-title>
                    <template v-slot:append>
                        <v-chip>{{ analytics['Total Amount Spent'] }}</v-chip>
                    </template>
                </v-list-item>
                </v-list>
            </v-card>
        </v-col>
      </v-row>
    </v-card>
</template>


<script>
  export default {
    props: {
            analytics: Object
        },
    data: () => ({

    }),
  }
</script>
