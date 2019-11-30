<template>
  <v-menu
      v-model="menu"
      min-width="250px"
      offset-y
      right
    >
      <template v-slot:activator="{ on }">
        <v-btn
          class="wihte"
          dark
          text
          v-on="on"
        >
          <v-icon>fa fa-user</v-icon>
        </v-btn>
      </template>

      <v-card>
        <v-list v-if="user">
          <v-list-item>
            <v-list-item-content>
              <v-list-item-title>{{ user.username }}</v-list-item-title>
              <v-list-item-subtitle>{{ user.role }}</v-list-item-subtitle>
            </v-list-item-content>
          </v-list-item>
        </v-list>

        <v-divider></v-divider>

        <v-list>
          <v-list-item>
            <v-list-item-action>
            </v-list-item-action>
            <v-list-item-title>{{ $t('login.user_card.profile') }}</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-action>
            </v-list-item-action>
            <v-list-item-title>{{ $t('login.user_card.account') }}</v-list-item-title>
          </v-list-item>
        </v-list>

        <v-card-actions>
          <v-spacer></v-spacer>

          <v-btn color="danger" @click='logout'>{{ $t('login.logout_btn') }}</v-btn>
        </v-card-actions>
      </v-card>
    </v-menu>
</template>

<script>
export default {
  name: 'LoggedUserInfoCard',
  data: () => ({
    menu: false
  }),
  computed: {
    user () {
      return this.$store.getters['user/getUserData']
    }
  },
  methods: {
    logout () {
      this.$router.push({ name: 'login' })
      this.$store.dispatch('user/logoutUser')
    }
  }
}
</script>
