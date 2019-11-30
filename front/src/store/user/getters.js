export default {
  getUserData: (state) => {
    return state.userData
  },
  getToken: (state) => {
    return state.token
  },
  getUserIsAuth: (state) => {
    return state.userIsAuth
  },
  getLoading: (state) => {
    return state.loading
  }
}
