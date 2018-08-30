<template>
    <main class="fullheight">
        <v-navigation-drawer fixed v-model="drawer" app>
            <v-list dense>
                <v-list-tile @click="" to="/app" exact-active-class="target-link">
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Домашняя страница</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile :to="{name:'add_company'}" exact-active-class="target-link">
                    <v-list-tile-action>
                        <v-icon>add_circle_outline</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-badge color="secondary">
                            <span slot="badge">6</span>
                            <v-list-tile-title>Создать компанию</v-list-tile-title>
                        </v-badge>

                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile exact-active-class="target-link" v-for="comp in company" :key="comp.id">
                    <v-list-tile-action>
                        <img :src="'/storage/'+comp.logo">
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-badge color="secondary">
                            <span slot="badge"></span>
                            <v-list-tile-title>{{comp.name}}</v-list-tile-title>
                        </v-badge>

                    </v-list-tile-content>
                </v-list-tile>
            </v-list>
        </v-navigation-drawer>
        <v-toolbar color="primary" dark fixed app>
            <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
            <v-list-tile-avatar>
              <img class="img_logo" src="/storage/logo/temp_shark_logo.png" alt="Бизнес - Акула">
            </v-list-tile-avatar>
            <v-toolbar-title v-if="windowWidth > 993">
                <router-link to="/home" class="logo">Бизнес - Акула</router-link>
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-menu offset-y>
                <v-btn slot="activator" dark flat class="nav-btn">
                    <v-icon>account_circle</v-icon>
                    {{$store.state.user.user.name}}
                </v-btn>
                <v-list>
                    <v-list-tile @click="logout">
                        <v-list-tile-title>Выход</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>
        </v-toolbar>
        <div class="wrapper" v-bar :style=" { height: page + 'px' } ">
          <div>
            <transition name="fade" mode="out-in">
              <router-view></router-view>
            </transition>
          </div>         
        </div>
         <v-bottom-nav :active.sync="bottomNav" fixed :value="true">
                <v-btn color="teal" flat value="recent">
                    <span>ERP</span>
                    <v-icon>dashboard</v-icon>
                </v-btn>

                <v-btn color="teal" flat value="favorites">
                    <span>Новости</span>
                    <v-icon>description</v-icon>
                </v-btn>

                <v-btn color="teal" flat value="nearby">
                    <span>Бизнес площадка</span>
                    <v-icon>business</v-icon>
                </v-btn>
            </v-bottom-nav>
    </main>
</template>
<script>
import { mapActions } from "vuex";
import { mapGetters } from 'vuex'
export default {
  data: () => ({
    dialog: false,
    drawer: false,
    bottomNav: "recent",
    items: [
      { icon: "contacts", text: "Contacts" },
      { icon: "history", text: "Frequently contacted" },
      { icon: "content_copy", text: "Duplicates" },
      {
        icon: "keyboard_arrow_up",
        "icon-alt": "keyboard_arrow_down",
        text: "Labels",
        model: true,
        children: [{ icon: "add", text: "Create label" }]
      },
      {
        icon: "keyboard_arrow_up",
        "icon-alt": "keyboard_arrow_down",
        text: "More",
        model: false,
        children: [
          { text: "Import" },
          { text: "Export" },
          { text: "Print" },
          { text: "Undo changes" },
          { text: "Other contacts" }
        ]
      },
      { icon: "settings", text: "Settings" },
      { icon: "chat_bubble", text: "Send feedback" },
      { icon: "help", text: "Help" },
      { icon: "phonelink", text: "App downloads" },
      { icon: "keyboard", text: "Go to the old version" }
    ],
  }),
  methods: {
    ...mapActions({ ResetState: "user/ResetState" }),
    logout() {
      const init = this;
      axios.get("/api/auth/logout").then(function(resp) {
        init.ResetState();
        init.$router.push("/login");
      });
    },
  },
  computed:{
      ...mapGetters({
          windowWidth:'config/windowWidth',
          windowHeight:'config/windowHeight',
          company:'user/GetCompany'}),
      page(){ 
          if(this.windowWidth > 993)
            return this.windowHeight - 120;
        else return this.windowHeight - 112;
      }
  },
};
</script>
<style scoped>
.logo {
  color: #ffffff;
  text-decoration: none;
}
.nav-btn {
  color: #ffffff !important;
  height: 100%;
}
.v-menu {
  height: 100%;
}
.v-content {
  padding-top: 0px !important;
}
.wrapper {
  overflow: hidden;
}
.v-navigation-drawer{
    z-index:6;
}
.v-bottom-nav {
  box-shadow: 9px 3px 14px 2px rgba(0, 0, 0, 0.12);
}
.target-link .v-list__tile__content .v-list__tile__title {
  color: #f80b37 !important;
}

.target-link .v-icon {
  color: #f80b37 !important;
}
.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.3s;
  transition-property: opacity;
  transition-timing-function: ease;
}
.v-avatar
.fade-enter,
.fade-leave-active {
  opacity: 0
}

</style>
