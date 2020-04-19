

require('./bootstrap');

window.Vue = require('vue');


Vue.component('listplayers-component', require('./components/showPlayersComponent.vue').default);
Vue.component('showwagger-component', require('./components/showWaggerComponent.vue').default);

Vue.component('InfiniteLoading', require('vue-infinite-loading'));


const app = new Vue({
    el: '#app',
});
