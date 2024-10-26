import { createApp } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

createInertiaApp({
    resolve: name => import(`./components/${name}.vue`),
    setup({ el, App, props }) {
        const app = createApp(App, props);
        app.mount(el);
    },
});
