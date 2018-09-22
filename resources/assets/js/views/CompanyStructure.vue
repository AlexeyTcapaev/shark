<template>
    <v-container fluid>
        <v-layout justify-center align-center>
            <v-flex>
                <v-expansion-panel class="creator">
                    <v-expansion-panel-content>
                        <div slot="header">Информация о владельце и создателе</div>
                        <v-card>
                            <v-card-text class="grey lighten-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-card-text>
                        </v-card>
                    </v-expansion-panel-content>
                </v-expansion-panel>
                <v-expansion-panel class="creator">
                    <v-expansion-panel-content>
                        <div slot="header">Добавить отдел</div>
                        <v-card>
                            <v-card-text class="grey lighten-3">
                                <v-flex>
                                   <v-text-field outline label="Введите название отдела"  v-model="NewDepartment" append-icon="add"  @click:append="AddDepartment" @keyup.enter="AddDepartment"></v-text-field>
                                </v-flex>
                            </v-card-text>
                        </v-card>
                    </v-expansion-panel-content>
                </v-expansion-panel>
                <v-expansion-panel v-model="panel" expand>
                    <v-expansion-panel-content v-for="(item, i) in Departments" :key="i"  >
                        <div slot="header">{{item.name}}</div>
                        <v-card>
                            <v-card-text class="grey lighten-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-card-text>
                        </v-card>
                    </v-expansion-panel-content>
                </v-expansion-panel>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  data: () => ({
    Departments: [],
    NewDepartment: "",
    panel: []
  }),
  computed: {
    ...mapGetters({
      GetCompanyBySlug: "user/GetCompanyBySlug"
    }),
    Company() {
      return this.GetCompanyBySlug(this.$route.params.slug);
    }
  },
  methods: {
    AddDepartment() {
      this.Departments.push({ name: this.NewDepartment });
      this.panel.push(false);
    }
  }
};
</script>
<style scoped>
.creator {
  margin-bottom: 15px;
}
div {
  text-align: left;
}
</style>
