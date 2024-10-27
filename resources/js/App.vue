<template>
  <div id="app">
    <!-- Общий хедер -->
    <Header />

    <!-- Основной контент страницы -->
    <slot />

    <!-- Общий футер -->
    <Footer />
  </div>
</template>

<script setup>
import Header from './User/components/Header.vue';
import Footer from './User/components/FooterNavbar.vue';
</script>

<style scoped>
/* Общие стили, если есть */
</style>
