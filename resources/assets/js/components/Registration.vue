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
                <v-form ref="form" v-model="valid">
                    <v-text-field outline label="Login"  append-icon="person" required :rules="loginRules" v-model="login"></v-text-field>
                    <v-text-field outline label="E-mail" append-icon="mail" required :rules="emailRules" v-model="mail"></v-text-field>
                    <v-text-field outline label="Password" @click:append="show1 = !show1" :append-icon="show1 ? 'visibility_off' : 'visibility'" :type="show1 ? 'text' : 'password'" required v-model="password" :rules="passwordRules"></v-text-field>
                    <v-text-field outline label="Confrim" @click:append="show2 = !show2" :append-icon="show2 ? 'visibility_off' : 'visibility'" :type="show2 ? 'text' : 'password'" required v-model="confrim_password"></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn flat color="primary" to="/login">Есть аккаунт?</v-btn>
                <v-btn color="primary" :disabled="!valid" @click="submit">Отправить</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>    
</template>
<script>
export default {
  data: () => ({
    valid: false,
    login: "",
    show1: false,
    show2: false,
    password: "",
    confrim_password: "",
    mail: "",
    loginRules: [
      v => !!v || "Name is required",
      v => (v && v.length <= 10) || "Name must be less than 10 characters"
    ],
    email: "",
    emailRules: [
      v => !!v || "E-mail is required",
      v => /.+@.+/.test(v) || "E-mail must be valid"
    ],
    passwordRules: [
      v => !!v || "Password is required",
      v =>{ v === this.confrim_password ||
        "Password and Confrim not equals"}
    ]
  }),
  methods: {
    submit() {}
  }
};
</script>

