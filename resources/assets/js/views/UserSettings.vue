<template>
    <v-container>
        <v-layout justify-center align-center>
            <v-flex xl6 lg6 md6 sm12 xs12>
                <v-card class="margin-card">
                   <v-avatar
                    :tile="tile"
                    :size="avatarSize"
                    color="grey lighten-4"
                    >
                        <input type="file" @change="onFileChange" accept="image/jpeg,image/png,image/gif" class="file" ref="file">
                        <v-icon v-if="avatar.url== null" alt="avatar">add_circle_outline</v-icon>
                        <img v-else :src="avatar.url">
                    </v-avatar>
                    <v-card-title primary-title>
                        <v-flex row>
                            <v-text-field outline label="Логин" append-icon="account_circle" v-model="user.name"></v-text-field>
                            <v-text-field outline label="E-mail" append-icon="mail" v-model="user.email"></v-text-field>
                            <div class="verified-mail" v-if="user.verified === 1">
                                <v-icon color="green">verified_user</v-icon>
                                <p>Ваш почтовый адрес подтверждён</p>
                            </div>
                            <div class="verified-mail" v-else>
                                <v-icon color="error">error</v-icon>
                                <p>Ваш почтовый адрес не подтверждён</p>
                            </div>
                        </v-flex>
                    </v-card-title>
                       <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="secondary" @click="submit">Обновить</v-btn>
                        </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
import { mapGetters } from "vuex";
import { mapActions } from "vuex";
export default {
  data: () => ({
    show: false,
    avatarSize: 256,
    tile: true,
    switch1: false,
    avatar: {
      url: undefined
    },
    alert: {
      enable: false
    }
  }),
  methods: {
    VerifyEmail() {
      axios
        .post("/api/auth/verify_from_site", { id: this.user.id })
        .then(function(resp) {})
        .catch(function(error) {});
    },
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(this.avatar, files[0]);
    },
    createImage(item, file) {
      var image = new Image();
      var reader = new FileReader();
      reader.onload = e => {
        item.url = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function(item) {
      item.image = false;
    },
    submit() {
      this.alert = {
        enable: false
      };
      let data = new FormData();
      data.append("_method", "PATCH");
      data.append("avatar", this.$refs.file.files[0]);
      data.append("name", this.user.name);
      data.append("email", this.user.email);
      const init = this;
      axios
        .post("/api/auth/users/" + this.user.id, data)
        .then(function(resp) {
          console.log(resp);
        })
        .catch(function(error) {
          init.alert.message = error.response.data.message;
          init.alert.enable = true;
          init.alert.type = "error";
        });
    }
  },
  computed: {
    ...mapGetters({
      user: "user/GetUser"
    })
  },
  beforeCreate() {},
  mounted() {
    if (this.user.avatar !== null) {
      this.avatar.url = "/storage/uploads/" + this.user.avatar;
    }
  }
};
</script>
<style scoped>
.margin-card{
    margin: 128px 0 0 0;
}
.verified-mail p {
  margin: 0;
}
.verified-mail {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: center;
}
.verified-mail i {
  margin: 0 10px 0 0;
}
.v-avatar {
  position: absolute;
  left: 25px;
  overflow: hidden;
  box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),
    0 1px 3px 0 rgba(0, 0, 0, 0.12);
  top: -128px;
  border-radius: 50% !important;
  transition: 0.2s linear;
}
.v-avatar img {
  box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),
    0 1px 3px 0 rgba(0, 0, 0, 0.12);
}
.file {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 64px;
  box-shadow: 0 2px 1px -1px rgba(0, 0, 0, 0.2), 0 1px 1px 0 rgba(0, 0, 0, 0.14),
    0 1px 3px 0 rgba(0, 0, 0, 0.12);
  top: 0;
  left: 0;
  cursor: pointer;
  z-index: 4;
  opacity: 0;
}
.v-card__title {
  padding-top: 148px !important;
}

.v-card .v-avatar {
  cursor: pointer;
}
.chips-list {
  display: flex;
  flex-wrap: wrap;
}
</style>
