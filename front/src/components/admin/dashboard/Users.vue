<template>
  <v-card :to="{ name: 'users' }">
    <v-icon x-large color="purple darken-3">fa fa-users</v-icon>
    <h1 class="display-2 mt-4 purple darken-3 white--text" v-if="users">{{ users.length }}</h1>
    <div v-else>
      <!-- <v-skeleton-loader
        class="mx-auto"
        max-width="300"
        type="card"
        transition="scale-transition"
      ></v-skeleton-loader> -->
      <div v-if="!error">
        <h1 class="caption font-italic font-weight-light">{{ loadingMessage }}</h1>
        <v-progress-circular
          indeterminate
          color="purple darken-3"
          class="mb-5 mt-2"
        ></v-progress-circular>
      </div>
      <div v-if="error">
        <h1 class="caption font-italic font-weight-light">{{ loadingMessage }}</h1>
        <v-progress-circular
          indeterminate
          color="red darken-3"
          class="mb-5 mt-2"
        ></v-progress-circular>
      </div>
    </div>
  </v-card>
</template>

<script>
export default {
  name: 'userDashboard',
  data: () => ({
    //
  }),
  computed: {
    users () {
      return this.$store.getters['users/getUsersData']
    },
    error () {
      return this.$store.getters['users/getError']
    },
    loadingMessage () {
      return this.$store.getters['users/getLoadingMessage']
    }
  },
  methods: {
    getUsers () {
      this.$store.dispatch('users/usersData')
      // this.loadingMessage = this.$t('users.connecting')
      // this.$axios.get('users/all')
      //   .then(response => {
      //     this.loadingMessage = this.$t('users.get_data')
      //     // eslint-disable-next-line no-console
      //     this.users = response.data.users
      //   })
      //   .catch(error => {
      //     this.loadingMessage = this.$t('users.connecting_error')
      //     this.error = error
      //   })
    }
  },
  mounted () {
    this.getUsers()
  }
}
</script>
