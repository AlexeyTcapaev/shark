<template>
  <main class="fullheight">
    <v-navigation-drawer fixed v-model="drawer" app>
      <v-list dense>
        <v-list-tile to="/app" exact-active-class="target-link" active-class="active-link">
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
        <v-list-group avatar v-for="(comp,index) in FiltredCompany" :key="index">
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
          <v-list-tile
            active-class="secondary--text target-link"
            :to="{name:'company-structure',params:{slug:comp.slug}}"
          >
            <v-list-tile-action>
              <v-icon>view_module</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Структура</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile
            active-class="secondary--text target-link"
            :to="{name:'company-employees',params:{slug:comp.slug}}"
          >
            <v-list-tile-action>
              <v-icon>group</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Сотрудники</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile>
            <v-list-tile-action>
              <v-icon>book</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Справочник</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile
            active-class="secondary--text target-link"
            :to="{name:'company-settings',params:{slug:comp.slug}}"
          >
            <v-list-tile-action>
              <v-icon>settings</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Настройки</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile>
            <v-list-tile-action>
              <v-icon>work</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Поручения</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile
            active-class="secondary--text target-link"
            :to="{name:'company-labor',params:{slug:comp.slug}}"
          >
            <v-list-tile-action>
              <v-icon>timelapse</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Трудозатраты</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile>
            <v-list-tile-action>
              <v-icon>timeline</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Поэтапная деятельность</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
          </v-list-tile>
          <v-list-tile
            active-class="secondary--text target-link"
            :to="{name:'company-catalog',params:{slug:comp.slug}}"
          >
            <v-list-tile-action>
              <v-icon>list</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>Каталог</v-list-tile-title>
            </v-list-tile-content>
            <v-list-tile-action></v-list-tile-action>
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
          <v-avatar>
            <v-icon v-if="!user.avatar">account_circle</v-icon>
            <img v-else :src="'/storage/uploads/'+user.avatar" :alt="user.name">
          </v-avatar>
          {{user.name}}
        </v-btn>
        <v-list>
          <v-list-tile @click="logout" active-class="secondary--text target-link">
            <v-list-tile-title>
              <v-icon>exit_to_app</v-icon>Выход
            </v-list-tile-title>
          </v-list-tile>
          <v-list-tile :to="{name:'user-settings'}" active-class="secondary--text target-link">
            <v-list-tile-title>
              <v-icon>settings</v-icon>Настройки профиля
            </v-list-tile-title>
          </v-list-tile>
          <v-list-tile :to="{name:'notifications'}" active-class="secondary--text target-link">
            <v-list-tile-title>
              <v-icon>notifications</v-icon>Уведомления
            </v-list-tile-title>
            <v-list-tile-action>
              <v-badge color="secondary" class="nav-badge">
                <span slot="badge">6</span>
              </v-badge>
            </v-list-tile-action>
          </v-list-tile>
        </v-list>
      </v-menu>
    </v-toolbar>
    <div
      v-if="!mobileAndTabletcheck"
      class="wrapper hidden"
      v-bar
      :style=" { height: page + 'px' } "
    >
      <div>
        <transition name="fade" mode="out-in" appear>
          <router-view :key="$route.fullPath"></router-view>
        </transition>
      </div>
    </div>
    <div v-else class="wrapper" :style=" { height: page + 'px' } ">
      <transition name="fade" mode="out-in" appear>
        <router-view :key="$route.fullPath"></router-view>
      </transition>
    </div>
    <v-bottom-nav :value="true">
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
      company: "user/GetCompany",
      user: "user/GetUser"
    }),

    mobileAndTabletcheck() {
      var check = false;
      (function(a) {
        if (
          /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(
            a
          ) ||
          /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
            a.substr(0, 4)
          )
        )
          check = true;
      })(navigator.userAgent || navigator.vendor || window.opera);
      return check;
    },
    page() {
      if (this.windowWidth > 993) return this.windowHeight - 120;
      else return this.windowHeight - 112;
    },
    FiltredCompany() {
      if (this.company !== undefined)
        return this.company.filter(elem => {
          if (this.search === "") return true;
          else if (
            elem.name.toLowerCase().indexOf(this.search.toLowerCase()) > -1 ||
            elem.company_type.name
              .toLowerCase()
              .indexOf(this.search.toLowerCase()) > -1
          )
            return elem;
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
.hidden {
  overflow: hidden !important;
}
.badge-slot {
  color: #ffffff !important;
}
.wrapper {
  overflow-y: scroll;
  -webkit-overflow-scrolling: touch;
}
.v-menu {
  display: flex;
}
.v-navigation-drawer {
  z-index: 6;
}
.nav-badge {
  right: -40px;
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
.nav-btn i {
  margin-right: 15px;
}
.v-avatar {
  margin-right: 15px;
}
.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.3s;
  transition-property: opacity;
  transition-timing-function: ease;
}
.v-list__tile__title {
  display: flex;
  align-items: center;
}
.v-list__tile__title i {
  margin-right: 10px;
}
.v-avatar .fade-enter,
.fade-leave-active {
  opacity: 0;
}
.search-bar {
  margin: 5px 0;
}
.v-list__tile--active .v-list__tile {
  color: #f80b37;
}
.company {
  background: rgba(0, 0, 0, 0.1);
}
.v-bottom-nav .v-btn--active {
  color: #f80b37;
}
</style>
