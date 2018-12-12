<template>
<v-container fluid fill-height>
    <v-layout align-center justify-center>
        <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
                <v-toolbar dark color="primary">
                    <v-toolbar-title>Регистрация</v-toolbar-title>
                    <v-spacer></v-spacer>
                </v-toolbar>
                <v-card-title class="title font-weight-regular justify-space-between">
                    <span>{{ currentTitle }}</span>
                    <v-avatar color="primary lighten-2" class="subheading secondary white--text" size="24" v-text="step"></v-avatar>
                </v-card-title>
                <v-window v-model="step">
                    <v-window-item :value="1">
                        <v-card-text>
                            <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                            <v-form ref="form" v-model="valid1">
                                <v-text-field  outline label="E-mail" append-icon="mail" required :rules="emailRules" v-model="user.email"></v-text-field>
                                <span class="caption grey--text text--darken-1">
                                    Указанный почтовый адрес будет использован для создания учётной записи
                                </span>
                            </v-form>
                        </v-card-text>
                    </v-window-item>
                    <v-window-item :value="2">
                        <v-card-text>
                            <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                             <v-alert v-model="error.alert" v-for="(error,index) in err" :key="index" type="error" dismissible>{{error.message}}</v-alert>
                            <v-form ref="form" v-model="valid2">
                                <v-text-field  outline label="Login"  append-icon="person" required :rules="loginRules" v-model="user.name"></v-text-field>
                                <v-text-field  outline label="Password" @click:append="show1 = !show1" :append-icon="show1 ? 'visibility_off' : 'visibility'" :type="show1 ? 'text' : 'password'" required v-model="user.password" :rules="passwordRules"></v-text-field>
                                <v-text-field  outline label="Confrim" @click:append="show2 = !show2" :append-icon="show2 ? 'visibility_off' : 'visibility'" :type="show2 ? 'text' : 'password'" required v-model="user.password_confirmation" :rules="passwordRules"></v-text-field>
                                <span class="caption grey--text text--darken-1">
                                    Введите логин и пароль для вашего аккаунта
                                </span>
                            </v-form>
                        </v-card-text>
                    </v-window-item>
                    <v-window-item :value="3">
                        <div class="pa-3 text-xs-center">

                        <h3 class="title font-weight-light mb-2">Добро пожаловать!</h3>
                        <span class="caption grey--text">Спасибо за регистрацию!</span>
                        </div>
                    </v-window-item>
                </v-window>
                <v-divider></v-divider>
                <v-card-actions>
                     <v-btn :to="{name:'login'}" flat color="primary">
                        Вход
                    </v-btn>
                    <v-btn :disabled="step === 1" flat @click="BackWindow" color="primary">
                        Назад
                    </v-btn>
                    <v-spacer></v-spacer>
                    <v-btn :disabled="checkValid" color="primary" depressed @click="NextWindow" :loading="loading">
                        Далее
                    </v-btn>
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
    user: {},
    step: 1,
    valid1: false,
    valid2: false,
    passwordValid: false,
    login: "",
    show1: false,
    show2: false,
    password: "",
    loading: false,
    err: [],
    alert: {
      enable: false,
      message: ""
    },
    type: "success",
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
    BackWindow() {
      this.step--;
      this.valid = true;
    },
    NextWindow() {
      this.loading = true;
      this.alert = {};
      if (this.step == 1) {
        axios
          .post("/api/auth/email", { email: this.user.email })
          .then(resp => {
            this.step++;
            this.loading = false;
          })
          .catch(error => {
            this.alert.message = error.response.data.error;
            this.alert.enable = true;
            this.loading = false;
          });
      } else if (this.step == 2) {
        axios
          .post("/api/auth/signup", this.user)
          .then(resp => {
            axios
              .post("/api/auth/login", {
                email: this.user.email,
                password: this.user.password,
                remember_me: true
              })
              .then(resp => {
                this.loading = false;
                this.SetToken(resp.data);
                this.step++;
                setTimeout(() => {
                  this.$router.push("/app");
                }, 5000);
              });
          })
          .catch(error => {
            Object.keys(error.response.data.errors).forEach(element => {
              error.response.data.errors[element].forEach(err => {
                let e = {};
                e.message = err;
                e.alert = true;
                this.loading = false;
                init.err.push(e);
              });
            });
            console.log(error.response.data.errors);
          });
      }
      this.valid = false;
      this.loading = false;
    }
  },

  computed: {
    currentTitle() {
      switch (this.step) {
        case 1:
          return "E-mail";
        case 2:
          return "Логин и пароль";
        default:
          return "Учётная запись создана";
      }
    },
    checkValid() {
      if (this.step === 3) return true;
      if (this.step == 1) if (this.valid1 == false) return true;
      if (this.step == 2) if (this.valid2 == false) return true;
      return false;
    }
  }
};
</script>
