export default {
  setLoading: (state, payload) => {
    state.loading = payload
  },
  setLoginUser: (state, payload) => {
    state.token = payload.token
    state.userData = payload.user
    state.userIsAuth = true
  },
  setLogout: (state) => {
    state.token = null
    state.userData = null
    state.userIsAuth = false
  }
}
