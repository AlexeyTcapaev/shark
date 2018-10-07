<template>
    <v-container fluid class="no-padding">
        <v-layout justify-center align-center>
            <v-flex>
                    <v-navigation-drawer
                        v-model="drawer"
                        absolute
                        temporary
                        >

                        <v-list class="pt-0" dense>
                              <v-list >
                                <v-list-tile class="search-bar">
                                    <v-list-tile-content>
                                        <v-text-field outline label="Поиск по чатам" append-icon="search" v-model="search"></v-text-field>
                                    </v-list-tile-content>
                                </v-list-tile>
                            </v-list>
                            <v-divider></v-divider>
                              <v-list-tile
                        active-class="secondary--text target-link"
                        v-for="(item,i) in items"
                        :key="item.title"
                        avatar
                        :to="{ name:'chat',params:{chatid:i} }"
                        >
                        <v-list-tile-avatar>
                            <img :src="item.avatar">
                        </v-list-tile-avatar>

                        <v-list-tile-content>
                            <v-list-tile-title v-html="item.title"></v-list-tile-title>
                        </v-list-tile-content>

                        <v-list-tile-action>
                             <v-badge color="secondary" class="relative-badge">
                                        <span slot="badge">6</span>
                                    </v-badge>
                        </v-list-tile-action>
                        </v-list-tile>
                                                <v-divider dark></v-divider>
                        <v-list-tile :to="{name:'add_company'}" exact-active-class="target-link">
                            <v-list-tile-action>
                                <v-icon>add_circle_outline</v-icon>
                            </v-list-tile-action>
                            <v-list-tile-content>
                                <v-list-tile-title>Создать чат</v-list-tile-title>
                            </v-list-tile-content>
                        </v-list-tile>
                        </v-list>
                        </v-navigation-drawer>
                <main class="chat">
                    <transition name="fade" mode="out-in" appear>
                        <router-view @toggleChat="drawer=!drawer" :key="$router.fullPath"></router-view>
                    </transition>
                </main>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
export default {
  data: () => ({
    search: "",
    items: [
      {
        active: true,
        title: "Jason Oner",
        avatar: "https://cdn.vuetifyjs.com/images/lists/1.jpg"
      },
      {
        active: true,
        title: "Ranee Carlson",
        avatar: "https://cdn.vuetifyjs.com/images/lists/2.jpg"
      },
      {
        title: "Cindy Baker",
        avatar: "https://cdn.vuetifyjs.com/images/lists/3.jpg"
      },
      {
        title: "Ali Connors",
        avatar: "https://cdn.vuetifyjs.com/images/lists/4.jpg"
      }
    ],
    mini: true,
    right: null,
    drawer: true
  }),
  methods: {}
};
</script>

<style scoped>
.search-bar {
  margin: 5px 0;
}
.v-list {
  transition: width 0.2s linear;
}
.shortChat {
  width: 70px !important;
  transition: 0.2s linear;
  overflow: hidden;
}
.chat {
  width: 100%;
}
.no-padding {
  padding: 0;
}
.room-list {
  max-width: 300px;
  height: 100%;
}
.container,
.layout,
.flex {
  height: 100%;
}
i.active {
  transform: rotate(180deg);
}
.room-list .v-list {
  height: 100%;
}
.flex {
  display: flex;
}
.target-link .v-list__tile__content .v-list__tile__title {
  color: #f80b37 !important;
}
.material-icons {
  width: 24px;
}
.target-link .v-icon {
  color: #f80b37 !important;
}

</style>

