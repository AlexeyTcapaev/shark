<template>
        <v-layout class="chat-wrapper">
            <div class="chat-head">
                <v-btn @click="toggleChat" flat><v-icon>question_answer</v-icon>Чаты</v-btn>
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
