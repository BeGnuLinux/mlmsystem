<template>
  <v-layout row wrap>
    <v-flex xs12>
      <v-data-table
        dense
        :headers="headers"
        :items="users"
        :items-per-page="10"
        :mobile-breakpoint="600"
        class="elevation-1"
      ></v-data-table>
    </v-flex>
  </v-layout>
</template>
<script>
export default {
  name: 'AdminUsers',
  data: () => ({
    headers: [
      { text: 'User Name', value: 'username', filterable: true },
      { text: 'First Name', value: 'first_name' },
      { text: 'Last Name', value: 'last_name' }
    ]
  }),
  computed: {
    users () {
      return this.$store.getters['users/getUsersData']
    }
  }
}
</script>
