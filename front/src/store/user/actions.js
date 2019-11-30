import axios from 'axios'
import router from '../../router'
// import i18n from '../../i18n'

export default {
  loginUser: (context, payload) => {
    context.commit('setLoading', true)
    axios.post('auth/login', payload)
      .then(response => {
        context.commit('setLoginUser', response.data)
        context.commit('setLoading', false)
      })
      .then(() => {
        router.push({ name: 'admin' })
      })
  },
  logoutUser: (context) => {
    context.commit('setLogout')
    localStorage.removeItem('user-token')
    localStorage.removeItem('vuex')
  }
}
