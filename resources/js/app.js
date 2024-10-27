import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
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
