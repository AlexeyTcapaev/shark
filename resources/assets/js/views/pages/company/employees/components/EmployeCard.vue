<template>
  <div class="center" v-if="user">
    <div class="profile">
      <div class="image">
        <div class="circle-1"></div>
        <div class="circle-2"></div>
        <img
          v-if="user.avatar"
          :src="'/storage/uploads/'+user.avatar"
          width="70"
          height="70"
          :alt="user.name"
        >
        <v-icon v-else size="70">account_circle</v-icon>
      </div>

      <div class="name">{{user.name}}</div>
      <div class="job">Visual Artist</div>

      <div class="actions" v-if="user.id != AuthUser.id">
        <button class="btn" @click="DeleteMember">Убрать</button>
        <button class="btn" @click="WriteMember">Написать</button>
      </div>
      <div class="actions" v-else>
        <div class="name">Это вы!</div>
         <button class="btn" @click="DeleteMember">Покинуть</button>
      </div>
    </div>
    <div class="stats" v-if="actions">
      <div class="box">
        <span class="value">523</span>
        <span class="parameter">Posts</span>
      </div>
      <div class="box">
        <span class="value">1387</span>
        <span class="parameter">Likes</span>
      </div>
      <div class="box">
        <span class="value">146</span>
        <span class="parameter">Follower</span>
      </div>
    </div>
  </div>
  <div class="center no-user" v-else>
    <v-dialog v-model="dialog" max-width="500px">
      <v-card>
        <v-card-title>
          <h4>Поиск по пользователям</h4>
        </v-card-title>
        <v-card-text>
          <v-autocomplete
            v-model="members"
            :items="users"
            box
            chips
            outline
            :search-input.sync="search"
            hide-no-data
            placeholder="Начните ввод для поиска"
            :loading="searchLoading"
            hide-selected
            item-text="name"
            return-object
            multiple
          >
            <template slot="selection" slot-scope="data">
              <v-chip
                :selected="data.selected"
                close
                class="chip--select-multi"
                @input="remove(data.item)"
              >
                <v-avatar>
                  <img :src="data.item.avatar" v-if="data.item.avatar">
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
                  <img :src="data.item.avatar" v-if="data.item.avatar">
                  <v-icon v-else>account_circle</v-icon>
                </v-list-tile-avatar>
                <v-list-tile-content>
                  <v-list-tile-title v-html="data.item.name"></v-list-tile-title>
                  <v-list-tile-sub-title v-html="data.item.group"></v-list-tile-sub-title>
                </v-list-tile-content>
              </template>
            </template>
          </v-autocomplete>
        </v-card-text>
        <v-card-actions>
          <v-btn color="primary" flat @click="dialog=false">Close</v-btn>
          <v-spacer></v-spacer>
          <v-btn color="primary" @click="AttachMembers">Добавить</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <div class="profile" @click="dialog = true">
      <div class="image">
        <v-icon size="60">add</v-icon>
      </div>
      <div class="name">Добавить сотрудника</div>
    </div>
  </div>
</template>
<script>
import { mapState, mapActions } from "vuex";
export default {
  props: ["user", "index"],
  data: () => ({
    open: false,
    actions: false,
    dialog: false,
    search: null,
    searchLoading: false,
    users: [],
    members: []
  }),
  methods: {
    ...mapActions({ AddChat: "chat/AddChat" }),
    Toggle() {
      this.open = !this.open;
    },
    DeleteMember() {
      axios
        .post("/api/auth/" + this.$route.params.slug + "/users/detach", {
          id: this.user.id
        })
        .then(resp => {
          this.$emit("UserDeleted", this.index);
        });
    },
    WriteMember() {
      axios
        .post("/api/auth/chats", { users: [this.user.id, this.AuthUser.id] })
        .then(resp => {
          init.alert.message = "Диалог успешно создан.";
          init.alert.enable = true;
          init.AddChat(resp.data);
        })
        .catch(error => {
          init.alert.message = "Ошибка при создании диалога.";
          init.alert.enable = true;
          init.alert.type = "error";
        });
    },
    AttachMembers() {
      this.members.map(member => {
        axios
          .post("/api/auth/" + this.$route.params.slug + "/users/attach", {
            id: member.id
          })
          .then(resp => {
            this.$emit("UserAdded", member);
          });
        this.dialog = false;
      });
    }
  },
  watch: {
    search(val) {
      if (val != null && val.length > 3) {
        axios
          .get("/api/auth/search/users", { params: { search: val } })
          .then(resp => {
            this.users = resp.data;
          });
      }
    }
  },
  computed: {
    ...mapState("user", { AuthUser: "user" })
  }
};
</script>

<style scoped>
.no-user .profile {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.no-user .profile .image {
  margin: 0;
}
i:hover {
  color: #f80b37;
}
.center {
  margin: 10px;
  background: #fff;
  border-radius: 3px;
  overflow: hidden;
  box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2),
    0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
}

.profile {
  float: left;
  width: 200px;
  height: 320px;
  text-align: center;
}
.profile .image {
  position: relative;
  width: 70px;
  height: 70px;
  margin: 38px auto 0 auto;
}
.profile .image .circle-1,
.profile .image .circle-2 {
  position: absolute;
  box-sizing: border-box;
  width: 76px;
  height: 76px;
  top: -3px;
  left: -3px;
  border-width: 1px;
  border-style: solid;
  border-color: #46547d #46547d #46547d transparent;
  border-radius: 50%;
  transition: all 1.5s ease-in-out;
}
.profile .image .circle-2 {
  width: 82px;
  height: 82px;
  top: -6px;
  left: -6px;
  border-color: #46547d transparent #46547d #46547d;
}
.profile .image img {
  display: block;
  border-radius: 50%;
  background: #46547d;
}
.profile .image:hover {
  cursor: pointer;
}
.profile .image:hover .circle-1 {
  border-color: #f80b37 #f80b37 #f80b37 transparent;
}
.profile .image:hover .circle-1,
.profile .image:hover .circle-2 {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.profile .image:hover .circle-2 {
  -webkit-transform: rotate(-360deg);
  transform: rotate(-360deg);
  border-color: #f80b37 transparent #f80b37 #f80b37;
}
.profile .name {
  font-size: 15px;
  font-weight: 600;
  margin-top: 20px;
}
.profile .job {
  font-size: 11px;
  line-height: 15px;
}
.profile .actions {
  margin-top: 33px;
}
.profile .actions .btn {
  display: block;
  width: 120px;
  height: 30px;
  margin: 0 auto 10px auto;
  background: none;
  border: 1px solid #46547d;
  border-radius: 15px;
  font-size: 12px;
  font-weight: 600;
  box-sizing: border-box;
  transition: all 0.3s ease-in-out;
  color: #46547d;
}
.profile .actions .btn:hover {
  background: #f80b37;
  border: 1px solid #f80b37;
  color: #fff;
}

.stats {
  float: left;
}
.stats .box {
  box-sizing: border-box;
  width: 120px;
  height: 106px;
  background: rgba(70, 84, 125, 0.1);
  text-align: center;
  padding-top: 28px;
  transition: all 0.4s ease-in-out;
}
.stats .box:hover {
  background: rgba(70, 84, 125, 0.3);
  cursor: pointer;
}
.stats .box:nth-child(2) {
  margin: 1px 0;
}
.stats span {
  display: block;
}
.stats .value {
  font-size: 18px;
  font-weight: 600;
}
.stats .parameter {
  font-size: 11px;
}
</style>

