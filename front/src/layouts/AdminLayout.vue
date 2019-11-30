<template>
  <v-app>
    <div class="hidden-xs-only">
      <AdminAppbar />
      <v-content class="grey lighten-4">
        <router-view />
      </v-content>
      <v-footer>
        <div class="hidden-sm-and-up">
          <AdminMobileBar />
        </div>
      </v-footer>
    </div>

    <div class="hidden-sm-and-up">
      <v-content class="grey lighten-4 pa-0">
        <router-view />
      </v-content>
      <v-footer absolute class="pa-0">
        <AdminMobileBar />
      </v-footer>
    </div>
  </v-app>
</template>
<script>
import AdminAppbar from '@/components/admin/AdminAppbar'
import AdminMobileBar from '@/components/admin/AdminMobileBar'

export default {
  name: 'Layout',
  components: { AdminAppbar, AdminMobileBar }
}
</script>

<style lang="css" scoped>
.v-content {
  padding: 0px;
}
</style>
