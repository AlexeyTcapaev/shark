<template>
    <v-container fluid fill-height>
        <v-layout align-center justify-center>
            <v-flex xs12 sm8 md4>
                <v-card class="elevation-12">
                    <v-toolbar dark color="primary">
                        <v-toolbar-title>Cоздание чата</v-toolbar-title>
                        <v-spacer></v-spacer>
                    </v-toolbar>
                    <v-card-text>
                        <v-alert v-model="alert.enable" :type="alert.type" dismissible>{{alert.message}}</v-alert>
                        <v-form>
                            <v-autocomplete v-model="newChat.users" :items="users"
                                outline chips label="Добавить участников" item-text="name" item-value="name"
                                return-object multiple>
                                <template slot="selection" slot-scope="data">
                                    <v-chip :selected="data.selected" close class="chip--select-multi" @input="remove(data.item)">
                                    <v-avatar>
                                        <img v-if="data.item.avatar" :src="'/storage/uploads/' + data.item.avatar">
                                        <v-icon v-else>account_circle</v-icon>
                                    </v-avatar>
                                        {{ data.item.name }}
                                    </v-chip>
                                </template>
                                <template slot="item" slot-scope="data">
                                    <template v-if="typeof data.item !== 'object'">
                                        <v-list-tile-content v-text="data.item"></v-list-tile-content>
                                    </template>
                                    <template v-else>
                                        <v-list-tile-avatar>
                                            <img v-if="data.item.avatar" :src="'/storage/uploads/' + data.item.avatar">
                                            <v-icon v-else>account_circle</v-icon>
                                        </v-list-tile-avatar>
                                        <v-list-tile-content>
                                            <v-list-tile-title v-html="data.item.name"></v-list-tile-title>
                                            <v-list-tile-sub-title v-html="data.item.group"></v-list-tile-sub-title>
                                        </v-list-tile-content>
                                    </template>
                                </template>
                            </v-autocomplete>
                        </v-form>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn :disabled="!valid" color="primary" @click="submit" :loading="loading">Создать</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data: () => ({
    alert: {
      enable: false,
      type: "success"
    },
    newChat: {
      users: []
    },
    users: [],
    loading: false
  }),
  methods: {
    submit() {
      const init = this;
      this.newChat.users.push(this.user);
      this.newChat.users = JSON.stringify(this.newChat.users);
      axios
        .post("/api/auth/chats", this.newChat)
        .then(resp => {
          init.alert.message = "Диалог успешно создан.";
          init.alert.enable = true;
        })
        .catch(error => {
          init.alert.message = "Ошибка при создании диалога.";
          init.alert.enable = true;
          init.alert.type = "error";
        });
    },
    remove(item) {
      const index = this.newChat.users.indexOf(item);
      if (index >= 0) this.newChat.users.splice(index, 1);
    }
  },
  computed: {
    ...mapGetters({ user: "user/GetUser" }),
    valid() {
      return true;
    }
  },
  mounted() {
    const init = this;
    axios
      .get("/api/auth/users/" + this.user.id)
      .then(resp => {
        init.users = resp.data;
      })
      .catch(error => {});
  }
};
</script>
