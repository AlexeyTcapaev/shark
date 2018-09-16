<template>
    <v-container>
        <v-layout justify-center align-center>
            <v-flex xl6 lg6 md6 sm12 xs12>
                <v-card>
                   <v-avatar
                    :tile="tile"
                    :size="avatarSize"
                    color="grey lighten-4"
                    >
                    <input type="file" @change="onFileChange" accept="image/jpeg,image/png,image/gif" class="file" ref="file">
                    <v-icon v-if="!Company.logo" alt="avatar">add_circle_outline</v-icon>
                    <img v-else :src="Company.logo">
                    </v-avatar>
                    <v-card-title primary-title>
                        <v-flex row>
                            <v-alert v-model="alert.enable" type="error" dismissible>{{alert.message}}</v-alert>
                            <v-layout align-center justify-center row fill-height wrap>
                              <v-flex xl3 md12 sm12>
                                <v-select
                                    v-model="Company.type"
                                    :items="types"
                                    outline
                                    offset-y
                                    label="Тип юридического лица"
                                    item-text="name"
                                    item-value="name"
                                ></v-select>
                              </v-flex>
                              <v-flex xl8 offset-xl1 md12 sm12>
                                <v-text-field outline label="Название компании" append-icon="business" v-model="Company.name"></v-text-field>
                              </v-flex>
                            </v-layout>
                            <v-text-field outline label="Сайт компании" append-icon="web" v-model="Company.website"></v-text-field>
                            <v-autocomplete v-if="switch1 == false"
                                v-model="Company.activities"
                                :items="activities"
                                outline
                                chips
                                label="Сферы деятельности"
                                item-text="name"
                                item-value="name"
                                multiple
                            >
                                <template
                                slot="selection"
                                slot-scope="data"
                                >
                                <v-chip
                                    :selected="data.selected"
                                    close
                                    class="chip--select-multi"
                                    @input="remove(data.item)"
                                >
                                    <!--<v-avatar>
                                    <img :src="data.item.avatar">
                                    </v-avatar>-->
                                    {{ data.item.name }}
                                </v-chip>
                                </template>
                                <template
                                slot="item"
                                slot-scope="data"
                                >
                                <template v-if="typeof data.item !== 'object'">
                                    <v-list-tile-content v-text="data.item"></v-list-tile-content>
                                </template>
                                <template v-else>
                                    <!--<v-list-tile-avatar>
                                    <img :src="data.item.avatar">
                                    </v-list-tile-avatar>-->
                                    <v-list-tile-content>
                                    <v-list-tile-title v-html="data.item.name"></v-list-tile-title>
                                    <v-list-tile-sub-title v-html="data.item.group"></v-list-tile-sub-title>
                                    </v-list-tile-content>
                                </template>
                                </template>
                            </v-autocomplete>
                            <v-text-field v-else chips outline label="Введите свой вариант сферы деятельности"  v-model="NewActivity" append-icon="add"  @click:append="AddActivity" @keyup.enter="AddActivity"></v-text-field>
                            <ul class="chips-list">
                                <li v-for="(activity,index) in NewActivities" :key="index">
                                    <v-chip
                                    close
                                    class="chip--select-multi"
                                    @input="removeInActivities(index)"
                                    >
                                    <!--<v-avatar>
                                    <img :src="data.item.avatar">
                                    </v-avatar>-->
                                    {{ activity.name }}
                                </v-chip>
                                </li>
                            </ul>
                             <v-switch
                              label="Нет подходящего варианта"
                              v-model="switch1"
                              color="primary"
                              :disabled="Company.activities.length > 0"
                              @change="ResetNewActivities"
                              ></v-switch>
                        </v-flex>
                    </v-card-title>
                       <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="secondary" @click="submit">Создать</v-btn>
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
    Company: {
      name: "",
      activities: [],
      logo: undefined,
      type: {
        name: "ООО"
      }
    },
    alert: {
      enable: false
    },
    NewActivity: "",
    NewActivities: [],
    activities: [
      {
        name: "IT"
      },
      {
        name: "Проектирование"
      }
    ],
    types: [
      {
        name: "ООО"
      },
      {
        name: "ОАО"
      },
      {
        name: "АО"
      },
      {
        name: " ПАО"
      },
      {
        name: " ИП"
      }
    ]
  }),
  methods: {
    ...mapActions({ AddCompany: "user/AddCompany" }),
    remove(item) {
      console.log(item);
      const index = this.Company.activities.indexOf(item.name);
      if (index >= 0) this.Company.activities.splice(index, 1);
    },
    removeInActivities(index) {
      this.NewActivities.splice(index, 1);
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
    ResetNewActivities() {
      if (this.NewActivities.length > 0) this.NewActivities = [];
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
    },
    AddActivity() {
      this.NewActivities.push({ name: this.NewActivity });
      this.NewActivity = "";
    }
  },
  computed: {
    ...mapGetters({
      user: "user/GetUserId"
    })
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
.v-card {
  margin: 128px 0 0 0;
}
.v-card .v-avatar {
  cursor: pointer;
}
.chips-list {
  display: flex;
  flex-wrap: wrap;
}
</style>
