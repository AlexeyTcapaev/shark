<template>
    <v-container>
        <v-layout justify-center align-center>
            <v-flex xl8 lg8 md10 sm12 xs12>
                <v-card class="company-profile" v-if="Company">
                    <v-avatar :tile="tile" :size="avatarSize" color="grey lighten-4">
                        <input type="file" @change="onFileChange" accept="image/jpeg,image/png,image/gif" class="file"
                            ref="file">
                        <v-icon v-if="!Company.logo" alt="avatar">add_circle_outline</v-icon>
                        <img v-else :src="'/storage/uploads/' + Company.logo">
                    </v-avatar>
                    <v-card-title primary-title>
                        <v-flex row>
                            <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                            <v-text-field outline label="Название компании" append-icon="business" v-model="Company.name"></v-text-field>
                            <v-text-field outline label="Сайт компании" append-icon="web" v-model="Company.website"></v-text-field>
                        </v-flex>
                    </v-card-title>
                </v-card>
                <v-card v-if="Company == undefined">
                    <h1>Компания не найдена.</h1>
                </v-card>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>
import { mapGetters } from "vuex";

export default {
  data: () => ({
    tile: true,
    avatarSize: 256,
    alert: {
      enable: false
    },
        switch1: false,
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
    remove(item) {
      console.log(item);
      const index = this.Company.activities.indexOf(item.name);
      if (index >= 0) this.Company.activities.splice(index, 1);
    },
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length) return;
      this.createImage(this.Company, files[0]);
      this.isActive = false;
    },
    createImage(item, file) {
      var image = new Image();
      var reader = new FileReader();
      reader.onload = e => {
        item.logo = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function(item) {
      item.image = false;
    },
    submit() {
      let data = new FormData();
      data.append("logo", this.$refs.file.files[0]);
      data.append("name", this.Company.name);
      data.append("creator", this.user);
      data.append("website", this.Company.website);
      data.append("activities", JSON.stringify(this.Company.activities));
      const init = this;
      axios
        .post("/api/auth/company", data)
        .then(function(resp) {
          init.AddCompany(resp.data);
        })
        .catch(function(error) {
          init.alert.message = error.response.data.message;
          init.alert.enable = true;
        });
    }
  }
};
</script>
<style scoped>
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
.company-profile {
  margin: 128px 0 0 0;
}
.v-card .v-avatar {
  cursor: pointer;
}
</style>
