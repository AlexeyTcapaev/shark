<template>
  <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Вход</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                <v-form>
                    <v-text-field outline label="Login or E-mail" append-icon="person" v-model="login" :loading="loading"></v-text-field>
                    <v-text-field :loading="loading" outline label="Password" @click:append="show1 = !show1" :append-icon="show1 ? 'visibility_off' : 'visibility'" :type="show1 ? 'text' : 'password'" required v-model="password" :rules="passwordRules"></v-text-field>
                    <v-switch color="primary" v-model="remember_me" label="Запомнить меня"></v-switch>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat color="primary" to="/registration">Регистрация</v-btn>
                <v-btn :disabled="!valid" color="primary" @click="submit" :loading="loading">Отправить</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
</template>
<script>
import { mapActions } from "vuex";
export default {
  data: () => ({
    remember_me: false,
    login: "",
    password: "",
    alert: {
      enable: false
    },
    loading: false,
    show1: false,
    passwordRules: [v => !!v || "Password is required"]
  }),
  methods: {
    ...mapActions({ SetToken: "user/SetToken" }),

    submit() {
      const init = this;
      this.loading = true;
      if (this.login.indexOf("@") > -1)
        axios
          .post("/api/auth/login", {
            email: init.login,
            password: init.password,
            remember_me: true
          })
          .then(function(resp) {
            init.SetToken(resp.data);
            init.loading = false;
            init.$router.push("/app");
          })
          .catch(error => {
            init.loading = false;
            init.alert.message = error.response.data.message;
            init.alert.enable = true;
          });
      else
        axios
          .post("/api/auth/login", {
            name: init.login,
            password: init.password,
            remember_me: true
          })
          .then(function(resp) {
            init.SetToken(resp.data);
            init.$router.push("/app");
          });
    }
  },
  computed: {
    valid() {
      if (this.password !== "" && this.login !== "") return true;
      else return false;
    }
  },
  beforeCreate() {
    if (this.$store.state.user.token) {
      if (Object.keys(this.$store.state.user.token).length > 0)
        this.$router.push("/app");
    }
  }
};
</script>
