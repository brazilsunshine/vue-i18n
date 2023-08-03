import './bootstrap';

import Vue from 'vue';
import VueI18n from "vue-i18n";
import i18n from './i18n';
import App from "./components/App";

Vue.use(VueI18n);

new Vue({
    i18n,
    render: h => h(App),
}).$mount('#app');

