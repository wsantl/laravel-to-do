import { createRouter, createWebHistory } from 'vue-router';
import Login from '../components/Login.vue';

const routes = [
    { path: '/login', component: Login, name: 'login' },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;