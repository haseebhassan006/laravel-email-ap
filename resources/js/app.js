/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;
import router from "./router";
import moment from "moment";
import Vuesax from 'vuesax'
import 'vuesax/dist/vuesax.css'
import Swal from 'sweetalert2'
window.Swal = Swal;
window.moment = moment;
Vue.use(Vuesax);
import VueContentPlaceholders from 'vue-content-placeholders'

Vue.use(VueContentPlaceholders)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//  const files = require.context('./', true, /\.vue$/i)
//  files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('avatar-component', require('./components/backend/components/avatarComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.directive('can', function (el, binding, vnode) {
    if (permissions.indexOf(binding.value) !== -1) {
        return vnode.elm.hidden = false;
    } else {
        return vnode.elm.hidden = true;
    }
})
Vue.filter("date_format", function (value) {
    if (value) {
        const date = moment
            .utc(String(value))
            .local()
            .format("DD MMM YYYY");
        const days = moment
            .utc(String(value))
            .local()
            .fromNow("DD MMM YYYY");
        return date;
    }
});
const app = new Vue({
    el: '#app',
    router,
    methods: {
        alertNotification(position = 'top-right', border, title, description) {
            const noti = this.$vs.notification({
                progress: 'auto',
                border,
                position,
                title: title,
                text: ` ${description} `
            })
        },
        alertNotificationMessage(status, res) {
            switch (status) {
                case 500:
                    this.alertNotification('top-right', 'danger', `Oops, Something Went Wrong ${status} Error! `, res.message);
                    break;
                case 422:
                    this.alertNotification('top-right', 'danger', `Oops, Unprocessable Entity ${status} Error! `, JSON.stringify(res));

                    break;
                case 200:
                    this.alertNotification('top-right', 'success', `response ${status} successfully! `, res);
                    break;
                case 301:
                    this.alertNotification('top-right', 'success', `Oops, Unprocessable Entity ${status} Error! `, res);
                    break;
                case 401:
                    this.alertNotification('top-right', 'danger', `Unauthorized, Oops Unprocessable Entity  Entity ${status} Error! `, res.message);
                    this.logoutUser();
                    break;
                default:
                    break;
            }
        },
        logoutUser() {
            axios.post('/logout').then((res) => {
                window.location.href = "/login";
            });
        },
    }
});
