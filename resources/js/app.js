require('./bootstrap');

import { createApp } from "vue";
import router from './routes.js';


createApp({})
    .component('secret', require('./components/Secret').default)
    .component('crear', require('./components/Crear').default)
    .use(router)
    .mount('#app');


