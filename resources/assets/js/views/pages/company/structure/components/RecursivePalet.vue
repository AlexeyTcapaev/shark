<template>
  <v-expansion-panel-content>
    <div slot="header">
      <div class="department-header">
        <v-icon>group</v-icon>123
        <v-divider class="mx-3" vertical></v-divider>
        <p>{{item.name}}</p>
      </div>
    </div>
    <v-card>
      <v-card-text>
        <v-flex>
          <v-text-field
            outline
            label="Введите название отдела"
            v-model="item.newDepartment"
            append-icon="add"
            @click:append="AddDepartment"
            @keyup.enter="AddDepartment"
          ></v-text-field>
          <RecursivePalet
            v-if="item.children"
            v-for="(item,index) in item.children"
            :key="index"
            :item="item"
          ></RecursivePalet>
          <div class="padding-top">
              <v-layout align-center justify-center row fill-height wrap>
                <v-flex xl2 md12 sm12 xs12>
                  <h2>Сотрудники отдела</h2>
                </v-flex>
                <v-flex xl10 md12 sm12 xs12>
                  <v-text-field
                    class="message-input"
                    outline
                    label="Поиск по сотрудникам"
                    append-icon="search"
                    @click:append="AddDepartment"
                    @keyup.enter="AddDepartment"
                  ></v-text-field>
                </v-flex>
              </v-layout>
              <v-layout>
                <v-dialog v-model="dialog" width="500">
                  <v-btn flat slot="activator">Добавить</v-btn>
                  <v-card>
                    <v-card-title>
                      <h4>Поиск по пользователям компании</h4>
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
                      <v-btn color="primary" @click="attachUser">Добавить</v-btn>
                    </v-card-actions>
                  </v-card>
                </v-dialog>
              </v-layout>
              <v-layout>
                <v-flex v-if="item.employees">
                  <ul class="users-grid">
                    <li v-for="(user,index) in item.employees" :key="index" class="no-border">
                      <EmployeesCard :user="user" :index="index" @UserDeleted="deleteUser"></EmployeesCard>
                    </li>
                  </ul>
                </v-flex>
              </v-layout>
          </div>
        </v-flex>
      </v-card-text>
    </v-card>
  </v-expansion-panel-content>
</template>
<script>
const RecursivePalet = () => import("./RecursivePalet.vue");
const EmployeesCard = () =>
  import("../../employees/components/EmployeCard.vue");
import { mapState } from "vuex";
import {
  searchUserInComapny,
  attachUserToDepartment
} from "../../../../../api/UserFunctions.js";
export default {
  data: () => ({
    dialog: false,
    search: null,
    members: [],
    searchLoading: false,
    users: []
  }),
  components: {
    RecursivePalet,
    EmployeesCard
  },
  props: {
    item: {
      type: Object,
      default: {}
    }
  },
  watch: {
    search(val) {
      if (val != null && val.length > 3) {
        searchUserInComapny(val, this.$route.params.slug).then(resp => {
          this.users = resp.data;
        });
      }
    }
  },
  computed: {
    ...mapState("user", { AuthUser: "user" })
  },
  methods: {
    attachUser() {
      this.members.map(member => {
        attachUserToDepartment(
          member,
          this.item.slug,
          this.$route.params.slug
        ).then(resp => {});
      });
    },
    AddDepartment() {
      const init = this;
      axios
        .post("/api/auth/departments", {
          name: this.item.newDepartment,
          parent: this.item.slug,
          root: this.$route.params.slug
        })
        .then(function(resp) {
          init.item.children.push(resp.data);
        })
        .catch(function(error) {});
    },
    remove(item) {
      const index = this.members.indexOf(item);
      if (index >= 0) this.members.splice(index, 1);
    }
  }
};
</script>

<style scoped>
button.v-btn--flat {
  margin: 6px 0;
}

.v-input__slot {
  margin: 0 0 0 15px;
}

.creator {
  margin-bottom: 15px;
}
div {
  text-align: left;
}
.department-header {
  display: flex;
  flex-direction: row;
  align-items: center;
  overflow: hidden;
}
.padding-top{
padding: 10px 0 0 0;
}
.department-header i {
  margin-right: 5px;
}
.department-header p {
  font-weight: bold;
  padding: 0 10px;
  margin: 0;
}
.department-header .v-divider--vertical {
  height: 50px;
}
.v-expansion-panel__body .v-card {
  border-top: 1px solid rgba(0, 0, 0, 0.12);
}
.v-expansion-panel__container {
  border-left: 1px solid rgba(0, 0, 0, 0.12);
  border-right: 1px solid rgba(0, 0, 0, 0.12);
}
.flex li:last-of-type {
  border-bottom: 1px solid rgba(0, 0, 0, 0.12);
}
.users-grid {
  display: flex;
}
.no-border{
    border-bottom: none!important;
}
</style>
