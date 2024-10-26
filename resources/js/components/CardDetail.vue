<template>
  <div class="site-detail-container">
    <h1>Детальная страница для {{ siteName }}</h1>
    <p>Дата: {{ date }}</p>

    <div v-if="data && data.length">
      <ul>
        <li v-for="(item, index) in data" :key="index">
          <p>{{ item.name }} - {{ item.price.value }} {{ item.price.currency }}</p>
        </li>
      </ul>
    </div>
    <div v-else>
      <p>Нет данных для отображения.</p>
    </div>

    <!-- Кнопка "Главная" -->
    <button @click="goHome" class="home-button">Главная</button>
  </div>
</template>

<script setup>
import { Inertia } from '@inertiajs/inertia';
import { usePage } from '@inertiajs/inertia-vue3';

const props = usePage().props;
const siteName = props.value.siteName;
const date = props.value.date;
const data = props.value.data || [];

const goHome = () => {
  Inertia.visit('/dashboard');
};
</script>

<style scoped>
.site-detail-container {
  max-width: 900px;
  margin: 50px auto;
  padding: 30px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.home-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #3498db;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 20px;
  transition: background-color 0.3s ease;
}

.home-button:hover {
  background-color: #2980b9;
}

h1 {
  color: #2c3e50;
  font-size: 2rem;
  margin-bottom: 15px;
}

ul {
  list-style-type: none;
  padding: 0;
}

ul li {
  padding: 10px;
  background-color: #ecf0f1;
  margin-bottom: 10px;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

ul li:hover {
  background-color: #bdc3c7;
}
</style>
