<template>
  <div class="dashboard-container">
    <h1 class="dashboard-title">Список сайтов</h1>

    <div v-if="sites && sites.length" class="site-list">
      <ul>
        <li v-for="(site, index) in sites" :key="index" @click="goToDetail(site.name)" class="clickable-site">
          <p>{{ site.name }}</p>
        </li>
      </ul>
    </div>

    <div v-else class="no-data">
      <p>Нет доступных сайтов.</p>
    </div>
  </div>
</template>

<script setup>
import { usePage } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';

const props = usePage().props;
const sites = ref(props.value.sites || []);

const goToDetail = (siteName) => {
  const currentDate = new Date().toISOString().split('T')[0];
  Inertia.visit(`/card-detail/${siteName}/${currentDate}`);
};
</script>

<style scoped>
.dashboard-container {
  max-width: 900px;
  margin: 50px auto;
  padding: 30px;
  background-color: #f9f9f9;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.dashboard-title {
  text-align: center;
  font-size: 2.5rem;
  color: #2c3e50;
  margin-bottom: 30px;
  font-weight: bold;
}

.site-list ul {
  list-style-type: none;
  padding: 0;
}

li.clickable-site {
  cursor: pointer;
  padding: 15px;
  background-color: #ecf0f1;
  margin: 10px 0;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: background-color 0.2s ease, transform 0.2s ease;
}

li.clickable-site:hover {
  background-color: #bdc3c7;
  transform: scale(1.02);
}

li.clickable-site p {
  margin: 0;
  font-size: 1.2rem;
  color: #34495e;
  font-weight: 500;
}

.no-data {
  text-align: center;
  font-size: 1.5rem;
  color: #7f8c8d;
}
</style>
