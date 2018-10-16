<template>
<v-expansion-panel-content>
    <div slot="header"><div class="department-header"><v-icon>group</v-icon>123 <v-divider class="mx-3" vertical></v-divider><p>{{item.name}}</p> </div></div>
        <v-card>
            <v-card-text>
                <v-flex>
                    <v-text-field outline label="Введите название отдела"  v-model="item.newDepartment" append-icon="add"  @click:append="AddDepartment" @keyup.enter="AddDepartment"></v-text-field>
                    <RecursivePalet v-if="item.children" v-for="(item,index) in item.children" :key="index" :item="item"></RecursivePalet>
                </v-flex>
            </v-card-text>
        </v-card>
</v-expansion-panel-content>
</template>
<script>
const RecursivePalet = () => import("./RecursivePalet.vue");
export default {
  components: {
    RecursivePalet
  },
  props: {
    item: {
      type: Object,
      default: {}
    }
  },
  data: () => ({}),
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
