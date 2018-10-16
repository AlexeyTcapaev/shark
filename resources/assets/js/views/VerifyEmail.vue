<template>
    <v-container>
        <v-layout justify-center align-center>
            <v-flex xl6 lg6 md6 sm12 xs12>
                <v-card class="elevation-12">
                    <v-toolbar dark color="primary">
                        <v-toolbar-title>Подтверждение почты</v-toolbar-title>
                        <v-spacer></v-spacer>
                    </v-toolbar>
                    <v-card-text>
                        <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn color="secondary" to="/app">На главную</v-btn>
                    </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
export default {
  data: () => ({
    show: false,
    alert: {
      enable: false
    }
  }),
  beforeCreate() {
    const init = this;
    axios
      .post("/api/auth/verify", {
        token: init.$route.params.token
      })
      .then(function(resp) {
        init.alert.message = resp.data.message;
        init.alert.enable = true;
      })
      .catch(error => {
        init.alert.message = error.response.data.message;
        init.alert.enable = true;
      });
  }
};
</script>
