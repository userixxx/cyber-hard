<template>
  <header>
    <div class="row mt-4">
      <div class="col-md-4 col-lg-5 col-xl-6 title_logo">ICM</div>
      <div class="col-md-7 col-lg-6 col-xl-5">
        <div class="navbar-custom">
          <div class="topbar">
            <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">
              <!-- Sidebar Menu Toggle Button -->
              <button class="button-toggle-menu">
                <i class="mdi mdi-menu"></i>
              </button>
            </div>

            <ul class="topbar-menu d-flex align-items-center gap-4">
              <li class="d-none d-md-inline-block">
                <a class="nav-link" href="#" data-bs-toggle="fullscreen">
                  <i class="mdi mdi-fullscreen font-size-24"></i> {{ $t('fullscreen') }}
                </a>
              </li>


              <li class="dropdown d-md-inline-block">
                <a
                    class="nav-link dropdown-toggle waves-effect waves-light arrow-none"
                    @click.prevent="toggleDropdown"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                >
                  <img :src="languageStore.currentFlag" :alt="languageStore.currentLang" class="me-0 me-sm-1" height="18">
                </a>
                <div :class="['dropdown-menu', 'dropdown-menu-end', 'dropdown-menu-animated', { show: languageStore.dropdownVisible }]">
                  <a @click.prevent="changeLanguage('en')" class="dropdown-item">
                    <img src="/public/img/flags/en.jpg" alt="de-flag" class="me-1" height="12">
                    <span class="align-middle">English</span>
                  </a>
                  <a @click.prevent="changeLanguage('de')" class="dropdown-item">
                    <img src="/public/img/flags/de.jpg" alt="de-flag" class="me-1" height="12">
                    <span class="align-middle">German</span>
                  </a>
                  <a @click.prevent="changeLanguage('it')" class="dropdown-item">
                    <img src="/public/img/flags/it.jpg" alt="italian-flag" class="me-1" height="12">
                    <span class="align-middle">Italian</span>
                  </a>
                  <a @click.prevent="changeLanguage('es')" class="dropdown-item">
                    <img src="/public/img/flags/es.jpg" alt="spanish-flag" class="me-1" height="12">
                    <span class="align-middle">Spanish</span>
                  </a>
                  <a @click.prevent="changeLanguage('ru')" class="dropdown-item">
                    <img src="/public/img/flags/ru.jpg" alt="russian-flag" class="me-1" height="12">
                    <span class="align-middle">Russian</span>
                  </a>
                </div>
              </li>

              <li class="nav-link" id="theme-mode">
                <i class="bx bx-moon font-size-24"></i>
              </li>

              <li class="dropdown">
                <a
                    class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-haspopup="false"
                    aria-expanded="false"
                >
                  <img src="/public/img/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                  <span class="ms-1 d-none d-md-inline-block">Jamie D. <i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                  <div class="dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome!</h6>
                  </div>
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-user"></i><span>My Account</span>
                  </a>
                  <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="fe-settings"></i><span>Settings</span>
                  </a>
                  <a class="dropdown-item notify-item" href="/dashtrap/pages-lock-screen">
                    <i class="fe-lock"></i><span>Lock Screen</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item notify-item" href="/dashtrap/pages-login">
                    <i class="fe-log-out"></i><span>Logout</span>
                  </a>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import { usePage } from '@inertiajs/inertia-vue3';
import { useLanguageStore } from '../../stores/useLanguageStore';
import i18n from '../../i18n';

export default {
  name: "Header",
  setup() {
    const languageStore = useLanguageStore();
    const page = usePage();

    // Устанавливаем язык из props при загрузке
    const currentLang = page.props.value.currentLang || 'ru'; // Дефолтный язык

    // Синхронизируем локаль i18n с текущим языком
    if (i18n.global.locale !== currentLang) {
      i18n.global.locale = currentLang;
    }

    languageStore.currentLang = currentLang;
    languageStore.currentFlag = `/img/flags/${currentLang}.jpg`;

    const toggleDropdown = () => {
      languageStore.dropdownVisible = !languageStore.dropdownVisible;
    };

    const changeLanguage = async (lang) => {
      await languageStore.changeLanguage(lang); // Меняем язык
      languageStore.dropdownVisible = false; // Закрываем выпадающее меню
    };


    return {
      languageStore,
      toggleDropdown,
      changeLanguage,
    };
  },
};
</script>

<style scoped>
.title_logo {
  text-align: center;
  font-weight: bold;
  color: #000;
  font-size: 32px;
}

.navbar-custom {
  top: 0;
  position: sticky;
  z-index: 1000;
  background: var(--topbar-bg);
  min-height: var(--topbar-height);
  transition: var(--transition-base);
  border-bottom: var(--border-width) solid var(--border-color);
}

.navbar-custom .topbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  padding: 0 var(--spacer);
}

.navbar-custom .topbar ul {
  list-style-type: none;
  margin-bottom: 0;
}

.navbar-custom .topbar li {
  max-height: var(--topbar-height);
}

.navbar-custom .topbar li .nav-link.show {
  color: var(--topbar-item-hover-color);
}

.navbar-custom .topbar .nav-link {
  padding: 0;
  position: relative;
  color: var(--topbar-item-color);
  display: flex;
  align-items: center;
  height: var(--topbar-height);
  cursor: pointer;
  border-radius: 9999px;
}

.navbar-custom .topbar .nav-link:hover {
  color: var(--topbar-item-hover-color);
}

.nav-user {
  padding: 0 12px !important;
}

.nav-user img {
  height: 32px;
  width: 32px;
}

html[data-topbar-color="brand"] .navbar-custom .logo-box .logo-light,
html[data-topbar-color="dark"] .navbar-custom .logo-box .logo-light,
html[data-bs-theme="dark"] .navbar-custom .logo-box .logo-light {
  display: block;
}

html[data-topbar-color="brand"] .navbar-custom .logo-box .logo-dark,
html[data-topbar-color="dark"] .navbar-custom .logo-box .logo-dark,
html[data-bs-theme="dark"] .navbar-custom .logo-box .logo-dark {
  display: none;
}

html[data-bs-theme="dark"] #light-dark-mode .bx-moon::before {
  content: "\ec34";
}

.button-toggle-menu {
  border: none;
  color: var(--topbar-item-color);
  width: 60px;
  background-color: transparent;
  font-size: 24px;
  cursor: pointer;
  z-index: 1;
  position: relative;
}

.fullscreen-enable .fe-maximize::before {
  content: "\e88d";
}

@media (max-width: 375px) {
  .navbar-custom .button-toggle-menu {
    width: auto;
  }

  .navbar-custom .logo-box {
    display: none !important;
  }
}

@media (max-width: 576px) {
  .navbar-custom .topbar-menu {
    position: initial;
  }

  .navbar-custom .dropdown {
    position: static;
  }

  .navbar-custom .dropdown .dropdown-menu {
    left: 10px !important;
    right: 10px !important;
  }
}

@media (max-width: 768px) {
  .navbar-custom {
    padding: 0 calc(var(--spacer) * 0.5);
  }

  .navbar-custom .logo-box {
    display: flex;
  }

  .navbar-custom .logo-box .logo-lg {
    display: none;
  }

  .navbar-custom .logo-box .logo-sm {
    display: block;
  }
}

@media (min-width: 1200px) {
  .navbar-custom .logo-box {
    display: none;
  }
}

.dropdown-menu {
  display: block;
  position: absolute;
  top: 100%;
  left: auto;
  right: 0;
  margin-top: 5px;
  visibility: hidden;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.dropdown-menu.show {
  visibility: visible;
  opacity: 1;
}
.dropdown-item {
  cursor: pointer;
}

.navbar-custom .dropdown-menu-animated {
  animation: fadeIn 0.3s;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
</style>
