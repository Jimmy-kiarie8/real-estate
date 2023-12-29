<script setup>
import { VDatePicker } from 'vuetify/labs/VDatePicker'
import { ref } from 'vue';

defineProps({
    form_data: Object,
});

const dialog = ref(false);

</script>

<template>
    <v-row>
  <template v-for="item in form_data">
    <v-col cols="12" md="6" v-if="item.display">
      <div>
        <v-text-field clearable :label="item.label" variant="outlined" v-model="item.value" v-if="item.type == 'text'" type="text"></v-text-field>
        <v-text-field clearable :label="item.label" variant="outlined" v-model="item.value" v-if="item.type == 'number'" type="number"></v-text-field>
        <v-text-field clearable :label="item.label" variant="outlined" v-model="item.value" v-if="item.type == 'date'" type="date"></v-text-field>
        <v-textarea clearable :label="item.label" variant="outlined" v-model="item.value" v-if="item.type == 'long_text'"></v-textarea>
        <v-radio-group v-model="item.value" inline v-if="item.type == 'radio'" color="success">
          <template v-slot:label>
            <div>{{ item.label }}</div>
          </template>
          <v-radio v-for="(option, index) in item.items" :key="index" :label="option" :value="option"></v-radio>
        </v-radio-group>

        <v-select clearable chips :label="item.label" v-if="item.type == 'select'" :items="item.items" variant="outlined" item-title="label" item-value="value" v-model="item.value" :multiple="item.multiple" :return-object="item.multiple"></v-select>

      </div>
    </v-col>
  </template>
</v-row>

</template>

