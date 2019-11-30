export default {
  setUsersData: (state, payload) => {
    state.usersData = payload
  },
  setError: (state, payload) => {
    state.error = payload
  },
  setLoadingMessage: (state, payload) => {
    state.loadingMessage = payload
  }
}
