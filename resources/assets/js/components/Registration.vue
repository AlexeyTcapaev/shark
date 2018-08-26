<template>
  <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Регистрация</v-toolbar-title>
                <v-spacer></v-spacer>
              </v-toolbar>
              <v-card-text>
                <v-alert v-model="alert" :type="type" dismissible>{{alert_message.message}}</v-alert>
                <v-alert v-model="error.alert" v-for="(error,index) in err" :key="index" type="error" dismissible>{{error.message}}</v-alert>
                <v-form ref="form" v-model="valid">
                    <v-text-field outline label="Login"  append-icon="person" required :rules="loginRules" v-model="login"></v-text-field>
                    <v-text-field outline label="E-mail" append-icon="mail" required :rules="emailRules" v-model="email"></v-text-field>
                    <v-text-field outline label="Password" @click:append="show1 = !show1" :append-icon="show1 ? 'visibility_off' : 'visibility'" :type="show1 ? 'text' : 'password'" required v-model="password" :rules="passwordRules"></v-text-field>
                    <v-text-field outline label="Confrim" @click:append="show2 = !show2" :append-icon="show2 ? 'visibility_off' : 'visibility'" :type="show2 ? 'text' : 'password'" required v-model="confrim_password"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat color="primary" to="/login">Есть аккаунт?</v-btn>
                <v-btn color="primary" :disabled="!(valid == true && passwordValid == true)" @click="submit">Отправить</v-btn>
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
    valid: false,
    passwordValid: false,
    login: "",
    show1: false,
    show2: false,
    password: "",
    err: [],
    alert: false,
    type: "success",
    alert_message: "",
    confrim_password: "",
    loginRules: [
      v => !!v || "Name is required",
      v => (v && v.length <= 15) || "Name must be less than 15 characters"
    ],
    email: "",
    emailRules: [
      v => !!v || "E-mail is required",
      v => /.+@.+/.test(v) || "E-mail must be valid"
    ],
    passwordRules: [v => !!v || "Password is required"]
  }),
  methods: {
    ...mapActions({ SetToken: "user/SetToken" }),
    submit() {
      const init = this;
      axios
        .post("/api/auth/signup", {
          email: this.email,
          password: this.password,
          password_confirmation: this.confrim_password,
          name: this.login
        })
        .then(function(resp) {
          init.alert = true;
          init.alert_message = resp.data;
          init.type = "success";
          axios
            .post("/api/auth/login", {
              email: init.email,
              password: init.password,
              remember_me: true
            })
            .then(function(resp) {
              init.SetToken(resp.data);
              init.$router.push("/home");
            });
        })
        .catch(error => {
          Object.keys(error.response.data.errors).forEach(element => {
            error.response.data.errors[element].forEach(err => {
              let e = {};
              e.message = err;
              e.alert = true;
              init.err.push(e);
            });
          });
          console.log(error.response.data.errors);
        });
    },
    passwordCheck() {
      if (this.password === this.confrim_password) this.passwordValid = true;
      else this.passwordValid = false;
    }
  },
  watch: {
    password() {
      this.passwordCheck();
    },
    confrim_password() {
      this.passwordCheck();
    }
  }
};
</script>

