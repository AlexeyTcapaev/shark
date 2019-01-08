<template>
  <v-container fluid class="no-padding">
    <v-layout justify-center align-center>
      <v-flex>
        <ul class="users-grid">
          <li>
            <EmployeesCard @UserAdded="addUser"></EmployeesCard>
          </li>
          <li v-for="(user,index) in employees" :key="index">
            <EmployeesCard :user="user" :index="index" @UserDeleted="deleteUser"></EmployeesCard>
          </li>
        </ul>
      </v-flex>
    </v-layout>
  </v-container>
</template>
<script>
const EmployeesCard = () => import("./components/EmployeCard.vue");
export default {
  data: () => ({
    employees: []
  }),
  components: {
    EmployeesCard
  },
  methods: {
    addUser(user) {
      this.employees.push(user);
    },
    deleteUser(id) {
      this.employees.splice(id, 1);
    }
  },
  mounted() {
    axios.get("/api/auth/" + this.$route.params.slug + "/users").then(resp => {
      this.employees = resp.data;
    });
  }
};
</script>
<style scoped>
.users-grid {
  display: flex;
}
</style>

