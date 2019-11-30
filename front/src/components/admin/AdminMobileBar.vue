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
        {{$t('nav.web_site')}}
      </v-tab>
      <v-tab>
        <LanguageSwitcher />
      </v-tab>
    </v-tabs>
  </v-app-bar>
</template>

<script>
import LanguageSwitcher from '../LanguageSwitcher'
export default {
  name: 'AdminMobileBar',
  components: { LanguageSwitcher }
}
</script>
<style lang="css" scoped>
</style>
