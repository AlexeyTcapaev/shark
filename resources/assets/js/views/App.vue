<template>
<v-app>
  <v-content>
    <transition name="fade" mode="out-in">     
        <router-view></router-view>
    </transition>
  </v-content>
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
  computed: {}
};
</script>

<style>
i {
  user-select: none !important;
}
button.primary{
    background-color: #f80b37!important
}
button.v-btn--flat{
    color: #f80b37!important
}
.primary-text{
color: #f80b37!important
}
</style>