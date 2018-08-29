<template>
    <v-container>
        <v-layout justify-center align-center>
            <v-flex :xs6="!mobile">
                <h3>Новости</h3>
                <ul class="news">
                    <li>
                        <v-card>
                            <v-img src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" height="200px">
                            </v-img>

                            <v-card-title primary-title>
                                <div>
                                    <div class="headline">Top western road trips</div>
                                    <span class="grey--text">1,000 miles of wonder</span>
                                </div>
                            </v-card-title>

                            <v-card-actions>
                                <v-btn flat>Share</v-btn>
                                <v-btn flat color="purple">Explore</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn icon @click="show = !show">
                                    <v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
                                </v-btn>
                            </v-card-actions>

                            <v-slide-y-transition>
                                <v-card-text v-show="show">
                                    I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier,
                                    not with all the bed making you'll be doing. Then we'll go with that data file! Hey,
                                    you add a one and two zeros to that or we walk! You're going to do his laundry? I've
                                    got to find a way to escape.
                                </v-card-text>
                            </v-slide-y-transition>
                        </v-card>
                    </li>
                    <li>
                        <v-card>
                            <v-img src="https://cdn.vuetifyjs.com/images/cards/sunshine.jpg" height="200px">
                            </v-img>

                            <v-card-title primary-title>
                                <div>
                                    <div class="headline">Top western road trips</div>
                                    <span class="grey--text">1,000 miles of wonder</span>
                                </div>
                            </v-card-title>

                            <v-card-actions>
                                <v-btn flat>Share</v-btn>
                                <v-btn flat color="purple">Explore</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn icon @click="show = !show">
                                    <v-icon>{{ show ? 'keyboard_arrow_down' : 'keyboard_arrow_up' }}</v-icon>
                                </v-btn>
                            </v-card-actions>

                            <v-slide-y-transition>
                                <v-card-text v-show="show">
                                    I'm a thing. But, like most politicians, he promised more than he could deliver. You won't have time for sleeping, soldier,
                                    not with all the bed making you'll be doing. Then we'll go with that data file! Hey,
                                    you add a one and two zeros to that or we walk! You're going to do his laundry? I've
                                    got to find a way to escape.
                                </v-card-text>
                            </v-slide-y-transition>
                        </v-card>
                    </li>
                    <li>
                        <v-card>
                            <v-card-media src="https://cdn.vuetifyjs.com/images/cards/desert.jpg" height="200px"></v-card-media>

                            <v-card-title primary-title>
                                <div>
                                    <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                                    <div>Located two hours south of Sydney in the <br>Southern Highlands of New South Wales,
                                        ...
                                    </div>
                                </div>
                            </v-card-title>

                            <v-card-actions>
                                <v-btn flat color="orange">Share</v-btn>
                                <v-btn flat color="orange">Explore</v-btn>
                            </v-card-actions>
                        </v-card>
                    </li>
                </ul>
            </v-flex>
        </v-layout>
    </v-container>
</template>
<script>
import { mapGetters } from "vuex";
export default {
  data: () => ({
    show: false
  }),
  computed: {
    ...mapGetters({
      windowWidth: "config/windowWidth"
    }),
    mobile() {
      if (this.windowWidth > 993) return false;
      else return true;
    }
  }
};
</script>

<style scoped>
.container.fill-height > .layout {
  align-items: baseline;
}

.news li {
  padding: 15px 0;
  min-width: 40vw;
  max-width: 100%;
}

.news {
  width: 100%;
}
</style>