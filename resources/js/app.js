/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'

window.Vue.use(VueRouter);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue').default);
Vue.component('passport-clients', require('./components/passport/Clients.vue').default);
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens').default);
Vue.component('api-dashboard', require('./components/api/Dashboard.vue').default);
Vue.component('product-dashboard', require('./components/api/ProductDashboard.vue').default);
Vue.component('supplier-dashboard', require('./components/api/SupplierDashboard.vue').default);
Vue.component('order-detail-dashboard', require('./components/api/OrderDetailDashboard.vue').default);
Vue.component('supplier-product-dashboard', require('./components/api/SupplierProductDashboard.vue').default);
Vue.component('create-order', require('./components/api/CreateOrder.vue').default);
Vue.component('create-product', require('./components/api/CreateProduct.vue').default);
Vue.component('create-supplier', require('./components/api/CreateSupplier.vue').default);
Vue.component('create-order-detail', require('./components/api/CreateOrderDetail.vue').default);
Vue.component('create-supplier-product', require('./components/api/CreateSupplierProduct.vue').default);
Vue.component('update-order', require('./components/api/UpdateOrder.vue').default);
Vue.component('update-supplier', require('./components/api/UpdateSupplier.vue').default);
Vue.component('update-product', require('./components/api/UpdateProduct.vue').default);
Vue.component('update-order-detail', require('./components/api/UpdateOrderDetail.vue').default);
Vue.component('update-supplier-product', require('./components/api/UpdateSupplierProduct.vue').default);
Vue.component('remove-order', require('./components/api/RemoveOrder.vue').default);
Vue.component('remove-product', require('./components/api/RemoveProduct.vue').default);
Vue.component('remove-supplier', require('./components/api/DeleteSupplier.vue').default);
Vue.component('remove-order-detail', require('./components/api/RemoveOrderDetail.vue').default);
Vue.component('remove-supplier-product', require('./components/api/RemoveSupplierProduct.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
