import getters from './getters'
import actions from './actions'
import mutations from './mutations'

const state = () => ({
  usersData: null,
  error: null,
  loadingMessage: null
})

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
