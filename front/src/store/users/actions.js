import axios from 'axios'

export default {
  usersData: (context) => {
    context.commit('setLoadingMessage', 'Connecting to end point')
    axios.get('users/all')
      .then(response => {
        context.commit('setLoadingMessage', 'Getting data')
        context.commit('setUsersData', response.data.users)
      })
      .catch(error => {
        context.commit('setLoadingMessage', 'Error connectin to end point')
        context.commit('setError', error)
      })
  }
}
