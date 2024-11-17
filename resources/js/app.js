import { createApp, h } from 'vue';
import { createPinia } from 'pinia';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AppLayout from './App.vue';
import i18n from './i18n';

const pinia = createPinia();

const components = {
    Header: () => import('./User/components/Header.vue'),
    Chat: () => import('./User/pages/Chat.vue'),
    Home: () => import('./User/pages/Home.vue'),
    FooterNavbar: () => import('./User/components/FooterNavbar.vue'),
};

createInertiaApp({
    resolve: async name => {
        const cleanName = name.split('/').pop();

        if (components[cleanName]) {
            let page = await components[cleanName]();
            page.default.layout = page.default.layout || AppLayout;
            return page;
        } else {
            throw new Error(`Компонент ${cleanName} не найден в маппинге.`);
        }
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(pinia)
            .use(i18n)
            .mount(el);
    },
});
