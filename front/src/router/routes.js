import i18n from '../i18n'
import Home from '../views/Home.vue'

const routes = [
  {
    path: '/',
    redirect: `/${i18n.locale}`
  },
  {
    path: '/:lang',
    component: {
      render (c) { return c('router-view') }
    },
    children: [
      {
        path: '/',
        component: () => import('../layouts/Layout.vue'),
        children: [
          {
            path: '',
            name: 'home',
            component: Home
          },
          {
            path: 'about',
            name: 'about',
            component: () => import('../views/About.vue')
          }
        ]
      },
      {
        path: 'login',
        name: 'login',
        component: () => import('../views/Login.vue')
      },
      {
        path: 'admin',
        component: () => import('../layouts/AdminLayout.vue'),
        meta: { requiresAuth: true },
        children: [
          {
            path: '',
            name: 'admin',
            component: () => import('../views/admin/Dashboard.vue')
          },
          {
            path: 'users',
            name: 'users',
            component: () => import('../views/admin/Users.vue')
          }
        ]
      }
    ]
  }
]

export default routes
