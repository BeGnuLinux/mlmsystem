import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes'
import i18n from '../i18n'
import axios from 'axios'
import store from '../store'

Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

router.beforeEach((to, from, next) => {
  let language = to.params.lang
  if (!language) {
    language = 'en'
  }
  i18n.locale = language

  if (to.matched.some(record => record.meta.requiresAuth)) {
    // eslint-disable-next-line no-console
    let token = store.getters['user/getToken']
    if (!token) {
      next({
        name: 'login',
        params: { lang: i18n.locale }
      })
    } else {
      axios.defaults.headers.common['Authorization'] = 'Bearer ' + token
      next()
    }
  } else {
    next() // make sure to always call next()!
  }
})

export default router
