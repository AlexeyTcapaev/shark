<template>
        <v-layout class="chat-wrapper">
            <v-flex xs12 justify-center align-center>
               <div class="chat-head">
                   <v-btn @click="toggleChat" flat><v-icon>question_answer</v-icon>Чаты</v-btn>
                    <div>
                        <v-avatar>
                            <v-icon v-if="!$store.state.user.user.avatar">account_circle</v-icon>
                            <img v-else :src="'/storage/uploads/'+$store.state.user.user.avatar" :alt="$store.state.user.user.name">
                        </v-avatar>
                        {{$store.state.user.user.name}}
                    </div>
                    <p>{{new Date().toLocaleString('ru')}}</p>
                </div>
                <div class="chat-body">
                    <v-container fluid>
                        <template v-for="(message,index) in Messages">
                            <div :key="index" class="message-line"  :class="{whois: user.id == message.creator.id ? true : false}">
                                <div class="message-bubble">
                                    <div class="message-sender-img" v-if="user.id !== message.creator.id">
                                        <img src="https://ptetutorials.com/images/user-profile.png" :alt="message.creator.name">
                                    </div>
                                    <div class="message-content">
                                        <p>{{message.message}}</p>
                                        <span>{{message.created_at.toLocaleString("ru")}}</span>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </v-container>
                </div>
                <div class="chat-footer">
                    <v-container fluid>
                         <v-text-field v-model="newMessage" outline label="Сообщение" append-icon="send" @click:append="SendMessage"></v-text-field>
                    </v-container>
                </div>
            </v-flex>
        </v-layout>
</template>
<style scoped>
.message-content p {
  background: #ebebeb none repeat scroll 0 0;
  border-radius: 3px;
  color: black;
  font-size: 14px;
  margin: 0;
  padding: 5px 10px 5px 12px;
  width: 100%;
}
.message-content span {
  color: #747474;
  display: block;
  font-size: 12px;
  text-align: left;
  margin: 8px 0 0;
}
.message-line {
}
.whois * {
}
.whois {
  display: flex;
  justify-content: flex-end;
}
.message-sender-img {
  padding: 0 10px 0 0;
}
.message-sender-img img {
  width: 56px;
  height: 56px;
}
.message-bubble {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  max-width: 60%;
  margin: 5px 0;
}
.chat-wrapper {
  width: 100%;
  height: 100%;
}
.chat-head {
  width: 100%;
  align-items: center;
  justify-content: space-between;
  padding: 15px;
  flex-wrap: nowrap;
  display: flex;
  background-color: #ffffff;
}
.chat-head p{
    margin: 0;
    font-weight: bold;
}
.chat-body {
  width: 100%;
  height: 100%;
}
.flex {
  display: flex;
  flex-direction: column;
}
.chat-footer {
  background-color: #ffffff;
  width: 100%;
}
</style>
<script>
import { mapGetters } from "vuex";
export default {
  data: () => ({
    Messages: [
      {
        creator: { id: 3, name: "123" },
        message: "its a test message",
        created_at: "",
        status: ""
      }
    ],
    newMessage: ""
  }),
  methods: {
    SendMessage() {
      if (this.newMessage !== "" || this.newMessage !== " ")
        this.Messages.push({
          creator: this.user,
          message: this.newMessage,
          created_at: new Date(),
          status: "new"
        });
    },
    toggleChat() {
      this.$emit("toggleChat");
    }
  },
  computed: {
    ...mapGetters({ user: "user/GetUser" })
  }
};
</script>
