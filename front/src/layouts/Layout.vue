<template>
  <v-app>
    <div class="hidden-xs-only">
      <Appbar />
      <v-content class="grey lighten-4">
        <router-view />
        <!-- <v-footer>
          <div>

          </div>
        </v-footer> -->
      </v-content>
    </div>

    <div class="hidden-sm-and-up">
      <v-content class="grey lighten-4 pa-0">
        <router-view />
      </v-content>
      <v-footer absolute class="pa-0">
        <MobileBar />
      </v-footer>
    </div>
  </v-app>
</template>
<script>
import Appbar from '@/components/Appbar'
import MobileBar from '@/components/MobileBar'

export default {
  name: 'Layout',
  components: { Appbar, MobileBar }
}
</script>
