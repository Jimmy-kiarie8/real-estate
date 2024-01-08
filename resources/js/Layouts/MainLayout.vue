<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const drawer = ref(null)

defineProps({
    title: String
});

const links = [
    {
        text: 'Dashboard',
        link: '/analytics',
        icon: 'mdi-view-dashboard',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Clients',
        link: '/clients',
        icon: 'mdi-badge-account-alert-outline',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Projects',
        link: '/projects',
        icon: 'mdi-projector-screen',
        hasSub: false,
        subMenu: []
    },
    // {
    //     text: 'Category',
    //     link: '/category',
    //     icon: 'mdi-shape-plus',
    //     hasSub: false,
    //     subMenu: []
    // },
    {
        text: 'Plots',
        link: '/plot',
        icon: 'mdi-badge-account-alert-outline',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Sale Officers',
        link: '/saleofficers',
        icon: 'mdi-card-account-phone',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Charges',
        link: '/charge-type',
        icon: 'mdi-cash-100',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Invoices',
        link: '/invoices',
        icon: 'mdi-book',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Payments',
        link: '/payment',
        icon: 'mdi-cash-multiple',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Sales',
        link: '/sales',
        icon: 'mdi-cart',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Title Deeds',
        link: '/title-deed',
        icon: 'mdi-book-alphabet',
        hasSub: false,
        subMenu: []
    },
    {
        text: 'Reports',
        link: '#',
        icon: 'mdi-bag-checked',
        subMenu: [
            {
                text: 'Report',
                link: '/reports',
                icon: 'mdi-basket'
            }
        ],
        hasSub: true
    }
]
</script>

<template>
  <v-app id="inspire">
    <v-navigation-drawer v-model="drawer">
       <v-list>
          <v-list-item :prepend-avatar="$page.props.auth.user.profile_photo_url" :title="$page.props.auth.user.name" :subtitle="$page.props.auth.user.email"></v-list-item>
        </v-list>

        <v-divider></v-divider>
        <v-list nav color="red" v-for="(link, index) in links" :key="index">
            <Link :href="link.link"  v-if="!link.hasSub">
                <v-list-item :prepend-icon="link.icon" class="v-link" :value="link">
                    {{ link.text }}
                </v-list-item>
            </Link>



            <v-list-group :value="link.text" v-else>
                <template v-slot:activator="{ props }">
                    <v-list-item v-bind="props" prepend-icon="mdi-account-circle" :title="link.text"></v-list-item>
                </template>
                <Link :key="i" v-for="(item, i) in link.subMenu" :href="item.link">
                    <v-list-item :title="item.text" :prepend-icon="item.icon" :value="i"></v-list-item>
                </Link>
            </v-list-group>
        </v-list>


    </v-navigation-drawer>

    <v-app-bar>
      <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

      <v-app-bar-title>Logixsaas Call Center</v-app-bar-title>
    </v-app-bar>

    <v-main>
        <slot />
    </v-main>


  </v-app>
</template>


<style>
a {
  text-decoration: none; /* Add an underline to make it look like a link */
  cursor: pointer; /* Change the cursor to a pointer when hovering */
  color: #fff;
}.v-navigation-drawer__content{
    background: #049569 ;
}

.v-card {
    padding: 15px !important;
    border-radius: 20px 0 20px 20px !important;
}
</style>
