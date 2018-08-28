<template>
<v-app>
  <v-content>
    <transition name="fade" mode="out-in">     
        <router-view></router-view>
    </transition>
  </v-content>
  <vue-progress-bar></vue-progress-bar>
</v-app>
</template>

<script>
export default {
  metaInfo: {
    titleTemplate: "%s"
  },
  data() {
    return {
      transitionName: "slide-left"
    };
  },
  mounted() {
    this.$Progress.finish();
  },
  created() {
    this.$Progress.start();
    this.$router.beforeEach((to, from, next) => {
      if (to.meta.progress !== undefined) {
        let meta = to.meta.progress;
        this.$Progress.parseMeta(meta);
      }
      this.$Progress.start();

      next();
    });
    this.$router.afterEach((to, from) => {
      this.$Progress.finish();
    });
  }
};
</script>

<style>
i {
  user-select: none !important;
}
button.primary {
  background-color: #f80b37 !important;
}
button.v-btn--flat {
  color: #f80b37 !important;
}
.primary-text {
  color: #f80b37 !important;
}
.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.3s;
  transition-property: opacity;
  transition-timing-function: ease;
}

.fade-enter,
.fade-leave-active {
  opacity: 0
}

</style>