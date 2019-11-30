import getters from './getters'
import actions from './actions'
import mutations from './mutations'

const state = () => ({
  token: '',
  userData: null,
  userIsAuth: false,
  loading: false
})

export default {
  namespaced: true,
  state,
  getters,
  actions,
  mutations
}
