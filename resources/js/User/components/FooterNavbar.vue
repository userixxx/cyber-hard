<template>
  <div class="container">
    <div class="sticky-footer">
      <div class="footer-nav">
        <button class="nav-button central-button" @click="navigateTo('/chat')">
          <img src="/public/img/logo/navfooter/volume 1.svg" alt="Central Icon">
        </button>
        <button class="nav-button" @click="toggleMenu">
          <img src="/public/img/logo/navfooter/menu-add.svg" alt="Icon 5">
        </button>
        <div v-if="isMenuVisible" class="popup-menu">
          <ul>
            <li><a href="/flag">Жилье</a></li>
            <li><a href="/hackathon-page">Хакатоны/Стажировки</a></li>
            <li><a href="/travel-card">Путешествия</a></li>
            <li><a href="/news">Новости</a></li>
            <li><a href="/schedule-card">Расписание</a></li>
            <li><a href="/user-sections">Профиль</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {Inertia} from "@inertiajs/inertia";

export default {
  name: "FooterNavbar",
  data() {
    return {
      isMenuVisible: false,
    };
  },
  methods: {
    navigateTo(route) {
      Inertia.visit(route);
    },
    toggleMenu() {
      this.isMenuVisible = !this.isMenuVisible;
    },
  },
};
</script>

<style scoped>
/* Ваши стили остаются теми же */
.sticky-footer {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: auto;
  max-width: 400px;
  height: 80px;
  z-index: 1030;
  padding: 0;
  margin-top: 20px;
}
.sticky-footer .footer-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 100%;
  width: 100%;
  padding: 0 30px;
}
.sticky-footer .footer-nav .nav-button {
  background: transparent;
  border: none;
  padding: 0;
  cursor: pointer;
  margin: 0 10px;
}
.sticky-footer .footer-nav .nav-button img {
  width: 40px;
  height: 40px;
}
.sticky-footer .footer-nav .central-button {
  transition: transform 0.5s ease;
}
.sticky-footer .footer-nav .central-button img {
  width: 60px;
  height: 60px;
}
@media (max-width: 768px) {
  .sticky-footer {
    left: 0;
    transform: none;
    width: 100vw;
    max-width: none;
    padding: 0 10px;
    margin-top: 0;
  }
  .sticky-footer .footer-nav {
    padding: 0;
  }
  .sticky-footer .footer-nav .nav-button {
    margin: 0;
  }
}
.central-button.active {
  transform: scale(1.5);
}
/* Стили для всплывающего меню */
.popup-menu {
  position: absolute;
  bottom: 100%; /* Показываем меню над кнопкой */
  left: 50%;
  transform: translateX(-50%);
  border: 1px solid #ddd;
  background-color: darkslategray;
  border-radius: 20px;
  padding: 10px 60px;
  z-index: 1040;
  transition: all .2s ease;
}
.popup-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}
.popup-menu li {
  margin: 5px 0;
}
.popup-menu a {
  color: #fff;
  text-decoration: none;
  font-size: 14px;
}
.popup-menu a:hover {
  text-decoration: underline;
}
</style>
