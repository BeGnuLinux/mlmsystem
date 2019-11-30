<template>
  <v-layout row wrap align-center mt-5>
    <v-flex xs12>
      <v-card>
        <v-layout row wrap>
          <v-flex sm7 xs12 class="login_pic justify-center">
            <v-img src="@/assets/login_card_pic.png" height="420px" />
          </v-flex>
          <v-flex sm5 xs12 class="grey lighten-3 pa-5" >
            <v-layout row wrap justify-center>
              <v-flex xs12>
                <LanguageSwitcher />
              </v-flex>
              <v-flex xs12>
                <v-card pa-5 color="rgba(0, 0, 0, 0.0)" flat>
                  <h1>{{ $t('login.title') }}</h1>
                  <LoginForm />
                </v-card>
              </v-flex>
            </v-layout>
          </v-flex>
        </v-layout>
      </v-card>
    </v-flex>
  </v-layout>
</template>
<script>
// import Appbar from '../components/LoginAppbar'
import LanguageSwitcher from '../components/LanguageSwitcher'
import LoginForm from '../components/LoginForm'
import i18n from '../i18n'
export default {
  name: 'login',
  components: { LanguageSwitcher, LoginForm },
  data () {
    return {
      locale: i18n.locale
    }
  },
  computed: {
    userIsAuth () {
      return this.$store.getters['user/userIsAuth']
    }
  },
  methods: {
    //
  },
  created () {
    if (this.userIsAuth) {
      this.$router.push({ name: 'admin' })
    }
  }
}
</script>
<style lang="scss" scoped>
.login {
  background-image: url('../assets/login_bg.png');
  background-size: cover;
}
.login_pic {
  background-color: #7256ae;
}
.avatar {
  align-content: center;
}
</style>
