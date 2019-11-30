<template>
  <v-form @submit.prevent="submitLogin">
    <v-text-field
      name="username"
      :label="$t('login.username')"
      v-model="form.username"
      single-line
      autofocus
      color="purple darken-3 purple--text"
    ></v-text-field>
    <v-text-field
      name="password"
      :label="$t('login.password')"
      v-model="form.password"
      single-line
      type="password"
      color="purple darken-3 purple--text"
    ></v-text-field>
    <v-btn color="purple darken-3" :loading='loading' text type="submit">{{ $t('login.login_btn') }}</v-btn>
    <v-snackbar
      v-if="error"
      v-model="snackbar"
      :timeout="timeout"
      multi-line
    >
      <p class="subtitle-2 purple--text text--lighten-3">{{ $t('login.error1') }}.</p>
      <p class="subtitle-2 purple--text text--lighten-3">{{ $t('login.error2') }}.</p>
    </v-snackbar>
  </v-form>
</template>
<script>
export default {
  name: 'login_form',
  data () {
    return {
      form: {
        username: '',
        password: ''
      },
      error: null,
      snackbar: false,
      timeout: 4000
    }
  },
  methods: {
    submitLogin () {
      this.$store.commit('user/setLoading', true)
      this.$axios.post('auth/login', { username: this.form.username, password: this.form.password })
        .then(response => {
          localStorage.setItem('user-token', response.data.token)
          this.$store.commit('user/setLoginUser', response.data)
          this.$store.commit('user/setLoading', false)
        })
        .then(() => {
          this.$router.push({ name: 'admin' })
        })
        .catch(error => {
          // eslint-disable-next-line no-console
          console.log(error)
          this.error = error
          this.snackbar = true
          this.$store.commit('user/setLoading', false)
        })
    }
  },
  computed: {
    loading () {
      return this.$store.getters['user/getLoading']
    }
  },
  created () {
  }
}
</script>
