import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            path: '/login',
            name: 'login',
            component:  () => import('./Login.vue')
        },
        {
            path: '/register',
            name: 'register',
            component:  () => import('./Register.vue')
        },
        {
            path: '',
            name: 'landing',
            component: () => import('./IndexLanding.vue')
        },

    ]
})

window.addEventListener('popstate', function(event) {

    router.push(event.state.current);
});

export default router
