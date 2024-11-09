<template>
    <header>
        <div class="row mt-4">
            <div class="col-md-4 col-lg-5 col-xl-6 title_logo" @click="navigateTo('/user-sections')">ICM</div>
            <div class="col-md-7 col-lg-6 col-xl-5 ">
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
                      <a class="nav-link" href="" data-bs-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen font-size-24"></i>
                      </a>
                    </li>



                    <li class="dropdown d-none d-md-inline-block">
                      <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/public/img/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18">
                      </a>
                      <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="/public/img/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="/public/img/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="/public/img/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">
                          <img src="/public/img/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                        </a>

                      </div>
                    </li>

                    <li class="nav-link" id="theme-mode">
                      <i class="bx bx-moon font-size-24"></i>
                    </li>

                    <li class="dropdown">
                      <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="/public/img/users/avatar-4.jpg" alt="user-image" class="rounded-circle">
                        <span class="ms-1 d-none d-md-inline-block">
                                    Jamie D. <i class="mdi mdi-chevron-down"></i>
                                </span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                          <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-user"></i>
                          <span>My Account</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                          <i class="fe-settings"></i>
                          <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a class="dropdown-item notify-item" href="/dashtrap/pages-lock-screen">
                          <i class="fe-lock"></i>
                          <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a class="dropdown-item notify-item" href="/dashtrap/pages-login">
                          <i class="fe-log-out"></i>
                          <span>Logout</span>
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
import {Inertia} from "@inertiajs/inertia";

export default {
  name: "Header",

  methods: {
    navigateTo(route) {
      Inertia.visit(route);
    },
  },
}

</script>

<style>
.navbar-custom {
  top: 0;
  position: sticky;
  z-index: 1000;
  background: var(--topbar-bg);
  min-height: var(--topbar-height);
  transition: var(--transition-base);
  border-bottom: var(--border-width) solid var(--border-color);

  .topbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 0 auto;
    padding: 0 var(--spacer);

    ul {
      list-style-type: none;
      margin-bottom: 0;
    }

    li {
      max-height: var(--topbar-height);

      .nav-link.show {
        color: var(--topbar-item-hover-color);
      }
    }

    .nav-link {
      padding: 0;
      position: relative;
      color: var(--topbar-item-color);
      display: flex;
      align-items: center;
      height: var(--topbar-height);
      cursor: pointer;
      border-radius: 9999px;

      &:hover {
        color: var(--topbar-item-hover-color);
      }
    }
  }
}

.nav-user {
  padding: 0 12px !important;

  img {
    height: 32px;
    width: 32px;
  }
}

html[data-topbar-color="brand"],
html[data-topbar-color="dark"],
html[data-bs-theme="dark"] {
  .navbar-custom .logo-box .logo-light {
    display: block;
  }

  .navbar-custom .logo-box .logo-dark {
    display: none;
  }
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

    .dropdown-menu {
      left: 10px !important;
      right: 10px !important;
    }
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

</style>