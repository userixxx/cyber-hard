import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js'; // Необязательно, если нужен JavaScript функционал Bootstrap
import AppLayout from './App.vue'; // Убедитесь, что App.vue импортирован

createInertiaApp({
    resolve: async name => {
        let page = await import(`./${name}.vue`);

        // Устанавливаем App.vue как обертку по умолчанию для всех страниц
        page.default.layout = page.default.layout || AppLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});
