<template>
  <v-app-bar
    app
    dark
    class="purple darken-3"
  >
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
    >{{ $t('nav.home') }}
    </v-btn>
    <v-btn
      text
      :to="{ name: 'about', params: { lang: this.$i18n.locale} }"
    >{{ $t('nav.about') }}
    </v-btn>
    <v-btn
      text
      :to="{ name: 'admin', params: { lang: this.$i18n.locale} }"
    >{{ $t('nav.admin_panel') }}
    </v-btn>
    <div class="mx-5">
      <language-switcher />
    </div>
  </v-app-bar>
</template>
<script>
import LanguageSwitcher from './LanguageSwitcher'
export default {
  name: 'Appbar',
  components: { LanguageSwitcher }
}
</script>
<style lang="scss" scoped>
</style>
