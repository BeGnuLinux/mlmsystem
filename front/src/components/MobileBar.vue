<template>
  <v-app-bar
    dark
    class="purple darken-3"
    bottom
  >
    <v-tabs
      background-color="purple darken-3"
      dark
      absolute
      show-arrows
      grow
    >
      <v-tab :to="{ name: 'home' }">
        {{$t('nav.home')}}
      </v-tab>
      <v-tab :to="{ name: 'about' }">
        {{$t('nav.about')}}
      </v-tab>
      <v-tab :to="{ name: 'admin' }">
        {{$t('nav.admin_panel')}}
      </v-tab>
      <v-tab>
        <LanguageSwitcher />
      </v-tab>
    </v-tabs>
  </v-app-bar>
</template>

<script>
import LanguageSwitcher from './LanguageSwitcher'
export default {
  name: 'MobileBar',
  components: { LanguageSwitcher }
}
</script>

<style lang="css" scoped>
</style>
