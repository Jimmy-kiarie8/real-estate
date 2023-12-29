<script setup>
    import { Head, Link, useForm } from '@inertiajs/vue3';
    import AuthenticationCard from '@/Components/AuthenticationCard.vue';
    import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
    import Checkbox from '@/Components/Checkbox.vue';
    import InputError from '@/Components/InputError.vue';
    import InputLabel from '@/Components/InputLabel.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import TextInput from '@/Components/TextInput.vue';

    defineProps({
        canResetPassword: Boolean,
        status: String,
    });

    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = () => {
        form.transform(data => ({
            ...data,
            remember: form.remember ? 'on' : '',
        })).post(route('login'), {
            onFinish: () => form.reset('password'),
        });
    };
    </script>

<template>
    <form @submit.prevent="submit">
        <div>
            <v-card title=""  max-width="500" style="margin: auto;    margin-top: 200px;">
            <v-card-title primary-title>
                <img src="https://logixsaas.com/wp-content/uploads/2023/08/Logixsaas-Consultancy-Limited-Logo_Approved-02-1.png" />
            </v-card-title>
                <v-card-text>
                    <v-text-field v-model="form.email" variant="outlined" autocomplete="username" label="Email"></v-text-field>

                    <v-text-field v-model="form.password" variant="outlined" type="password" autocomplete="password" label="Password" required></v-text-field>

                </v-card-text>
                <v-card-actions>
                    <v-btn color="info" class="mt-4" block @click="submit">
                        Login
                    </v-btn>
                </v-card-actions>
            </v-card>
        </div>
    </form>
</template>
