<template>
        <v-layout class="chat-wrapper">
            <div class="chat-head">
                <v-btn @click="toggleChat" flat>Диалоги</v-btn>
                <v-spacer></v-spacer>
            </div>
            <v-flex xs12 justify-center align-center>

                <v-icon class="big-i" color="primary">chat_bubble</v-icon>
                <h1>Для начала выберите диалог</h1>
            </v-flex>
        </v-layout>
</template>
<style scoped>
.chat-head {
  width: 100%;
  align-items: center;
  justify-content: space-between;
  padding: 15px;
  flex-wrap: nowrap;
  display: flex;
  background-color: #ffffff;
}
.chat-wrapper {
  width: 100%;
  height: 100%;
  flex-direction: column;
}
.big-i {
  font-size: 300px;
}
.flex {
  display: flex;
  flex-direction: column;
}
</style>
<script>
export default {
  methods: {
    toggleChat() {
      this.$emit("toggleChat");
    }
  }
};
</script>
