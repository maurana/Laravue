import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

// const Admin = {template: '<div>foo</div>'}
// const Testing = {template: '<div>bar</div>'}

const router = new VueRouter({
    mode: 'history',
    base: '/',
    routes: [
        {
            path: '/admin',
            component: require('./../components/Admin.vue').default
        },
        {
            path: '/testing',
            component: require('./../components/Testing.vue').default
        }
    ]
});

new Vue({
    router
}).$mount('#app');