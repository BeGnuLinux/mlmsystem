export default {
  getUsersData: (state) => {
    return state.usersData
  },
  getError: (state) => {
    return state.error
  },
  getLoadingMessage: (state) => {
    return state.loadingMessage
  }
}
