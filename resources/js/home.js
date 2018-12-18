window.Vue = require('vue');

require('bootstrap-vue');
require('vue-scrollto');
var VueCookie = require('vue-cookie');
Vue.use(VueCookie);
Vue.component('home-template',require('./components/HomePage'));

const home = new Vue({
    el: '#home'
});
