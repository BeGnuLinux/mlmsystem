<template>
  <v-menu
    v-model="showMenu"
    absolute
    offset-y
    style="max-width: 600px"
    right
  >
    <template v-slot:activator="{ on }">
      <v-card
        class="portrait"
        height="25"
        width="35"
        color="rgba(0, 0, 0, 0.0)"
        flat
        v-on="on"
      >
        <img :src="`/img/flag_${$i18n.locale}.svg`" height="25" width="35" />
      </v-card>
    </template>

    <v-list>
      <v-list-item
        v-for="(item, index) in items"
        :key="index"
        @click="setLocale(item.locale)"
      >
        <div>

          <v-list-item-title><img :src="item.image" width="35" height="25"/> {{ item.title }}</v-list-item-title>
        </div>
      </v-list-item>
    </v-list>
  </v-menu>
</template>
<script>

export default {
  name: 'language-switcher',
  data: () => ({
    showMenu: false,
    items: [
      { title: 'العربية', locale: 'ar', image: '/img/flag_ar.svg' },
      { title: 'English', locale: 'en', image: '/img/flag_en.svg' },
      { title: 'Española', locale: 'es', image: '/img/flag_es.svg' }
    ]
  }),
  methods: {
    setLocale (locale) {
      if (this.$i18n.locale === locale) {
        return
      }
      this.$i18n.locale = locale
      if (locale === 'ar') {
        this.$vuetify.rtl = true
      } else {
        this.$vuetify.rtl = false
      }
      this.$router.push({
        params: { lang: locale }
      })
    }
  },
  computed: {
    //
  },
  created () {
    if (this.$i18n.locale === 'ar') {
      this.$vuetify.rtl = true
    }
  }
}
</script>
