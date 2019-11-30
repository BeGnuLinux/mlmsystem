<template>
  <div>
    <v-app-bar
      app
      dark
      class="purple darken-3"
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
      <div class="d-flex align-center">
          <h1 class="display-1 logo">
            <span class="font-weight-bold">MLM</span>
            <span class="font-weight-light">System</span>
          </h1>
      </div>

      <v-spacer></v-spacer>
      <v-btn
        text
        :to="{ name: 'home', params: { lang: this.$i18n.locale} }"
        exact
      >{{ $t('nav.web_site') }}
      </v-btn>
      <div class="mx-5">
        <language-switcher />
      </div>
      <div>
        <LoggedUserInfoCard />
      </div>
    </v-app-bar>
    <v-navigation-drawer
      app
      class="purple darken-3 white--text text--lighten-3"
      v-model="drawer"
      :right='right_drawer'
    >
      <v-list class="white--text text--lighten-3">
        <v-list-item @click="test">
          <v-list-item-avatar>
            <v-img src="/img/avatars/default.jpeg" name="avatar"/>
          </v-list-item-avatar>
          <v-list-item-content class="white--text text--lighten-3 text-uppercase text-center">
            <v-list-item-title class="font-weight-black">{{ user.first_name }} {{ user.last_name}}</v-list-item-title>
            <v-list-item-subtitle class='white--text text--lighten-3 overline'>{{ user.role }}</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-divider></v-divider>
        <v-list>
          <v-list-item @click="test">
            <v-list-item-icon>
              <v-icon class="white--text text--lighten-3">fa fa-users</v-icon>
            </v-list-item-icon>
            <v-list-item-content class="white--text text--lighten-3">
              <v-list-item-title>
                Users
              </v-list-item-title>
            </v-list-item-content>
          </v-list-item>
        </v-list>
      </v-list>
    </v-navigation-drawer>
  </div>
</template>
<script>
import LanguageSwitcher from '../LanguageSwitcher'
import LoggedUserInfoCard from './LoggedUserInfoCard'
export default {
  name: 'AdminAppbar',
  components: { LanguageSwitcher, LoggedUserInfoCard },
  data: () => ({
    drawer: false
  }),
  computed: {
    right_drawer () {
      return this.$i18n.locale === 'ar'
    },
    user () {
      return this.$store.getters['user/getUserData']
    }
  },
  methods: {
    test () {
      return true
    }
  }
}
</script>
