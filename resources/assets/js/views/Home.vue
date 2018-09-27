<template>
    <main class="fullheight">
        <v-navigation-drawer fixed v-model="drawer" app>
            <v-list dense >
                        <v-list-tile  to="/app" exact-active-class="target-link" active-class="active-link">
                            <v-list-tile-action>
                                <v-icon>home</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>Домашняя страница</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                        <v-divider dark></v-divider>
                        <v-subheader>Мои компании</v-subheader>
                        <v-list-tile class="search-bar">
                            <v-list-tile-content>
                                <v-text-field outline label="Поиск по компаниям" append-icon="search" v-model="search"></v-text-field>
                            </v-list-tile-content>
                        </v-list-tile>
                        <v-list-group avatar v-for="(comp,index) in FiltredCompany"
                            :key="index">
                            <v-list-tile slot="activator">
                                <v-list-tile-avatar v-if="comp.logo">
                                    <img :src="'/storage/uploads/'+comp.logo" :alt="comp.name">
                                </v-list-tile-avatar>
                                <v-list-tile-content>
                                    <v-list-tile-title>{{comp.company_type.name}} {{comp.name}}</v-list-tile-title>
                                    <v-list-tile-sub-title>Владелец</v-list-tile-sub-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                    <v-badge color="secondary">
                                        <span slot="badge">6</span>
                                    </v-badge>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile active-class="secondary--text target-link" :to="{name:'company-structure',params:{slug:comp.slug}}">
                                <v-list-tile-action>
                                    <v-icon>view_module</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Структура</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile >
                                <v-list-tile-action>
                                    <v-icon>group</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Сотрудники</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile >
                                <v-list-tile-action>
                                    <v-icon>book</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Справочник</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile >
                                <v-list-tile-action>
                                    <v-icon>work</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Поручения</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile >
                                <v-list-tile-action>
                                    <v-icon>timelapse</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Трудозатраты</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                            <v-list-tile >
                                <v-list-tile-action>
                                    <v-icon>timeline</v-icon>
                                </v-list-tile-action>
                                <v-list-tile-content>
                                    <v-list-tile-title>Поэтапная деятельность</v-list-tile-title>
                                </v-list-tile-content>
                                <v-list-tile-action>
                                </v-list-tile-action>
                            </v-list-tile>
                        </v-list-group>
                        <v-divider dark></v-divider>
                        <v-list-tile :to="{name:'add_company'}" exact-active-class="target-link">
                            <v-list-tile-action>
                                <v-icon>add_circle_outline</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>Создать компанию</v-list-tile-title>
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
                    <v-list-tile to="/settings">
                        <v-list-tile-title>Настройки профиля</v-list-tile-title>
                    </v-list-tile>
                </v-list>
            </v-menu>
            <v-badge color="secondary" overlap>
                <span slot="badge">6</span>
                <v-btn icon>
                    <v-icon>notifications</v-icon>
                </v-btn>
            </v-badge>
        </v-toolbar>
        <div class="wrapper" v-bar :style=" { height: page + 'px' } ">
            <div>
                <transition name="fade" mode="out-in" appear>
                    <router-view :key="$route.fullPath"></router-view>
                </transition>
            </div>
        </div>
        <v-bottom-nav :active.sync="bottomNav" :value="true">
            <v-btn flat :to="{name:'communication'}">
                <span>Общение</span>
                <v-icon>question_answer</v-icon>
            </v-btn>

            <v-btn flat :to="{name:'news'}">
                <span>Новости</span>
                <v-icon>description</v-icon>
            </v-btn>
            <v-btn flat :to="{name:'platform'}">
                <span>Бизнес площадка</span>
                <v-icon>business</v-icon>
            </v-btn>
        </v-bottom-nav>
    </main>
</template>

<script>
import { mapActions } from "vuex";
import { mapGetters } from "vuex";
export default {
  data: () => ({
    dialog: false,
    drawer: false,
    search: "",
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
    ]
  }),
  methods: {
    ...mapActions({ ResetState: "user/ResetState" }),
    logout() {
      const init = this;
      axios.get("/api/auth/logout").then(function(resp) {
        init.ResetState();
        init.$router.push("/login");
      });
    }
  },
  computed: {
    ...mapGetters({
      windowWidth: "config/windowWidth",
      windowHeight: "config/windowHeight",
      company: "user/GetCompany"
    }),
    page() {
      if (this.windowWidth > 993) return this.windowHeight - 120;
      else return this.windowHeight - 112;
    },
    FiltredCompany() {
      if (this.company !== undefined)
        return this.company.filter(elem => {
          if (this.search === "") return true;
          else if (elem.name.toLowerCase().indexOf(this.search.toLowerCase()) > -1 || elem.company_type.name.toLowerCase().indexOf(this.search.toLowerCase()) > -1) return elem;
        });
      else return [];
    }
  }
};
</script>
<style scoped>
.logo {
  color: #ffffff;
  text-decoration: none;
}
.active-link .v-icon {
  color: rgba(0, 0, 0, 0.54) !important;
}
.v-list__tile__action .v-badge {
  margin: 0 10px 0 0;
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
.v-navigation-drawer {
  z-index: 6;
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
.nav-btn i{
    margin-right: 15px;
}
.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.3s;
  transition-property: opacity;
  transition-timing-function: ease;
}
.v-avatar .fade-enter,
.fade-leave-active {
  opacity: 0;
}
.search-bar {
  margin: 5px 0;
}
.company {
  background: rgba(0, 0, 0, 0.1);
}
.v-bottom-nav .v-btn--active {
  color: #f80b37;
}
</style>
