<template>
<main>
    <v-navigation-drawer fixed v-model="drawer" app>
      <v-list dense>
        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>home</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Home</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>contact_mail</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>Contact</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>
    <v-toolbar color="primary" dark fixed app>
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title><router-link to="/home" class="logo">Бизнес - Акула</router-link></v-toolbar-title>
      <v-spacer></v-spacer>
      <v-menu offset-y>
        <v-btn slot="activator" color="primary" dark>
         <v-icon>account_circle</v-icon>
            {{$store.state.user.name}}
        </v-btn>
        <v-list>
          <v-list-tile @click="logout">
            <v-list-tile-title>Выход</v-list-tile-title>
          </v-list-tile>
        </v-list>
      </v-menu>
    </v-toolbar>
    <v-content>
      <v-container fluid fill-height>
        <v-layout justify-center align-center>
          <v-flex text-xs-center>
           
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
          <v-bottom-nav
        :active.sync="bottomNav"
        :value="true"
        absolute
        color="transparent"
      >
        <v-btn
          color="teal"
          flat
          value="recent"
        >
          <span>Recent</span>
          <v-icon>history</v-icon>
        </v-btn>
  
        <v-btn
          color="teal"
          flat
          value="favorites"
        >
          <span>Favorites</span>
          <v-icon>favorite</v-icon>
        </v-btn>
  
        <v-btn
          color="teal"
          flat
          value="nearby"
        >
          <span>Nearby</span>
          <v-icon>place</v-icon>
        </v-btn>
      </v-bottom-nav>
  </main>
</template>

<script>
export default {
  data: () => ({
    dialog: false,
    drawer: null,
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
  props: {
    source: String
  },
  methods:{
      logout(){}
  }
};
</script>
<style scoped>
.logo {
  color: #ffffff;
  text-decoration: none;
}
</style>
