const routes = [
    {
        path: '/admin',
        component: require('./components/Admin.vue').default
    },
    {
        path: '/testing',
        component: require('./components/Testing.vue').default
    }
];

export default routes;