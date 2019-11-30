import Vue from 'vue'
import Vuex from 'vuex'
import user from './user'
import users from './users'
import VuexPersistence from 'vuex-persist'

Vue.use(Vuex)

const vuexLocal = new VuexPersistence({
  storage: window.localStorage
})

export default new Vuex.Store({
  state: {
  },
  mutations: {
  },
  actions: {
  },
  modules: {
    user,
    users
  },
  plugins: [vuexLocal.plugin]
})
