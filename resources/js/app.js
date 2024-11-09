import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import AppLayout from './App.vue';

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
            .mount(el);
    },
});
