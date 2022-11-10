const { createRouter, createWebHistory } = require('vue-router');

const Secret = () => import('./components/Secret.vue');

const Crear = () => import('./components/Crear.vue');

//rutas a componentes
const routes = [
    {
        name: 'secrets',
        path: '/secrets',
        component : Secret
    },
    {
        name: 'crear',
        path: '/crear',
        component : Crear
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;