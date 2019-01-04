<template>
    <v-expansion-panel-content>
        <div slot="header">
            <div class="department-header">
                <v-icon>group</v-icon>123 <v-divider class="mx-3" vertical></v-divider>
                <p>{{item.name}}</p>
            </div>
        </div>
        <v-card>
            <v-card-text>
                <v-flex>
                    <v-text-field outline label="Введите название отдела" v-model="item.newDepartment" append-icon="add"
                        @click:append="AddDepartment" @keyup.enter="AddDepartment"></v-text-field>
                    <RecursivePalet v-if="item.children" v-for="(item,index) in item.children" :key="index" :item="item"></RecursivePalet>
                    <v-layout align-center justify-center row fill-height wrap>
                        <v-flex xl2 md12 sm12 xs12>
                          <h2>Сотрудники отдела</h2>
                        </v-flex>
                        <v-flex xl10 md12 sm12 xs12>
                          <v-text-field class="message-input" outline label="Поиск по сотрудникам" append-icon="search"
                              @click:append="AddDepartment" @keyup.enter="AddDepartment"></v-text-field>
                        </v-flex>
                    </v-layout>
                    <v-layout>
                        <v-dialog v-model="dialog" width="500">
                          <v-btn flat slot="activator">
                            Добавить
                          </v-btn>

                            <v-card>
                                <v-card-title class="headline grey lighten-2" primary-title>
                                    Privacy Policy
                                </v-card-title>

                                <v-card-text>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </v-card-text>

                                <v-divider></v-divider>

                                <v-card-actions>
                                    <v-spacer></v-spacer>
                                    <v-btn color="primary" flat @click="dialog = false">
                                        I accept
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-dialog>
                    </v-layout>
                </v-flex>
            </v-card-text>
        </v-card>
    </v-expansion-panel-content>
</template>
<script>
const RecursivePalet = () => import("./RecursivePalet.vue");
export default {
  data: () => ({
    dialog: false
  }),
  components: {
    RecursivePalet
  },
  props: {
    item: {
      type: Object,
      default: {}
    }
  },

  methods: {
    AddDepartment() {
      const init = this;
      axios
        .post("/api/auth/departments", {
          name: this.item.newDepartment,
          root: this.item.slug
        })
        .then(function(resp) {
          init.item.children.push(resp.data);
        })
        .catch(function(error) {});
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
</style>
