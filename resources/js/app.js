require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('landing-header', require('./components/landing-header.vue').default);
Vue.component('landing-body', require('./components/landing-body.vue').default);
Vue.component('landing-footer', require('./components/landing-footer.vue').default);
Vue.component('header-component', require('./components/header.vue').default);
Vue.component('signup-component', require('./components/signup.vue').default);

const app = new Vue({
    el: '#app',
});
