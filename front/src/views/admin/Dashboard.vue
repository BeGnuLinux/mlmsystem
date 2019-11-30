<template>
  <div class="admin_dashboard">
    <v-layout row wrap class="pa-5">
      <v-flex xs12 md3 class="text-center">
        <UsersDashboard />
      </v-flex>
      <v-flex xs12 md3>

      </v-flex>
      <v-flex xs12 md3>

      </v-flex>
      <v-flex xs12 md3>

      </v-flex>
    </v-layout>
    <p></p>
  </div>
</template>

<script>
import UsersDashboard from '../../components/admin/dashboard/Users.vue'

export default {
  name: 'AdminDashbord',
  components: { UsersDashboard },
  data () {
    return {
      message: 'Admin Dashboard!!!!!'
    }
  }
}
</script>
