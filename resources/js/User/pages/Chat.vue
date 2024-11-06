<template>
  <div class="container">
    <div class="name_sender">Анатолий</div>
    <div class="activity">
      <div class="status_sender">Online</div>
      <div class="poin_activity"></div>
    </div>
    <div class="input-container">
      <span class="icon clip-icon"></span>
      <input
          type="text"
          placeholder="Введите текст..."
          v-model="messageText"
          @keyup.enter="sendMessage"
      />
      <span class="icon mic-icon"></span>
    </div>

    <div v-if="responseText" class="response">
      Ответ: {{ responseText }}
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      messageText: '',
      responseText: '',
    };
  },
  methods: {
    async sendMessage() {
      if (!this.messageText) return;

      try {
        const response = await axios.post('/api/generate-text', { text: this.messageText });
        this.responseText = response.data; // вывод ответа от API
      } catch (error) {
        console.error("Ошибка при отправке сообщения:", error);
      } finally {
        this.messageText = ''; // Очистка поля после отправки
      }
    }
  }
};
</script>

<style>
/* Оставьте стили без изменений, они подходят */
.input-container {
  position: fixed;
  bottom: 70px;
  left: 0;
  right: 0;
  display: flex;
  align-items: center;
  padding: 10px;
  background-color: #fff;
  box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
  z-index: 100; }
.input-container input {
  flex: 1;
  padding: 10px 40px;
  border: 1px solid #ccc;
  border-radius: 20px;
  outline: none; }
.input-container .icon {
  position: absolute;
  width: 25px;
  height: 25px;
  background-size: contain;
  background-repeat: no-repeat; }
.input-container .icon.clip-icon {
  left: 20px;
  background-image: url("/img/logo/attachments-02.svg"); }
.input-container .icon.mic-icon {
  right: 20px;
  background-image: url("/img/logo/mic-on.svg"); }

.activity {
  display: flex;
  justify-content: center; }

.name_sender {
  text-align: center; }

.poin_activity {
  height: 5px;
  width: 5px;
  background-color: #04e004;
  border-radius: 100%; }

.response {
  margin-top: 10px;
  padding: 10px;
  color: #fff;
  font-weight: bold;
  background-color: #1181f1;
  border-radius: 8px;
}
</style>
